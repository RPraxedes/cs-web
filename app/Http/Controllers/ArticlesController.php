<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
	public function index(){	//display article page
		if(request('id')){
			$article = Article::with('user')->find(request('id'));
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
		$articles = Article::with('user')->whereType('publication')->where('published_at','!=',NULL)->paginate(10);
		return view('articles.index', ['articles' => $articles], ['title' => 'Publications']);
	}
}
