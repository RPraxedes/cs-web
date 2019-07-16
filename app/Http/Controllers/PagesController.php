<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Article;	// fetches Article model
use App\Models\Checklist;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Department;
use App\Models\Publication;
use App\Models\Course;

use Storage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
		//$alerts = ['Alert for students!', 'Another alert just in case!'];
		$news_preview = Article::with('user')->whereType('news')->where('published_at','!=',NULL)->take(3)->get();
		$alerts = DB::table('alerts')->where('display_at', '<', Carbon::now())->where('destroy_at', '>', Carbon::now())->orWhereNull('destroy_at')->get();
		//$authors = User::where('id', '=', $news_preview->author_id)->get();
		return view('welcome', ['news_preview' => $news_preview], ['alerts' => $alerts]);
	}
	
	public function academics(){
		return view('academics.index');
	}
	
	public function faculty(){
		$faculty = Department::all();
		return view('faculty.dept', ['faculty' => $faculty]);
	}
	
	public function department($dept){
		switch($dept){
			case 'biology':
				$dept = 1;
				break;
			case 'physical-science':
				$dept = 2;
				break;
			case 'math-comsci':
				$dept = 3;
				break;
			case 'hkp':
				$dept = 4;
			case 'executive':
				$dept = 5;
				break;
		}
		$faculty = Faculty::where('dept_id', '=', $dept)->where('published_at', '!=', NULL)->get();
		return view('faculty.index', ['faculty' => $faculty]);
	}
	
	public function courses(){
		$level = 'Undergraduate';
		$courses = Course::whereLevel($level)->get();
		return view('academics.courses', ['courses' => $courses, 'level' => $level]);
	}
	
	public function gradcourses(){
		$level = 'Graduate';
		$courses = Course::whereLevel($level)->get();
		return view('academics.courses', ['courses'=> $courses, 'level' => $level]);
	}
	
	public function getchecklist($name){
		$pages = Checklist::join('courses', 'checklists.title', '=', 'courses.title')->where('uri', '=', $name)->get();
		if(isset(Auth::user()->id)){	
			$user =Auth::user()->position;
		}else{
			$user = NULL;
		}
		return view('academics.checklist', ['pages' => $pages, 'position' => $user]);
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
	
	public function gallery(){
		$images = Storage::disk('public')->allFiles('images');
		return view('gallery.index', ['images' => $images]);
	}
	
	public function articles($id){	//display article page
		if(isset($id)){
			$article = Article::with('user')->find((int)$id);
			if(!$article->published_at){
				return redirect('/');
			}else{
				return view('articles.page', ['article' => $article]);
			}
		}
	}
    public function news(){
		$articles = Article::with('user')->whereType('news')->where('published_at','!=',NULL)->paginate(10);
		return view('articles.index', ['articles' => $articles], ['title' => 'News']);
	}
	
	 public function research(){
		$articles = Article::with('user')->whereType('research')->where('published_at','!=',NULL)->paginate(10);
		return view('articles.index', ['articles' => $articles], ['title' => 'Research']);
	}
	
	 public function publications(){
		$publications = Publication::where('published_at', '!=', NULL)->orderBy('published_at', 'desc')->paginate(20);
		return view('publications.index', ['publications' => $publications]);
	}
}
