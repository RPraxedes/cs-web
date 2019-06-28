<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Article;	// fetches Article model
use App\Models\Checklist;
use App\Models\User;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
		//$alerts = ['Alert for students!', 'Another alert just in case!'];
		$news_preview = Article::with('user')->whereType('news')->where('published_at','!=',NULL)->take(3)->get();
		//$authors = User::where('id', '=', $news_preview->author_id)->get();
		return view('welcome', ['news_preview' => $news_preview]);
	}
	
	public function academics(){
		return view('academics.index');
	}
	
	public function faculty(){
		return view('faculty.index');
	}
	
	public function facultyprofile(){
		
		return view('faculty.page');
	}
	
	public function courses(){
		return view('academics.courses');
	}
	
	public function getchecklist($name){
		switch($name){
			case "ecology-and-systematics":
				$title = "Bachelor of Science in Biology (Ecology and Systematics)";
				break;
			case "general-biology":
				$title = "Bachelor of Science in Biology (General Biology)";
				break;
			case "microbiology":
				$title = "Bachelor of Science in Biology (Microbiology)";
				break;
			case "computer-science":
				$title = "Bachelor of Science in Computer Science";
				break;
			case "physics":
				$title = "Bachelor of Science in Physics";
				break;
			case "mathematics":
				$title = "Bachelor of Science in Mathematics";
				break;
		}
		if(isset(Auth::user()->id)){	
			$user = User::find((int)Auth::user()->id)->position;
		}else{
			$user = NULL;
		}
			return view('academics.checklist', ['pages' => Checklist::whereTitle($title)->get()], ['position' =>$user]);
	}
	
	public function editchecklist($id){
		$user = User::find((int)Auth::user()->id);
		if($user->position == "admin"){
			return view('user.editchecklist', ['page' => Checklist::find((int)$id)]);
		}else{
			return response(view('errors.405'), 405);
		}
	}
	
	public function savechecklist($id){
		$page = Checklist::find((int)$id);
		$page->update([
			'title' => request('title'),
			'body' => request('body'),
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect('/');
	}
	
	public function sinsm(){
		return view('sinsm.index');
	}
	
	public function about(){
		return view('about.index');
	}
	public function secret(){
		return view('welcome.index');
	}
}
