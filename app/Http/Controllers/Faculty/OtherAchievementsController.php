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
		$others = OtherAchievement::where('user_id', '=', (int)Auth::user()->id)->get();
		$category = 'Other Achievement';
		$short_category = 'other';
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
		$obj_actions = [
		
			[
				'name' => 'Save',
				'route' => 'other.edit',
				'method' => 'post',
				'button' => 'success'
			],
			[
				'name' => 'Delete',
				'route' => 'other.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'other.publish',
				'method' => 'post',
				'button' => 'primary'
			],
		];
		return view('user.viewitems')
			->with('fields', $fields)
			->with('publications', $others)
			->with('short_category', $short_category)
			->with('category', $category)
			->with('obj_actions', $obj_actions);
	}
	
	public function edit(Request $request){
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
		return redirect()->route('other.viewall')->with('alert-success', 'Achievements successfully changed!');
	}
	
	public function delete(Request $request){
		OtherAchievement::where('user_id', '=', (int)Auth::user()->id)->first()->delete();
		return redirect()->route('other.viewall')->with('alert-success', 'Achievements successfully deleted!');
	}
	
	public function publish(Request $request){
		OtherAchievement::where('user_id', '=', (int)Auth::user()->id)->first()->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('other.viewall')->with('alert-success', 'Achievements can now be publicly seen in your profile!');
	}
}
