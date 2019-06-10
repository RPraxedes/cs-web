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
			$articles = Article::all()->where('id','=',request('id'));
			return view('articles.page', ['articles' => $articles]);
		}
	}
    public function news(){
		$articles = Article::where('type','=','news')->paginate(15);	//format to JSON
		return view('articles.index', ['articles' => $articles]);
	}
	
	 public function research(){
		$articles = Article::where('type','=','research')->paginate(15);	//format to JSON
		return view('research.index', ['articles' => $articles]);
	}
	
	 public function publications(){
		$articles = Article::where('type','=','publication')->paginate(15);	//format to JSON
		return view('publications.index', ['publications' => $articles]);
	}
}
