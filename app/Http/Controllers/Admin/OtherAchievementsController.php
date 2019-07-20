<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\OtherAchievement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherAchievementsController extends Controller
{
    public function viewall(){
		$others = OtherAchievement::with('faculty')->get();
		$faculty = Faculty::all();		//for user_id in add function
		$category = 'Other Achievement';
		$short_category = 'other';
		$routeprefix = 'admin';
		$fields = [
			[
				'title' => 'Entry Author',
				'name' => 'user_id',
				'type' => 'select',
				'required' => 'required',
				'placeholder' => NULL,
			],
			[
				'title' => 'Other Achievements',
				'name' => 'content',
				'type' => 'tiny',
				'required' => NULL,
				'placeholder' => 'Write in a bulleted list your other achievements (grants, recognitions, etc.). Use the "Insert/edit" link button on the right or right-click to create hyperlinks. Write headings to specify type of achievement.',
				'value' => NULL,
			],
		];
		$obj_actions = [
		
			[
				'name' => 'Edit',
				'route' => 'admin.other.edit',
				'method' => 'post',
				'button' => 'success'
			],
			[
				'name' => 'Delete',
				'route' => 'admin.other.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'admin.other.publish',
				'method' => 'post',
				'button' => 'success'
			],
		];
		return view('admin.viewitems')
			->with('fields', $fields)
			->with('publications', $others)
			->with('short_category', $short_category)
			->with('category', $category)
			->with('obj_actions', $obj_actions)
			->with('faculty', $faculty)
			->with('routeprefix', $routeprefix);
	}
	
	public function edit($id){
		$others = OtherAchievement::find((int)$id)->attributesToArray();
		$faculty = Faculty::all();		//for user_id in add function
		$fields = [
			[
				'title' => 'Entry Author',
				'name' => 'user_id',
				'type' => 'select',
				'required' => 'required',
				'placeholder' => NULL,
			],
			[
				'title' => 'Other Achievements',
				'name' => 'content',
				'type' => 'tiny',
				'required' => NULL,
				'placeholder' => 'Write in a bulleted list your other achievements (grants, recognitions, etc.). Use the "Insert/edit" link button on the right or right-click to create hyperlinks. Write headings to specify type of achievement.',
				'value' => NULL,
			],
		];
		$action =
			[
				'name' => 'Save',
				'route' => 'admin.other.save',
				'method' => 'post',
				'button' => 'success'
			];
		return view('admin.edittextarea')
		->with('pub', $others)
		->with('category', 'Other Achievement')
		->with('short_category', 'other')
		->with('routeprefix', 'admin')
		->with('faculty', $faculty)
		->with('fields', $fields)
		->with('action', $action);
	}
	
	public function add(Request $request){
		$others = new OtherAchievement($request->all());
		$others->user_id = (int)$request->user_id;
		$others->created_at = Carbon::now()->toDateTimeString();
		$others->updated_at = Carbon::now()->toDateTimeString();
		$others->save();
		return redirect()->route('admin.other.viewall')->with('alert-success', 'Publication successfully added!');
	}
	
	public function save($id, Request $request){
		$others = OtherAchievement::find($id);
		$others->update([
			'content' => $request->content,
			'user_id' => $request->user_id,
			'updated_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('admin.other.viewall')->with('alert-success', 'Achievements successfully changed!');
	}
	
	public function delete($id){
		OtherAchievement::find($id)->delete();
		return redirect()->route('admin.other.viewall')->with('alert-success', 'Achievements successfully deleted!');
	}
	
	public function publish($id){
		OtherAchievement::find($id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('admin.other.viewall')->with('alert-success', 'Achievements can now be publicly seen in your profile!');
	}
}
