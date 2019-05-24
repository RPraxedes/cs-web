<?php

namespace App\Http\Controllers;

use App\Article;	// fetches Article model

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
		$alerts = ['Alert 1', 'Alert 2'];
		$news_preview = Article::all()->take(3)->where('category', '=', 'news');
		
		return view('welcome', ['alerts' => $alerts] , ['news_preview' => $news_preview]);
	}
	public function about(){
		return view('about');
	}
	
	public function sinsm(){
		return view('sinsm.index');
	}
}
