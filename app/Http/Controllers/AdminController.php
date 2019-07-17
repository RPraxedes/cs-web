<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use File;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Article;
use App\Models\Checklist;
use App\Models\Publication;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function facultyviewall(){
		$faculty = Faculty::all();
		$obj_name = "All Faculty";
		$obj_columns = [
			"user_id",
			"first_name",
			"middle_name",
			"last_name",
			"position",
			"bs_degree",
			"ms_degree",
			"phd_degree",
			"research_interest",
			"contact_info",
			"profile_image",
			"profile_alt",
			"dept_id",
			"status_id",
			"published_at",
			"created_at",
			"updated_at",
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'faculty.edit',
				'method' => 'post',
				'button' => 'secondary'
			],
			[
				'name' => 'Delete',
				'route' => 'faculty.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Verify',
				'route' => 'faculty.verify',
				'method' => 'post',
				'button' => 'warning'
			],
		];
		return view('user.viewall')
			->with('objects', $faculty)
			->with('obj_columns', $obj_columns)
			->with('obj_name', $obj_name)
			->with('obj_actions', $obj_actions);
	}
	
	public function userviewall(){
		$users = User::all();
		$obj_name = "All Users";
		$obj_columns = [
			"id",
			"name",
			"email",
			"email_verified_at",
			"position",
			"verified_at",
			"created_at",
			"updated_at",
		];
		$obj_actions = [
			[
				'name' => 'Edit',
				'route' => 'user.edit',
				'method' => 'post',
				'button' => 'secondary',
			],
			[
				'name' => 'Delete',
				'route' => 'user.delete',
				'method' => 'post',
				'button' => 'danger'
			],
			[
				'name' => 'Verify',
				'route' => 'user.verify',
				'method' => 'post',
				'button' => 'warning'
			],
		];
		return view('user.viewall')
			->with('objects', $users)
			->with('obj_columns', $obj_columns)
			->with('obj_name', $obj_name)
			->with('obj_actions', $obj_actions);
	}
	
	public function pubviewall(){
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
	}
}
