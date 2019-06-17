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
		$pages = Checklist::whereTitle('Bachelor of Science in Biology (Ecology and Systematics)')->get();
		return view('academics.checklist', ['pages' => $pages]);
	}
	public function generalbiology(){
		$pages = Checklist::whereTitle('Bachelor of Science in Biology (General Biology)')->get();
		return view('academics.checklist', ['pages' => $pages]);
	}
	public function microbiology(){
		$pages = Checklist::whereTitle('Bachelor of Science in Biology (Microbiology)')->get();
		return view('academics.checklist', ['pages' => $pages]);
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
		$pages = Checklist::whereTitle('Bachelor of Science in Physics')->get();
		return view('academics.checklist', ['pages' => $pages]);
	}
	
	public function sinsm(){
		return view('sinsm.index');
	}
	
	public function about(){
		return view('about.index');
	}
}
