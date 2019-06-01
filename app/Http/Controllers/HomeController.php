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
		if(request('type')){
			return view('user.create', ['type' => request('type')]);
		}else{
			return view('user.create', ['type' => 'Article']);			
		}
	}
	
	
}
