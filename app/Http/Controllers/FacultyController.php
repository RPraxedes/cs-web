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
use App\Models\Project;
use App\Models\OtherAchievement;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
	public function viewprofile($id){
		$faculty = Faculty::with('status')->where('user_id', '=', $id)->get()->first();
		$first_name = $faculty->first_name;
		$publications = Publication::where('author', 'like', '%'.$faculty->last_name.', '.$first_name[0].'.%')->where('published_at', '!=', NULL)->get();
		$conferences = Conference::where('author', 'like', '%'.$faculty->last_name.', '.$first_name[0].'.%')->where('published_at', '!=', NULL)->get();
		$projects = Project::where('author', 'like', '%'.$faculty->last_name.', '.$first_name[0].'.%')->where('published_at', '!=', NULL)->get();
		$others = OtherAchievement::where('user_id', '=', $id)->where('published_at', '!=', NULL)->get();
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
				->with('projects', $projects)
				->with('others', $others)
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
		if(isset($requestData['profile_image'])){			
			$requestData['profile_image'] = time().'.'.request()->file('profile_image')->getClientOriginalExtension();
		}
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
		if(isset($requestData['profile_image'])){
			$faculty->update([				
				'profile_image' => $requestData['profile_image'],
			]);
			request()->file('profile_image')->move(public_path('images'), $requestData['profile_image']);
		}
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
	
	public function viewall(){
	}
	
	public function editothers(){
	
	}
}
