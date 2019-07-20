<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Publication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicationController extends Controller
{
    public function viewall(){
		$publications = Publication::all();
		$faculty = Faculty::all();		//for user_id in add function
		$category = 'Publication';
		$short_category = 'pub';
		$routeprefix = 'admin';
		$fields = [
			[
				'title' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Publication Title',
				'value' => NULL,
			],
			[
				'title' => 'Author/s',
				'name' => 'author',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Publication Author/s',
				'value' => NULL,
			],
			[
				'title' => 'Date Published',
				'name' => 'published_date',
				'type' => 'date',
				'required' => 'required',
				'placeholder' => NULL,
				'value' => NULL,
			],
			[
				'title' => 'Type',
				'name' => 'type',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'Non-refereed, Refereed-institutional, Local, National, or International',
				'value' => NULL,
			],
			[
				'title' => 'Journal',
				'name' => 'journal',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Name of Journal',
				'value' => NULL,
			],
			[
				'title' => 'Volume',
				'name' => 'volume',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'Volume of Journal',
				'value' => NULL,
			],
			[
				'title' => 'Link to Publisher or Paper',
				'name' => 'link',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'http://www.example.com',
				'value' => NULL,
			],
			[
				'title' => 'Entry Author',
				'name' => 'user_id',
				'type' => 'select',
				'required' => 'required',
				'placeholder' => NULL,
			],
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'admin.pub.edit',
				'method' => 'get',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'admin.pub.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'admin.pub.publish',
				'method' => 'post',
				'button' => 'success'
			],
		];
		return view('admin.viewitems')
			->with('fields', $fields)
			->with('publications', $publications)
			->with('short_category', $short_category)
			->with('category', $category)
			->with('obj_actions', $obj_actions)
			->with('faculty', $faculty)
			->with('routeprefix', $routeprefix);
	}
	
	public function edit($id){
		$publication = Publication::find((int)$id)->attributesToArray();
		$faculty = Faculty::all();		//for user_id in add function
		$fields = [
			[
				'title' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Publication Title',
				'value' => NULL,
			],
			[
				'title' => 'Author/s',
				'name' => 'author',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Publication Author/s',
				'value' => NULL,
			],
			[
				'title' => 'Date Published',
				'name' => 'published_date',
				'type' => 'date',
				'required' => 'required',
				'placeholder' => NULL,
				'value' => NULL,
			],
			[
				'title' => 'Type',
				'name' => 'type',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'Non-refereed, Refereed-institutional, Local, National, or International',
				'value' => NULL,
			],
			[
				'title' => 'Journal',
				'name' => 'journal',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Name of Journal',
				'value' => NULL,
			],
			[
				'title' => 'Volume',
				'name' => 'volume',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'Volume of Journal',
				'value' => NULL,
			],
			[
				'title' => 'Link to Publisher or Paper',
				'name' => 'link',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'http://www.example.com',
				'value' => NULL,
			],
			[
				'title' => 'Entry Author',
				'name' => 'user_id',
				'type' => 'select',
				'required' => 'required',
				'placeholder' => NULL,
			],
		];
		$action =
			[
				'name' => 'Save',
				'route' => 'admin.pub.save',
				'method' => 'post',
				'button' => 'success'
			];
		return view('admin.editentry')
		->with('pub', $publication)
		->with('category', 'Publication')
		->with('short_category', 'pub')
		->with('routeprefix', 'admin')
		->with('faculty', $faculty)
		->with('fields', $fields)
		->with('action', $action);
	}
	
	public function add(Request $request){
		$pub = new Publication($request->all());
		$pub->user_id = (int)$request->user_id;
		$pub->created_at = Carbon::now()->toDateTimeString();
		$pub->updated_at = Carbon::now()->toDateTimeString();
		$pub->save();
		return redirect()->route('admin.pub.viewall')->with('alert-success', 'Publication successfully added!');
	}
	
	public function save($id, Request $request){
		Publication::find((int)$id)->update([
			'title' => $request->title,
			'author' => $request->author,
			'published_date' => $request->published_date,
			'type' => $request->type,
			'journal' => $request->journal,
			'volume' => $request->volume,
			'link' => $request->link,
			'user_id' => $request->user_id,
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('admin.pub.viewall')->with('alert-success', 'Publication successfully changed!');
	}
	
	public function delete($id){
		Publication::find((int)$id)->delete();
		return redirect()->route('admin.pub.viewall')->with('alert-success', 'Publication successfully deleted!');
	}
	
	public function publish($id){
		Publication::find((int)$id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('admin.pub.viewall')->with('alert-success', 'Publication can now be publicly seen in your profile!');
	}
}
