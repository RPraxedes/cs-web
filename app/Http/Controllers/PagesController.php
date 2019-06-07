<?php

namespace App\Http\Controllers;

use App\Article;	// fetches Article model

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
		$alerts = ['Alert for students!', 'Another alert just in case!'];
		$news_preview = Article::all()->take(3)->where('category', '=', 'news');
		return view('welcome', ['alerts' => $alerts] , ['news_preview' => $news_preview]);
	}
	
	public function academics(){
		return view('academics.index');
	}
	
	public function faculty(){
		return view('academics.faculty');
	}
	
	public function courses(){
		return view('academics.courses');
	}
	
	public function sinsm(){
		return view('sinsm.index');
	}
	
	public function about(){
		return view('about.index');
	}
}
