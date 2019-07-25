<?php

namespace App\Http\Controllers\Faculty;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Conference;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConferenceController extends Controller
{
	public function viewall(){
		$conferences = Conference::where('user_id', '=', (int)Auth::user()->id)->get();
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
				'button' => 'secondary'
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
				'button' => 'success',
			],
		];
		return view('user.viewitems')
			->with('publications', $conferences)
			->with('obj_actions', $obj_actions)
			->with('routeprefix', 'faculty')
			->with('short_category', 'conf')
			->with('category', 'Conference')
			->with('addExists', true);
	}
	
	public function new(){
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id)->get()->first();
		$first_name = $faculty->first_name;
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
				'value' => $faculty->last_name.', '.$first_name[0].'.',
			],
			[
				'title' => 'Conference Title',
				'name' => 'conference_title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Title of the Conference Held',
				'value' => NULL,
			],
			[
				'title' => 'Type',
				'name' => 'type',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'International, National, Local',
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
		$action = [
			'name' => 'Add',
			'route' => 'add',
			'method' => 'put',
			'button' => 'success',
		];
		return view('user.editentry')
			->with('pub', NULL)
			->with('fields', $fields)
			->with('action', $action)
			->with('category', 'Conference')
			->with('short_category', 'conf')
			->with('routeprefix', 'faculty')
			->with('page_action', 'Add');
	}
	
	public function add(Request $request){
		$conf = new Conference($request->all());
		$conf->user_id = Auth::user()->id;
		$conf->created_at = Carbon::now()->toDateTimeString();
		$conf->updated_at = Carbon::now()->toDateTimeString();
		$conf->save();
		return redirect()->route('faculty.conf.viewall')->with('alert-success', 'Conference successfully added!');
	}
	
	public function edit($id){
		$conference = Conference::find((int)$id)->attributesToArray();
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
				'placeholder' => NULL,
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
		];
		$action = [
			'name' => 'Save',
			'route' => 'save',
			'method' => 'patch',
			'button' => 'success'
		];
		return view('user.editentry')
		->with('pub', $conference)
		->with('fields', $fields)
		->with('action', $action)
		->with('category', 'Conference')
		->with('short_category', 'conf')
		->with('routeprefix', 'faculty')
		->with('page_action', 'Edit');
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
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('faculty.conf.viewall')->with('alert-success', 'Conference successfully changed!');
	}
	
	public function delete($id, Request $request){
		Conference::find((int)$id)->delete();
		return redirect()->route('faculty.conf.viewall')->with('alert-success', 'Conference successfully deleted!');
	}
	
	public function publish($id, Request $request){
		Conference::find((int)$id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('faculty.conf.viewall')->with('alert-success', 'Conference can now be publicly seen in your profile!');
	}
}
