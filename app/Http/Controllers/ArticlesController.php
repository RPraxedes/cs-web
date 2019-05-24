<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
		if(request('id')){
			$articles = Article::all()->where('id','=',request('id'));
			return view('articles.page', ['articles' => $articles]);
		}
		$articles = Article::all();		//format to JSON
		return view('articles.index', ['articles' => $articles]);
	}
}
