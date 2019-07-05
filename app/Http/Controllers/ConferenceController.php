<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Conference;

use Illuminate\Http\Request;

class ConferenceController extends Controller
{
	public function viewall(){
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id)->get()->first();
		$first_name = $faculty->first_name;
		$conferences = Conference::where('user_id', '=', (int)Auth::user()->id)->get();
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
				'value' => $faculty->last_name.', '.$first_name[0].'.',
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
				'route' => 'conf.edit',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'conf.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'conf.publish',
				'method' => 'post',
				'button' => 'primary'
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
		return redirect()->route('conf.viewall')->with('alert-success', 'Conference successfully changed!');
	}
	
	public function delete(Request $request){
		Conference::find((int)$request->id)->delete();
		return redirect()->route('conf.viewall')->with('alert-success', 'Conference successfully deleted!');
	}
	
	public function publish(Request $request){
		Conference::find((int)$request->id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('conf.viewall')->with('alert-success', 'Conference can now be publicly seen in your profile!');
	}
}
