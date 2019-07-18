<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
	public function viewall(){
		$images = Gallery::paginate(16);
		return view('gallery.index', ['images' => $images]);
	}
}