<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function viewall(){
		$users = User::all();
		$obj_name = "All Users";
		$obj_columns = [
			"name",
			"email",
			"position",
			"email_verified_at",
			"verified_at",
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'admin.user.edit',
				'method' => 'post',
				'button' => 'secondary',
			],
			[
				'name' => 'Delete',
				'route' => 'admin.user.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Verify',
				'route' => 'admin.user.verify',
				'method' => 'post',
				'button' => 'warning'
			],
		];
		return view('admin.viewall')
			->with('objects', $users)
			->with('obj_columns', $obj_columns)
			->with('obj_name', $obj_name)
			->with('obj_actions', $obj_actions);
	}
	
	public function edit(Request $request){
		$user = User::find((int)$request->id);
		$position = $user->position;
		$name = $user->name;
		$email = $user->email;
		$from_admin = true;
		$routeprefix = "admin.user";
		return view('user.profile')
			->with('id', $request->id)
			->with('position', $position)
			->with('name', $name)
			->with('email', $email)
			->with('from_admin', $from_admin)
			->with('routeprefix', $routeprefix);
	}
	
	public function delete(Request $request){
		Faculty::where('user_id', '=', (int)$request->id)->delete();
		User::find((int)$request->id)->delete();
		return redirect()->route('admin.user.viewall')->with('alert-success', 'Profile successfully deleted!');
	}
	
	public function verify(Request $request){
		User::find((int)$request->id)->update([
			'verified_at' => Carbon::now()->toDateTimeString(),
		]);
		return redirect()->route('admin.user.viewall')->with('alert-success', 'Profile successfully verified!');
	}
	
	public function saveprofile(Request $request){
		$requestData = $request->all();
		$user = User::find((int)$requestData['id']);
		$user->update([
			'name' => $requestData['name'],
			'email' => $requestData['email'],
			'updated_at' => Carbon::now()->toDateTimeString(),
		]);
		if(isset($requestData['position'])){
			$user->update([
				'position' => $requestData['position'],
			]);
		}
		return redirect()->route('admin.user.viewall')->with('alert-success', 'Profile successfully saved!');
	}
}
