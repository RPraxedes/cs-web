<?php

namespace App\Http\Controllers;

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
			return response(view('errors.404'), 404);
		}
	}
	
	public function save(){	//not publish
		$article->title = request('title');
		$article->author_id = Auth::id();
		$article->body = request('body');
		$article->type = request('type');
		$article->category = request('category');
		
		$article->save();
	}
	
}
