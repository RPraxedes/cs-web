<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
		$articles = Article::all()->where('type', '=', 'news');
		if(request('id')){
			$articles = Article::all()->where('id','=',request('id'));
			return view('articles.page', ['articles' => $articles]);
		}
		$articles = Article::paginate(15);		//format to JSON
		return view('articles.index', ['articles' => $articles]);
	}
	
	 public function research(){
		$articles = Article::all()->where('type', '=', 'research');
		if(request('id')){
			$articles = $articles->where([
				['id','=',request('id')],
			]);
			return view('articles.page', ['articles' => $articles]);
		}else{
			$articles = Article::paginate(15);		//format to JSON
			return view('research.index', ['articles' => $articles]);
		}
	}
	
	 public function publications(){
		$articles = Article::all()->where('type', '=', 'publication');
		if(request('id')){
			$articles = $articles->where([
				['id','=',request('id')],
			]);
			return view('articles.page', ['articles' => $articles]);
		}else{
			$articles = Article::paginate(15);		//format to JSON
			return view('research.index', ['articles' => $articles]);
		}
	}
}
