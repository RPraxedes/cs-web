<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dash');
    }
	
	public function create(){	// returns article builder page
		$type = request('type');
		if($type == 'news' || $type == 'research' || $type == 'publication'){
			return view('user.create', ['type' => request('type')]);
		}else{
			return response(view('errors.405'), 405);
		}
	}
	
	public function view(){
		//$users = \App\Models\Category::with('users')->get();
		$articles = Article::where('author_id','=',auth()->user()->id)->paginate(10);
		return view('user.view', ['articles' => $articles]);
	}
	
	protected function save(){	//not publish
		var_dump(request('title'));
		var_dump(request('type'));
		var_dump(request('body'));
		/* $article->title = request('title');
		
		$article->body = request('body');
		$article->type = request('type');
		$article->category = request('category');
		
		$article->save(); */
	}
	
}
