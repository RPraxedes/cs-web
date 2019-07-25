<?php

namespace App\Http\Controllers\Faculty;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\OtherAchievement;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OtherAchievementsController extends Controller
{
    public function viewall(){
		$addExists = false;
		$other = OtherAchievement::where('user_id', '=', (int)Auth::user()->id)->get();
		if($other->isEmpty()){
			$addExists = true;
		}
		$obj_actions = [
			[
				'name' => 'Add',
				'route' => 'new',
				'method' => 'get',
				'button' => 'success',
			],
			[
				'name' => 'Edit',
				'route' => 'edit',
				'method' => 'post',
				'button' => 'success'
			],
			[
				'name' => 'Delete',
				'route' => 'delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'publish',
				'method' => 'post',
				'button' => 'success'
			],
		];
		return view('user.viewitems')
			->with('publications', $other)
			->with('obj_actions', $obj_actions)
			->with('routeprefix', 'faculty')
			->with('short_category', 'other')
			->with('category', 'Other Achievement')
			->with('addExists', $addExists);
	}
	
	public function new(){
		$fields = [
			[
				'title' => 'Other Achievements',
				'name' => 'content',
				'type' => 'tiny',
				'required' => NULL,
				'placeholder' => 'Write in a bulleted list your other achievements (grants, recognitions, etc.). Use the "Insert/edit" link button on the right or right-click to create hyperlinks. Write headings to specify type of achievement.',
				'value' => NULL,
			],
		];
		$action = [
			'name' => 'Add',
			'route' => 'add',
			'method' => 'put',
			'button' => 'success'
		];
		return view('user.edittextarea')
		->with('pub', NULL)
		->with('fields', $fields)
		->with('action', $action)
		->with('category', 'Other Achievement')
		->with('short_category', 'other')
		->with('routeprefix', 'faculty')
		->with('page_action', 'Add');
	}
	
	public function add(Request $request){
		$others = new OtherAchievement($request->all());
		$others->user_id = (int)Auth::user()->id;
		$others->created_at = Carbon::now()->toDateTimeString();
		$others->updated_at = Carbon::now()->toDateTimeString();
		$others->save();
		return redirect()->route('faculty.other.viewall')->with('alert-success', 'Publication successfully added!');
	}
	
	public function edit($id){
		$other = OtherAchievement::where('user_id', '=', Auth::user()->id)->get()->first();
		$fields = [
			[
				'title' => 'Other Achievements',
				'name' => 'content',
				'type' => 'tiny',
				'required' => NULL,
				'placeholder' => 'Write in a bulleted list your other achievements (grants, recognitions, etc.). Use the "Insert/edit" link button on the right or right-click to create hyperlinks. Write headings to specify type of achievement.',
				'value' => NULL,
			],
		];
		$action = [
			'name' => 'Save',
			'route' => 'save',
			'method' => 'patch',
			'button' => 'success'
		];
		return view('user.edittextarea')
		->with('pub', $other)
		->with('fields', $fields)
		->with('action', $action)
		->with('category', 'Other Achievement')
		->with('short_category', 'other')
		->with('routeprefix', 'faculty')
		->with('page_action', 'Edit');
	}
	
	public function save(Request $request){
		$others = OtherAchievement::where('user_id', '=', (int)Auth::user()->id)->first();
		if($others == NULL){
			$others = new OtherAchievement($request->all());
			$others->user_id = Auth::user()->id;
			$others->created_at = Carbon::now()->toDateTimeString();
			$others->updated_at = Carbon::now()->toDateTimeString();
			$others->save();
		}else{
			$others->update([
				'content' => $request->content,
				'updated_at' => Carbon::now()->toDateTimeString()
			]);
		}
		return redirect()->route('faculty.other.viewall')->with('alert-success', 'Achievements successfully changed!');
	}
	
	public function delete(Request $request){
		OtherAchievement::where('user_id', '=', (int)Auth::user()->id)->first()->delete();
		return redirect()->route('faculty.other.viewall')->with('alert-success', 'Achievements successfully deleted!');
	}
	
	public function publish(Request $request){
		OtherAchievement::where('user_id', '=', (int)Auth::user()->id)->first()->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('faculty.other.viewall')->with('alert-success', 'Achievements can now be publicly seen in your profile!');
	}
}
