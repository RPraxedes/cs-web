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
		$category = 'Conference';
		$short_category = 'conf';
		$fields = [
			[
				'title' => 'Title of the Paper Presented',
				'name' => 'paper_title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => NULL,
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
				'placeholder' => NULL,
				'value' => NULL,
			],
			[
				'title' => 'Type',
				'name' => 'type',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => '',
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
		return view('user.viewitems')
			->with('fields', $fields)
			->with('publications', $conferences)
			->with('category', $category)
			->with('short_category', $short_category)
			->with('obj_actions', $obj_actions);
	}
	
	public function add(Request $request){
		$conf = new Conference($request->all());
		$conf->user_id = Auth::user()->id;
		$conf->created_at = Carbon::now()->toDateTimeString();
		$conf->updated_at = Carbon::now()->toDateTimeString();
		$conf->save();
		return redirect()->route('conf.viewall')->with('alert-success', 'Conference successfully added!');
	}
	
	public function edit(Request $request){
		$requestData = $request->all();
		Conference::find((int)$requestData['id'])->update([
			'paper_title' => $requestData['paper_title'],
			'author' => $requestData['author'],
			'conference_date' => $requestData['conference_date'],
			'type' => $requestData['type'],
			'venue' => $requestData['venue'],
			'conference_title' => $requestData['conference_title'],
			'link' => $requestData['link'],
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('admin.conf.viewall')->with('alert-success', 'Conference successfully changed!');
	}
	
	public function delete(Request $request){
		Conference::find((int)$request->id)->delete();
		return redirect()->route('admin.conf.viewall')->with('alert-success', 'Conference successfully deleted!');
	}
	
	public function publish(Request $request){
		Conference::find((int)$request->id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('admin.conf.viewall')->with('alert-success', 'Conference can now be publicly seen in your profile!');
	}
}
