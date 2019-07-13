<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function viewall(){
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id)->get()->first();
		$first_name = $faculty->first_name;
		$publications = Project::where('user_id', '=', (int)Auth::user()->id)->get();
		$category = 'Current Research Project';
		$short_category = 'proj';
		$fields = [
			[
				'title' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Project Title',
				'value' => NULL,
			],
			[
				'title' => 'Author/s',
				'name' => 'author',
				'type' => 'text',
				'required' => 'required',
				'placeholder' => 'Project Author/s',
				'value' => $faculty->last_name.', '.$first_name[0].'.',
			],
			[
				'title' => 'Date Published',
				'name' => 'published_date',
				'type' => 'date',
				'required' => 'required',
				'placeholder' => '',
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
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'proj.edit',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'proj.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'proj.publish',
				'method' => 'post',
				'button' => 'primary'
			],
		];
		return view('user.viewitems')
			->with('fields', $fields)
			->with('publications', $publications)
			->with('short_category', $short_category)
			->with('category', $category)
			->with('obj_actions', $obj_actions);
	}
	
	public function add(Request $request){
		$proj = new Project($request->all());
		$proj->user_id = Auth::user()->id;
		$proj->created_at = Carbon::now()->toDateTimeString();
		$proj->updated_at = Carbon::now()->toDateTimeString();
		$proj->save();
		return redirect()->route('proj.viewall')->with('alert-success', 'Project successfully added!');
	}
	
	public function edit(Request $request){
		$requestData = $request->all();
		Project::find((int)$requestData['id'])->update([
			'title' => $requestData['title'],
			'author' => $requestData['author'],
			'published_date' => $requestData['published_date'],
			'type' => $requestData['type'],
			'journal' => $requestData['journal'],
			'volume' => $requestData['volume'],
			'link' => $requestData['link'],
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('proj.viewall')->with('alert-success', 'Project successfully changed!');
	}
	
	public function delete(Request $request){
		Project::find((int)$request->id)->delete();
		return redirect()->route('proj.viewall')->with('alert-success', 'Project successfully deleted!');
	}
	
	public function publish(Request $request){
		Project::find((int)$request->id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('proj.viewall')->with('alert-success', 'Project can now be publicly seen in your profile!');
	}
}