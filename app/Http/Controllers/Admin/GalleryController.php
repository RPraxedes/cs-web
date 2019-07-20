<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function viewall(){
		$gallery = Gallery::all();
		$obj_name = "Gallery Items";
		$obj_columns = [
			"filename",
			"alt",
			"caption",
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'admin.gallery.edit',
				'method' => 'get',
				'button' => 'secondary',
			],
			[
				'name' => 'Delete',
				'route' => 'admin.gallery.delete',
				'method' => 'delete',
				'button' => 'danger'
			],
		];
		return view('admin.viewall')
			->with('objects', $gallery)
			->with('obj_columns', $obj_columns)
			->with('obj_name', $obj_name)
			->with('obj_actions', $obj_actions);
	}
	
	public function add(Request $request){
		
	}
	
	public function edit(Request $request){
		$image = Gallery::find($request->id);
		return $image;
	}
	
	public function save(Request $request){
		
	}
	
	public function delete(Request $request){
		Gallery::find($request->id)->delete();
		return redirect()->route('admin.gallery.viewall')->with('Successfully removed from the Gallery!');
	}
}
