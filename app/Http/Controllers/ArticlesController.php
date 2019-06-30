<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use File;
use Carbon\Carbon;
use App\Models\Article;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
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
				'name' => 'Publish',
				'route' => 'article.publish',
				'method' => 'post',
				'button' => 'success'
			],
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
				'button' => 'info'
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
	
	public function createbuilder($type){	// returns article builder page
		if($type == 'news' || $type == 'research' || $type == 'publication'){
			return view('user.create', ['article' => NULL], ['type' => $type]);
		}else{
			return response(view('errors.405'), 405);
		}
	}
	
	public function editarticle($id){
		$article = Article::find((int)$id);
		return view('user.edit', ['article' => $article]);
	}
	
	public function save(Request $request){	// modification
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
		return redirect()->route('article.view')->with('alert-success', 'Article successfully saved!');
	}
	
	public function delete($id){
		$article = Article::find((int)$id);
		File::delete(public_path().'\\images\\'.$article->header_image);
		Article::find((int)request('id'))->delete();
		return redirect()->route('article.view')->with('alert-success', 'Article successfully removed!');
	}
	
	public function create(ArticleRequest $request){	// first time save
		$requestData = $request->all();
		$imageName = time().'.'.request()->file('header_image')->getClientOriginalExtension();
		$requestData['header_image'] = $imageName;
		$article = new Article($requestData);
		request()->file('header_image')->move(public_path('images'), $imageName);
		Auth::user()->articles()->save($article);
		return redirect()->route('article.view')->with('alert-success', 'Article successfully saved!');
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
}
