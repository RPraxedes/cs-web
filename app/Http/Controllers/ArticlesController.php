<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
	public function index(){	//display article page
		if(request('id')){
			$articles = Article::all()->where('id','=',request('id'))->where('published_at','!=',NULL);
			return view('articles.page', ['articles' => $articles]);
		}
	}
    public function news(){
		$articles = Article::where('type','=','news')->where('published_at','!=',NULL)->paginate(10);	//format to JSON
		return view('articles.index', ['articles' => $articles]);
	}
	
	 public function research(){
		$articles = Article::where('type','=','research')->where('published_at','!=',NULL)->paginate(10);	//format to JSON
		return view('research.index', ['articles' => $articles]);
	}
	
	 public function publications(){
		$articles = Article::where('type','=','publication')->where('published_at','!=',NULL)->paginate(10);	//format to JSON
		return view('publications.index', ['articles' => $articles]);
	}
}
