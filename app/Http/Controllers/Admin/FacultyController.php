<?php

namespace App\Http\Controllers\Admin;

use Auth;
use File;
use Carbon\Carbon;
use App\Models\Faculty;
use App\Models\FacultyStatus;
use App\Models\Department;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FacultyController extends Controller
{
    public function viewall(){
		$faculty = Faculty::join('faculty_status', 'faculty.status_id', 'faculty_status.status_id')->join('departments', 'faculty.dept_id', 'departments.id')->get();
		$obj_name = "All Faculty";
		$obj_columns = [
			"first_name",
			"middle_name",
			"last_name",
			"position",
			"contact_info",
			"department",
			"status",
			"published_at",
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'admin.faculty.edit',
				'method' => 'post',
				'button' => 'secondary',
			],
			[
				'name' => 'Delete',
				'route' => 'admin.faculty.delete',
				'method' => 'post',
				'button' => 'danger',
			],
			[
				'name' => 'Publish',
				'route' => 'admin.faculty.publish',
				'method' => 'post',
				'button' => 'warning',
			],
		];
		return view('admin.viewall')
			->with('objects', $faculty)
			->with('obj_columns', $obj_columns)
			->with('obj_name', $obj_name)
			->with('obj_actions', $obj_actions);
	}
	
	public function edit(Request $request){
		$faculty = Faculty::where('user_id', '=', $request->id)->get();
		$status = FacultyStatus::all();
		$dept = Department::all();
		$routeprefix = "admin.faculty";
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
			'user_id' => (int)$request->id,
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
			'profile_alt' => $requestData['first_name'].' '.$requestData['middle_name'].' '.$requestData['last_name'],
			'status_id' => (int)$requestData['status_id'],
		]);
		$faculty = Faculty::where('user_id', '=', (int)$request->id);
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
		$faculty = Faculty::where('user_id', '=', (int)$request->id);
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
		$faculty = Faculty::where('user_id', '=', (int)$request->id);
		File::delete(public_path().'\\images\\'.$faculty->value('profile_image'));
		$faculty->delete();
		return redirect()->route('dash')->with('alert-success', 'Profile successfully removed!');
	}
	
	public function publish(Request $request){
		$requestData = $request->all();
		Faculty::where('user_id', '=', (int)$request->id)->update([
			'published_at' => Carbon::now()->toDateTimeString()
		]);
		return redirect()->route('dash')->with('alert-success', 'Profile can now be seen publicly!');
	}
	
	/* public function pubviewall(){
		$users = Publication::all();
		$obj_name = "All Publications";
		$obj_columns = [
			"id",
			"title",
			"author",
			"published_date",
			"type",
			"journal",
			"volume",
			"link",
			"user_id",
			"published_at",
			"created_at",
			"updated_at",
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'pub.edit',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'pub.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Publish',
				'route' => 'pub.publish',
				'method' => 'post',
				'button' => 'success'
			],
		];
		return view('user.viewall')
			->with('objects', $users)
			->with('obj_columns', $obj_columns)
			->with('obj_name', $obj_name)
			->with('obj_actions', $obj_actions);
	} */
}
