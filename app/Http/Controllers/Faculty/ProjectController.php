<?php

namespace App\Http\Controllers\Faculty;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Project;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function viewall(){		
		$publications = Project::where('user_id', '=', (int)Auth::user()->id)->get();
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
				'button' => 'success'
			],
		];
		return view('user.viewitems')
			->with('publications', $publications)
			->with('obj_actions', $obj_actions)
			->with('routeprefix', 'faculty')
			->with('short_category', 'proj')
			->with('category', 'Current Research Project')
			->with('addExists', true);
	}
	
	public function new(){
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id)->get()->first();
		$first_name = $faculty->first_name;
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
				'required' => NULL,
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
		$action = [
			'name' => 'Add',
			'route' => 'add',
			'method' => 'put',
			'button' => 'success'
		];
		return view('user.editentry')
			->with('pub', NULL)
			->with('fields', $fields)
			->with('action', $action)
			->with('category', 'Current Research Project')
			->with('short_category', 'proj')
			->with('routeprefix', 'faculty')
			->with('page_action', 'Add');
	}
	
	public function add(Request $request){
		$proj = new Project($request->all());
		$proj->user_id = Auth::user()->id;
		$proj->created_at = Carbon::now()->toDateTimeString();
		$proj->updated_at = Carbon::now()->toDateTimeString();
		$proj->save();
		return redirect()->route('faculty.proj.viewall')->with('alert-success', 'Project successfully added!');
	}
	
	public function edit($id){
		$project = Project::find((int)$id)->attributesToArray();
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
				'value' => NULL,
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
				'required' => NULL,
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
		$action = [
			'name' => 'Save',
			'route' => 'save',
			'method' => 'patch',
			'button' => 'success'
		];
		return view('user.editentry')
		->with('pub', $project)
		->with('fields', $fields)
		->with('action', $action)
		->with('category', 'Current Research Project')
		->with('short_category', 'proj')
		->with('routeprefix', 'faculty')
		->with('page_action', 'Edit');
	}
	
	public function save($id, Request $request){
		Project::find((int)$id)->update([
			'title' => $request->title,
			'author' => $request->author,
			'published_date' => $request->published_date,
			'type' => $request->type,
			'journal' => $request->journal,
			'volume' => $request->volume,
			'link' => $request->link,
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('faculty.proj.viewall')->with('alert-success', 'Project successfully changed!');
	}
	
	public function delete($id, Request $request){
		Project::find((int)$id)->delete();
		return redirect()->route('faculty.proj.viewall')->with('alert-success', 'Project successfully deleted!');
	}
	
	public function publish($id, Request $request){
		Project::find((int)$id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('faculty.proj.viewall')->with('alert-success', 'Project can now be publicly seen in your profile!');
	}
}