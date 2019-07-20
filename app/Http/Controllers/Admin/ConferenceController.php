<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Conference;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConferenceController extends Controller
{
    public function viewall(){
		$conferences = Conference::all();
		$faculty = Faculty::all();		//for user_id in add function
		$category = 'Conference';
		$short_category = 'conf';
		$routeprefix = 'admin';
		$fields = [
			[
				'title' => 'Paper Title',
				'name' => 'paper_title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Title of the Paper Presented',
				'value' => NULL,
			],
			[
				'title' => 'Author/s',
				'name' => 'author',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Paper Author/s',
				'value' => NULL,
			],
			[
				'title' => 'Conference Title',
				'name' => 'conference_title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Title of the Conference',
				'value' => NULL,
			],
			[
				'title' => 'Type',
				'name' => 'type',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => NULL,
				'value' => NULL,
			],
			[
				'title' => 'Date of the Conference',
				'name' => 'conference_date',
				'type' => 'date',
				'required' => NULL,
				'placeholder' => 'Non-refereed, Refereed-institutional, Local, National, or International',
				'value' => NULL,
			],
			[
				'title' => 'Venue of the Conference',
				'name' => 'venue',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'Address of the Venue',
				'value' => NULL,
			],
			[
				'title' => 'Link to the Conference Information',
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
				'route' => 'admin.conf.edit',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'admin.conf.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'admin.conf.publish',
				'method' => 'post',
				'button' => 'success'
			],
		];
		return view('admin.viewitems')
			->with('fields', $fields)
			->with('publications', $conferences)
			->with('category', $category)
			->with('short_category', $short_category)
			->with('obj_actions', $obj_actions)
			->with('faculty', $faculty)
			->with('routeprefix', $routeprefix);
	}
	
	public function edit($id){
		$conference = Conference::find((int)$id)->attributesToArray();
		$faculty = Faculty::all();		//for user_id in add function
		$fields = [
			[
				'title' => 'Paper Title',
				'name' => 'paper_title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Title of the Paper Presented',
				'value' => NULL,
			],
			[
				'title' => 'Author/s',
				'name' => 'author',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Paper Author/s',
				'value' => NULL,
			],
			[
				'title' => 'Conference Title',
				'name' => 'conference_title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Title of the Conference',
				'value' => NULL,
			],
			[
				'title' => 'Type',
				'name' => 'type',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => NULL,
				'value' => NULL,
			],
			[
				'title' => 'Date of the Conference',
				'name' => 'conference_date',
				'type' => 'date',
				'required' => NULL,
				'placeholder' => 'Non-refereed, Refereed-institutional, Local, National, or International',
				'value' => NULL,
			],
			[
				'title' => 'Venue of the Conference',
				'name' => 'venue',
				'type' => 'text',
				'required' => NULL,
				'placeholder' => 'Address of the Venue',
				'value' => NULL,
			],
			[
				'title' => 'Link to the Conference Information',
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
				'route' => 'admin.conf.save',
				'method' => 'post',
				'button' => 'success'
			];
			
		return view('admin.editentry')
		->with('pub', $conference)
		->with('category', 'Conference')
		->with('short_category', 'conf')
		->with('routeprefix', 'admin')
		->with('faculty', $faculty)
		->with('fields', $fields)
		->with('action', $action);
	}
	
	public function add(Request $request){
		$conf = new Conference($request->all());
		$conf->user_id = (int)$request->user_id;
		$conf->created_at = Carbon::now()->toDateTimeString();
		$conf->updated_at = Carbon::now()->toDateTimeString();
		$conf->save();
		return redirect()->route('admin.conf.viewall')->with('alert-success', 'Conference successfully added!');
	}
	
	public function save($id, Request $request){
		Conference::find((int)$id)->update([
			'paper_title' => $request->paper_title,
			'author' => $request->author,
			'conference_date' => $request->conference_date,
			'type' => $request->type,
			'venue' => $request->venue,
			'conference_title' => $request->conference_title,
			'link' => $request->link,
			'user_id' => $request->user_id,
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('admin.conf.viewall')->with('alert-success', 'Conference successfully changed!');
	}
	
	public function delete($id){
		Conference::find((int)$id)->delete();
		return redirect()->route('admin.conf.viewall')->with('alert-success', 'Conference successfully deleted!');
	}
	
	public function publish($id){
		Conference::find((int)$id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('admin.conf.viewall')->with('alert-success', 'Conference can now be publicly seen in your profile!');
	}
}
