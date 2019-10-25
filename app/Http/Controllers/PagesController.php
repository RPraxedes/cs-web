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
use App\Models\Project;
use App\Models\Course;
use App\Models\Gallery;

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

	public function phdcourses(){
		$level = 'Doctorate';
		$courses = Course::whereLevel($level)->get();
		return view('academics.courses', ['courses'=> $courses, 'level' => $level]);
	}

	public function getchecklist($name){
		$pages = Checklist::join('courses', 'checklists.title', '=', 'courses.title')
               ->where('uri', '=', $name)
               ->select('*','checklists.id as checklists_id')
               ->get();
		if(isset(Auth::user()->id)){
			$user = Auth::user()->position;
		}else{
			$user = NULL;
		}

    if($pages->first()->level == 'RGEP'){
      return view('academics.rgepchecklist', ['pages' => $pages, 'position' => $user]);
    }elseif($pages->first()->level != 'Undergraduate'){
			return view('academics.gradchecklist', ['pages' => $pages, 'position' => $user]);
		}else{
			return view('academics.checklist', ['pages' => $pages, 'position' => $user]);
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

	public function src(){
    $images = Gallery::paginate(12);
		return view('src.index', ['images' => $images]);
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
    $departments = Department::all();
    return view('research.index', ['departments' => $departments]);
	}

  public function research_by_department($dept){
    $dept = Department::where('short_title', '=', $dept)->first();

    $publications = Project::join('faculty', 'projects.user_id', '=', 'faculty.user_id')
                      ->where('faculty.dept_id', '=', $dept->id)
                      ->where('projects.published_at', '!=', NULL)
                      ->orderBy('projects.published_at', 'desc')
                      ->select('*','faculty.user_id as faculty_id')
                      ->paginate(20);

    return view('research.by_department', ['publications' => $publications]);
	}

  public function publications(){
    $departments = Department::all();
    return view('publications.index', ['departments' => $departments]);
  }

	public function publications_by_department($dept){
    $dept = Department::where('short_title', '=', $dept)->first();

    $publications = Publication::join('faculty', 'publications.user_id', '=', 'faculty.user_id')
                      ->where('faculty.dept_id', '=', $dept->id)
                      ->where('publications.published_at', '!=', NULL)
                      ->orderBy('publications.published_at', 'desc')
                      ->select('*','faculty.user_id as faculty_id')
                      ->paginate(20);

    return view('publications.by_department', ['publications' => $publications]);
	}
}
