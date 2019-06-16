<?php

namespace App\Http\Controllers;

use App\Article;	// fetches Article model
use App\Checklist;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
		$alerts = ['Alert for students!', 'Another alert just in case!'];
		$news_preview = Article::all()->where('type', '=', 'news')->where('published_at','!=',NULL)->take(3);
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
	public function ecologysystematics(){
		return view('academics.checklist', ['title' => 'Bachelor of Science in Biology', 'subtitle' => 'Ecology and Systematics']);
	}
	public function generalbiology(){
		return view('academics.checklist', ['title' => 'Bachelor of Science in Biology', 'subtitle' => 'General Biology']);
	}
	public function microbiology(){
		return view('academics.checklist', ['title' => 'Bachelor of Science in Biology', 'subtitle' => 'Microbiology']);
	}
	public function computerscience(){
		$pages = Checklist::whereTitle('Bachelor of Science in Computer Science')->get();
		return view('academics.checklist', ['pages' => $pages]);
	}
	public function mathematics(){
		$pages = Checklist::whereTitle('Bachelor of Science in Mathematics')->get();
		return view('academics.checklist', ['pages' => $pages]);
	}
	public function physics(){
		return view('academics.checklist', ['title' => 'Bachelor of Science in Physics', 'subtitle' => '']);
	}
	
	public function sinsm(){
		return view('sinsm.index');
	}
	
	public function about(){
		return view('about.index');
	}
}
