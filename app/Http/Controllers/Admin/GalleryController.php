<?php

namespace App\Http\Controllers\Admin;

use Auth;
use File;
use Carbon\Carbon;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function viewall(){
		$gallery = Gallery::all();
		$fields = [
			[
				'title' => 'Gallery Image',
				'name' => 'filename',
				'type' => 'file',
				'required' => 'required',
				'placeholder' => NULL,
				'value' => NULL,
			],
			[
				'title' => 'Alt',
				'name' => 'alt',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'Alt',
				'value' => NULL,
			],
			[
				'title' => 'Caption',
				'name' => 'caption',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'What can you say about this image?',
				'value' => NULL,
			],
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
				'method' => 'post',
				'button' => 'danger'
			],
		];
		return view('admin.viewitems')
			->with('fields', $fields)
			->with('publications', $gallery)
			->with('short_category', 'gallery')
			->with('category', 'Gallery Item')
			->with('obj_actions', $obj_actions)
			->with('faculty', Auth::user())
			->with('routeprefix', 'admin');
	}
	
	public function add(Request $request){
		$requestData = $request->all();
		
		$imageName = 'gallery\\'.time().'.'.request()->file('filename')->getClientOriginalExtension();
		$requestData['filename'] = $imageName;
		
		$pub = new Gallery($requestData);
		if(!isset($pub->alt)){
			$pub->alt = '...';
		}
		if(!isset($pub->caption)){
			$pub->caption = '';
		}
		$pub->created_at = Carbon::now()->toDateTimeString();
		$pub->updated_at = Carbon::now()->toDateTimeString();
		$pub->save();
		
		request()->file('filename')->move(public_path('images'), $imageName);
		
		return redirect()->route('admin.gallery.viewall')->with('alert-success', 'Image successfully added!');
	}
	
	public function edit($id, Request $request){
		$image = Gallery::find($id)->attributesToArray();
		$faculty = Auth::user();
		$fields = [
			[
				'title' => 'Gallery Image',
				'name' => 'filename',
				'type' => 'file',
				'required' => 'required',
				'placeholder' => NULL,
				'value' => NULL,
			],
			[
				'title' => 'Alt',
				'name' => 'alt',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'Alt',
				'value' => NULL,
			],
			[
				'title' => 'Caption',
				'name' => 'caption',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'What can you say about this image?',
				'value' => NULL,
			],
		];
		$action =
			[
				'name' => 'Save',
				'route' => 'admin.gallery.save',
				'method' => 'post',
				'button' => 'success'
			];
		return view('admin.editentry')
		->with('pub', $image)
		->with('category', 'Gallery Item')
		->with('short_category', 'gallery')
		->with('routeprefix', 'admin')
		->with('faculty', $faculty)
		->with('fields', $fields)
		->with('action', $action);
	}
	
	public function save($id, Request $request){
		$requestData = $request->all();
		$image = Gallery::find((int)$id);
		if(isset($requestData['filename'])){
			File::delete(public_path().'\\images\\'.$image->filename);	// delete old image
			$imageName = 'gallery\\'.time().'.'.request()->file('filename')->getClientOriginalExtension();
			$requestData['filename'] = $imageName;
			$image->update([
				'filename' => $requestData['filename'],
				'alt' => $requestData['alt'],
				'caption' => $requestData['caption'],
				'updated_at' => Carbon::now()->toDateTimeString(),
			]);
			request()->file('filename')->move(public_path('images'), $imageName);
		}else{
			$image->update([
				'alt' => $requestData['alt'],
				'caption' => $requestData['caption'],
				'updated_at' => Carbon::now()->toDateTimeString(),
			]);
		}
		return redirect()->route('admin.gallery.viewall')->with('alert-success', 'Image successfully changed!');
	}
	
	public function delete($id){
		$image = Gallery::find((int)$id);
		File::delete(public_path().'\\images\\'.$image->filename);
		$image->delete();
		return redirect()->route('admin.gallery.viewall')->with('Image removed from the Gallery!');
	}
}
