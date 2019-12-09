<?php

namespace App\Http\Controllers\Faculty;

use DB;
use Auth;
use File;
use Carbon\Carbon;
use App\Models\User;

use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Department;

use App\Models\Publication;
use App\Models\Conference;
use App\Models\Project;
use App\Models\OtherAchievement;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
	public function view($id){
		$faculty = Faculty::with('status')->where('user_id', '=', $id)->get()->first();
		$first_name = $faculty->first_name;
		$publications = Publication::where('user_id', '=', $id)->where('published_at', '!=', NULL)->get();
		$conferences = Conference::where('user_id', '=', $id)->where('published_at', '!=', NULL)->get();
		$projects = Project::where('user_id', '=', $id)->where('published_at', '!=', NULL)->get();
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

	public function create(){
		$status = FacultyStatus::all();
    $routeprefix = "faculty";
    $dept = Department::all();

		return view('user.faculty', ['faculty_info' => NULL, 'status' => $status, 'dept' => $dept, 'routeprefix' => $routeprefix]);
	}

	public function edit(){
		$faculty = Faculty::where('user_id', '=', Auth::user()->id)->get();
		$status = FacultyStatus::all();
		$dept = Department::all();
		$routeprefix = "faculty";
		return view('user.faculty', ['faculty_info' => $faculty->first(), 'status' => $status, 'dept' => $dept, 'routeprefix' => $routeprefix]);
    }


	public function save(Request $request){
		$requestData = $request->all();
		if(isset($requestData['profile_image'])){
			$requestData['profile_image'] = time().'.'.request()->file('profile_image')->getClientOriginalExtension();
		}
		if($requestData['dept_id'] == "0"){
			return redirect()->back();
		}
		Faculty::insert([
			'user_id' => Auth::user()->id,
			'first_name' => $requestData['first_name'],
			'middle_name' => $requestData['middle_name'],
			'last_name' => $requestData['last_name'],
			'position' => $requestData['faculty_position'],
			'dept_id' => (int)$requestData['dept_id'],
			'bs_degree' => $requestData['bs_degree'],
			'ms_degree' => $requestData['ms_degree'],
			'phd_degree' => $requestData['phd_degree'],
			'research_interest' => $requestData['research_interest'],
			'contact_info' => $requestData['contact'],
      'current_courses' => $requestData['current_courses'],
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

	public function modify(Request $request){
		$requestData = $request->all();
		if($requestData['dept_id'] == "0"){
			return redirect()->back();
		}
		$faculty = Faculty::where('user_id', '=', $requestData['user_id']);
		$faculty->update([
			'first_name' => $requestData['first_name'],
			'middle_name' => $requestData['middle_name'],
			'last_name' => $requestData['last_name'],
			'dept_id' => (int)$requestData['dept_id'],
			'position' => $requestData['faculty_position'],
			'bs_degree' => $requestData['bs_degree'],
			'ms_degree' => $requestData['ms_degree'],
			'phd_degree' => $requestData['phd_degree'],
			'research_interest' => $requestData['research_interest'],
			'contact_info' => $requestData['contact'],
      'current_courses' => $requestData['current_courses'],
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

	public function delete(Request $request){
		$requestData = $request->all();
		$faculty = Faculty::where('user_id', '=', (int)Auth::user()->id);
		File::delete(public_path().'\\images\\'.$faculty->value('profile_image'));
		$faculty->delete();
		return redirect()->route('dash')->with('alert-success', 'Profile successfully removed!');
	}

	public function publish(Request $request){
		$requestData = $request->all();
		Faculty::where('user_id', '=', (int)$requestData['user_id'])->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('dash')->with('alert-success', 'Profile can now be seen publicly!');
	}

	public function verify(Request $request){

	}
}
