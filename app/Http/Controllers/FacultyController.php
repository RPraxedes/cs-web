<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use File;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Publication;
use App\Models\Conference;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
	public function viewprofile($id){
		$faculty = Faculty::with('status')->where('user_id', '=', $id)->get()->first();
		$first_name = $faculty->first_name;
		$publications = Publication::where('author', 'like', '%'.$faculty->last_name.', '.$first_name[0].'.%')->where('published_at', '!=', NULL)->get();
		$conferences = Conference::where('author', 'like', '%'.$faculty->last_name.', '.$first_name[0].'.%')->where('published_at', '!=', NULL)->get();
		if($faculty){
			$initials = "";
			if(isset($faculty->middle_name)){
				$words = explode(' ', $faculty->middle_name);
				foreach($words as $w){
					$initials .= $w[0].'.';
				}
			}
			return view('faculty.page')
				->with('faculty', $faculty)
				->with('publications', $publications)
				->with('conferences', $conferences)
				->with('initials', $initials);
		}else{
			return redirect()->route('dash')->with('alert-warning', 'No profile found!');
		}
	}
	
	public function createprofile(){
		$status = FacultyStatus::all();
		return view('user.faculty', ['faculty_info' => NULL], ['status' => $status]);
	}
	
	public function editprofile(){
		$id = Auth::user()->id;
		$faculty = Faculty::where('user_id', '=', $id)->get();
		$status = FacultyStatus::all();
		return view('user.faculty', ['faculty_info' => $faculty->first()], ['status' => $status]);
    }

	
	public function saveprofile(Request $request){
		$requestData = $request->all();
		$requestData['profile_image'] = time().'.'.request()->file('profile_image')->getClientOriginalExtension();
		Faculty::insert([
			'user_id' => Auth::user()->id,
			'first_name' => $requestData['first_name'],
			'middle_name' => $requestData['middle_name'],
			'last_name' => $requestData['last_name'],
			'position' => $requestData['faculty_position'],
			'bs_degree' => $requestData['bs_degree'],
			'ms_degree' => $requestData['ms_degree'],
			'phd_degree' => $requestData['phd_degree'],
			'research_interest' => $requestData['research_interest'],
			'contact_info' => $requestData['contact'],
			'profile_image' => $requestData['profile_image'],
			'profile_alt' => $requestData['first_name'].' '.$requestData['middle_name'].' '.$requestData['last_name'],
			'status_id' => (int)$requestData['status_id'],
		]);
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id);
		if($faculty->value('created_at') == NULL){
			$faculty->update([
				'created_at' => Carbon::now()->toDateTimeString(),
			]);
		}
		$faculty->update([
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		request()->file('profile_image')->move(public_path('images'), $requestData['profile_image']);
		return redirect()->route('dash')->with('alert-success', 'Profile successfully saved!');
	}
	
	public function modifyprofile(Request $request){
		$requestData = $request->all();
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id);
		$faculty->update([
			'first_name' => $requestData['first_name'],
			'middle_name' => $requestData['middle_name'],
			'last_name' => $requestData['last_name'],
			'position' => $requestData['faculty_position'],
			'bs_degree' => $requestData['bs_degree'],
			'ms_degree' => $requestData['ms_degree'],
			'phd_degree' => $requestData['phd_degree'],
			'research_interest' => $requestData['research_interest'],
			'contact_info' => $requestData['contact'],
			'status_id' => (int)$requestData['status_id'],
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		if(isset($requestData['profile_image'])){	// there is change to profile image
			$requestData['profile_image'] = time().'.'.request()->file('profile_image')->getClientOriginalExtension();
			$faculty->update([
				'profile_image' => $requestData['profile_image'],
				'profile_alt' => $requestData['first_name'].' '.$requestData['middle_name'].' '.$requestData['last_name'],
			]);
			request()->file('profile_image')->move(public_path('images'), $requestData['profile_image']);
		}
		return redirect()->route('dash')->with('alert-success', 'Profile successfully saved!');
	}
	
	public function deleteprofile(Request $request){
		$requestData = $request->all();
		$faculty = Faculty::where('user_id', '=', (int)$requestData['user_id']);
		File::delete(public_path().'\\images\\'.$faculty->value('profile_image'));
		$faculty->delete();
		return redirect()->route('dash')->with('alert-success', 'Profile successfully removed!');
	}
	
	public function publishprofile(Request $request){
		$requestData = $request->all();
		Faculty::where('user_id', '=', (int)$requestData['user_id'])->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('dash')->with('alert-success', 'Profile can now be seen publicly!');
	}
	
	public function editpublications(){
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id)->get()->first();
		$first_name = $faculty->first_name;
		$publications = DB::table('publications')->where('author', 'like', '%'.$faculty->last_name.', '.$first_name[0].'.%')->get();
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
				'route' => 'faculty.editpub',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'faculty.deletepub',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'faculty.publishpub',
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
	
	public function addpublication(Request $request){
		$pub = new Publication($request->all());
		$pub->created_at = Carbon::now()->toDateTimeString();
		$pub->updated_at = Carbon::now()->toDateTimeString();
		$pub->save();
		return redirect()->route('faculty.publications')->with('alert-success', 'Publication succesfully added!');
	}
	
	public function editpublication(Request $request){
		$requestData = $request->all();
		Publication::find((int)$requestData['id'])->update([
			'title' => $requestData['title'],
			'author' => $requestData['author'],
			'published_date' => $requestData['published_date'],
			'type' => $requestData['type'],
			'journal' => $requestData['journal'],
			'volume' => $requestData['volume'],
			'link' => $requestData['link'],
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('faculty.publications')->with('alert-success', 'Publication successfully changed!');
	}
	
	public function deletepublication(Request $request){
		Publication::find((int)$request->id)->delete();
		return redirect()->route('faculty.publications')->with('alert-success', 'Publication successfully deleted!');
	}
	
	public function publishpublication(Request $request){
		Publication::find((int)$request->id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('faculty.publications')->with('alert-success', 'Publication can now be publicly seen in your profile!');
	}
	
	public function editconferences(){
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id)->get()->first();
		$first_name = $faculty->first_name;
		$conferences = DB::table('conferences')->where('author', 'like', '%'.$faculty->last_name.', '.$first_name[0].'.%')->get();
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
				'route' => 'faculty.editconf',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'faculty.deleteconf',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'faculty.publishconf',
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
	
	public function addconference(Request $request){
		$conf = new Conference($request->all());
		$conf->created_at = Carbon::now()->toDateTimeString();
		$conf->updated_at = Carbon::now()->toDateTimeString();
		$conf->save();
		return redirect()->route('faculty.conferences')->with('alert-success', 'Conference succesfully added!');
	}
	
	public function editconference(Request $request){
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
		return redirect()->route('faculty.conferences')->with('alert-success', 'Conference successfully changed!');
	}
	
	public function deleteconference(Request $request){
		Conference::find((int)$request->id)->delete();
		return redirect()->route('faculty.conferences')->with('alert-success', 'Conference successfully deleted!');
	}
	
	public function publishconference(Request $request){
		Conference::find((int)$request->id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('faculty.conferences')->with('alert-success', 'Conference can now be publicly seen in your profile!');
	}
	
	public function editprojects(){
	
	}
	
	public function editothers(){
	
	}
}
