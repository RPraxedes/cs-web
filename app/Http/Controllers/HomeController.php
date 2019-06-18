<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

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
			return view('user.create', ['type' => request('type')], ['alert' => false]);
		}else{
			return response(view('errors.405'), 405);
		}
	}
	
	public function view(){
		//$users = \App\Models\Category::with('users')->get();
		$user = Auth::user();
		return view('user.view', ['articles' => $user->articles]);
	}
	
	public function save(ArticleRequest $request){
		$article = new Article($request->all());
		Auth::user()->articles()->save($article);
		//return redirect('dashboard');
	}
	
}
