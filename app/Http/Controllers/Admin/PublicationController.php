<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Publication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicationController extends Controller
{
    public function viewall(){
		$publications = Publication::all();
		$category = 'Publication';
		$short_category = 'pub';
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
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'admin.pub.edit',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'admin.pub.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'admin.pub.publish',
				'method' => 'post',
				'button' => 'success'
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
		$pub = new Publication($request->all());
		$pub->user_id = Auth::user()->id;
		$pub->created_at = Carbon::now()->toDateTimeString();
		$pub->updated_at = Carbon::now()->toDateTimeString();
		$pub->save();
		return redirect()->route('admin.pub.viewall')->with('alert-success', 'Publication successfully added!');
	}
	
	public function edit(Request $request){
		$requestData = $request->all();
		Publication::find((int)$request->id)->update([
			'title' => $requestData['title'],
			'author' => $requestData['author'],
			'published_date' => $requestData['published_date'],
			'type' => $requestData['type'],
			'journal' => $requestData['journal'],
			'volume' => $requestData['volume'],
			'link' => $requestData['link'],
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('admin.pub.viewall')->with('alert-success', 'Publication successfully changed!');
	}
	
	public function delete(Request $request){
		Publication::find((int)$request->id)->delete();
		return redirect()->route('admin.pub.viewall')->with('alert-success', 'Publication successfully deleted!');
	}
	
	public function publish(Request $request){
		Publication::find((int)$request->id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('admin.pub.viewall')->with('alert-success', 'Publication can now be publicly seen in your profile!');
	}
}
