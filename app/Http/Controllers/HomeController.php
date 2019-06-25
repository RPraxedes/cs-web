<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleEditRequest;

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
        return view('dash');
    }
	
	public function view(){
		$user = Auth::user();
		return view('user.view', ['articles' => $user->articles]);
	}
	
	public function create(){	// returns article builder page
		$type = request('type');
		if($type == 'news' || $type == 'research' || $type == 'publication'){
			return view('user.create', ['article' => NULL], ['type' => request('type')]);
		}else{
			return response(view('errors.405'), 405);
		}
	}
	
	public function edit(){
		$article = Article::find((int)request('id'));
		return view('user.edit', ['article' => $article]);
	}
	
	public function modify(ArticleEditRequest $request){	// modification
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
		return redirect('dashboard')->with('alert-success', 'Article successfully saved!');
	}
	
	public function delete(){
		$article = Article::find((int)request('id'));
		File::delete(public_path().'\\images\\'.$article->header_image);
		Article::find((int)request('id'))->delete();
		return redirect('dashboard')->with('alert-success', 'Article successfully removed!');
	}
	
	public function save(ArticleRequest $request){	// first time save
		$requestData = $request->all();
		$imageName = time().'.'.request()->file('header_image')->getClientOriginalExtension();
		$requestData['header_image'] = $imageName;
		$article = new Article($requestData);
		request()->file('header_image')->move(public_path('images'), $imageName);
		Auth::user()->articles()->save($article);
		$request->session()->flash('alert-success', 'Article successfully saved!');
		return redirect('dashboard');
	}
	
	public function publish(){
		$article = Article::find((int)request('id'));
		$article->published_at = Carbon::now()->toDateTimeString();
		$article->save();
		return redirect('dashboard')->with('alert-success', 'Article successfully published!');
	}
	
	public function preview(){
		$article = Article::find((int)request('id'));
		return view('articles.page', ['article' => $article]);
	}
}
