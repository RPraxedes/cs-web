<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use File;
use Carbon\Carbon;
use App\Models\Article;
use App\Models\User;
use App\Models\Checklist;
use App\Models\Publication;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleEditRequest;
use App\Http\Requests\EditProfileRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$user = Auth::user();
        return view('dash', ['id' => $user->id]);
    }
	
	public function profile(){
		$user = Auth::user();
		$from_admin = false;
		$routeprefix = "user";
        return view('user.profile', [
			'id' => Auth::user()->id,
			'name' => Auth::user()->name,
			'email' => Auth::user()->email,
			'position' => Auth::user()->position,
			'from_admin' => $from_admin,
			'routeprefix' => $routeprefix,
		]);
    }
	public function saveprofile(Request $request){
		$user = User::find((int)$request->id);
		$user->update([
			'name' => $request->name,
			'email' => $request->email,
			'position' => $request->position,
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect('dashboard')->with('alert-success', 'Profile successfully saved!');
	}
	
	public function viewarticle(){
		$user = Auth::user();
		$userArray = $user->articles->makeHidden('user_id');
		$obj_name = "My Articles";
		$obj_columns = [
			"id",
			"title",
			"body",
			"header_image",
			"header_alt",
			"type",
			"published_at",
			"created_at",
			"updated_at",
		];
		$obj_actions = [
			[
				'name' => 'Preview',
				'route' => 'article.preview',
				'method' => 'post',
				'button' => 'primary'
			],
			[
				'name' => 'Edit',
				'route' => 'article.edit',
				'method' => 'post',
				'button' => 'success'
			],
			[
				'name' => 'Delete',
				'route' => 'article.delete',
				'method' => 'post',
				'button' => 'warning'
			],
		];
		return view('user.viewall')
			->with('objects', $userArray)
			->with('obj_columns', $obj_columns)
			->with('obj_name', $obj_name)
			->with('obj_actions', $obj_actions);
	}
	
	public function createbuilder(){	// returns article builder page
		$type = request('type');
		if($type == 'news' || $type == 'research' || $type == 'publication'){
			return view('user.create', ['article' => NULL], ['type' => request('type')]);
		}else{
			return response(view('errors.405'), 405);
		}
	}
	
	public function editarticle($id){
		$article = Article::find((int)$id);
		return view('user.edit', ['article' => $article]);
	}
	
	public function save(ArticleEditRequest $request){	// modification
		$requestData = $request->all();
		$article = Article::find((int)$requestData['id']);
		if(isset($requestData['header_image'])){	// there is change to header image
			File::delete(public_path().'\\images\\'.$article->header_image);	// delete old image
			$imageName = time().'.'.request()->file('header_image')->getClientOriginalExtension();
			$requestData['header_image'] = $imageName;
			request()->file('header_image')->move(public_path('images'), $imageName);	//upload new image
			$article->update([
				'title' => $requestData['title'],
				'body' => $requestData['body'],
				'header_image' => $requestData['header_image'],
				'header_alt' => $requestData['header_alt'],
				'updated_at' => Carbon::now()->toDateTimeString(),
			]);
		}else{	// no change to header image 
			$article->update([
				'title' => $requestData['title'],
				'body' => $requestData['body'],
				'header_alt' => $requestData['header_alt'],
				'updated_at' => Carbon::now()->toDateTimeString(),
			]);
		}
		return redirect()->route('user.viewall')->with('alert-success', 'Article successfully saved!');
	}
	
	public function delete($id){
		$article = Article::find((int)$id);
		File::delete(public_path().'\\images\\'.$article->header_image);
		Article::find((int)$id)->delete();
		return redirect()->route('user.viewall')->with('alert-success', 'Article successfully removed!');
	}
	
	public function create(ArticleRequest $request){	// first time save
		$requestData = $request->all();
		$imageName = time().'.'.request()->file('header_image')->getClientOriginalExtension();
		$requestData['header_image'] = $imageName;
		$article = new Article($requestData);
		request()->file('header_image')->move(public_path('images'), $imageName);
		Auth::user()->articles()->save($article);
		return redirect()->route('user.viewall')->with('alert-success', 'Article successfully saved!');
	}
	
	public function publish(){
		$article = Article::find((int)request('id'));
		$article->published_at = Carbon::now()->toDateTimeString();
		$article->save();
		return redirect('dashboard')->with('alert-success', 'Article successfully published!');
	}
	
	public function preview($id){
		$article = Article::find((int)$id);
		return view('articles.page', ['article' => $article]);
	}
	
	public function viewchecklist(){
	$articles = Checklist::all();
	return view('user.view', ['articles' => $articles]);
	}
	
	public function editchecklist(){
		$article = Checklist::find((int)request('id'));
		return view('user.edit', ['article' => $article]);
	}
	
	public function viewalerts(){
		echo "Wa ha ha!";
		//return view('');
	}
	
	public function createalert(){
		if(request()->has('start_date', 'start_time')){
			$starttime = Carbon::createFromFormat('Y-m-d H:i:s', request('start_date').' '.request('start_time').':00')->toDateTimeString();
		}else if(request()->has('startNow')){
			$starttime = Carbon::createFromTime(Carbon::now()->hour, Carbon::now()->minute, 00);
		}
		if(request()->has('end_date', 'end_time')){
			$endtime = Carbon::createFromFormat('Y-m-d H:i:s', request('end_date').' '.request('end_time').':00')->toDateTimeString();
		}else if(request()->has('endNever')){
			$endtime = NULL;
		}
		
		DB::table('alerts')->insert([
			'body' => request('alert_body'),
			'style' => request('alert_style'),
			'display_at' => $starttime,
			'destroy_at' => $endtime,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		return redirect('dashboard')->with('alert-success', 'Alert successfully posted!');
	}
}
