<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Project;
use App\Models\Publication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function viewall(){
		$publications = Project::all();
		$faculty = Faculty::all();
		$category = 'Current Research Project';
		$short_category = 'proj';
		$routeprefix = 'admin';
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
				'route' => 'admin.proj.edit',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'admin.proj.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'admin.proj.publish',
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
		$publication = Project::find((int)$id)->attributesToArray();
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
				'route' => 'admin.proj.save',
				'method' => 'post',
				'button' => 'success'
			];
		return view('admin.editentry')
		->with('pub', $publication)
		->with('category', 'Current Research Project')
		->with('short_category', 'proj')
		->with('routeprefix', 'admin')
		->with('faculty', $faculty)
		->with('fields', $fields)
		->with('action', $action);
	}
	
	public function add(Request $request){
		$proj = new Project($request->all());
		$proj->user_id = Auth::user()->id;
		$proj->created_at = Carbon::now()->toDateTimeString();
		$proj->updated_at = Carbon::now()->toDateTimeString();
		$proj->save();
		return redirect()->route('admin.proj.viewall')->with('alert-success', 'Project successfully added!');
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
			'user_id' => $request->user_id,
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('admin.proj.viewall')->with('alert-success', 'Project successfully changed!');
	}
	
	public function delete($id){
		Project::find((int)$id)->delete();
		return redirect()->route('admin.proj.viewall')->with('alert-success', 'Project successfully deleted!');
	}
	
	public function publish($id){
		Project::find((int)$id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('admin.proj.viewall')->with('alert-success', 'Project can now be publicly seen in your profile!');
	}
	
	public function moveToPublication($id){
		$proj = Project::find((int)$id);
		$proj->id = NULL;
		$pub = new Publication($proj);
		$pub->save();
		return redirect()->route('admin.proj.viewall')->with('alert-success', 'Project is now a publication!');
	}
}
