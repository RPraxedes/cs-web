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
		$articles = Article::paginate(15);		//format to JSON
		return view('articles.index', ['articles' => $articles]);
	}
	
	 public function research(){
		if(request('id')){
			$articles = Article::all()->where('id','=',request('id'));
			return view('articles.page', ['articles' => $articles]);
		}
		$articles = Article::paginate(15);		//format to JSON
		return view('research.index', ['articles' => $articles]);
	}
	
	 public function publications(){
		if(request('id')){
			$articles = Article::all()->where('id','=',request('id'));
			return view('articles.page', ['articles' => $articles]);
		}
		$articles = Article::paginate(15);		//format to JSON
		return view('publications.index', ['articles' => $articles]);
	}
	
	protected function createArticle(){
		return Article::create([
            'title' => $data['title'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
	}
}
