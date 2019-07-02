<?php

namespace App\Http\Controllers;

use Auth;
use File;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
	public function viewprofile($id){
		return view('faculty.page');
	}
	
	public function createprofile(){
		$status = FacultyStatus::all();
		return view('user.faculty', ['faculty_info' => NULL], ['status' => $status]);
	}
	
	public function editprofile(){
		$id = Auth::user()->id;
		$faculty = Faculty::where('user_id', '=', $id);
		$status = FacultyStatus::all();
        return view('user.faculty', ['faculty_info' => $faculty], ['status' => $status]);
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
			'profile_alt' => $requestData['first_name'].$requestData['middle_name'].$requestData['last_name'],
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
		return redirect('dashboard')->with('alert-success', 'Profile successfully saved!');
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
				'profile_alt' => $requestData['first_name'].$requestData['middle_name'].$requestData['last_name'],
			]);
			request()->file('profile_image')->move(public_path('images'), $requestData['profile_image']);
		}
		return redirect('dashboard')->with('alert-success', 'Profile successfully saved!');
	}
	
	public function publishprofile(){
		
	}
	
}
