<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Carbon\Carbon;
use App\Models\Alert;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlertController extends Controller
{
    public function viewall(){
		$alerts = Alert::all();
		$faculty = NULL;
		$category = 'Alert';
		$short_category = 'alert';
		$routeprefix = 'admin';
		$fields = NULL;
		$obj_actions = [
			[
				'name' => 'Delete',
				'route' => 'admin.alert.delete',
				'method' => 'post',
				'button' => 'danger'
			],
		];
		return view('admin.viewitems')
			->with('fields', $fields)
			->with('publications', $alerts)
			->with('short_category', $short_category)
			->with('category', $category)
			->with('obj_actions', $obj_actions)
			->with('faculty', $faculty)
			->with('routeprefix', $routeprefix);
	}
	
	public function add(){
		if(request()->has('start_date', 'start_time')){
			$starttime = Carbon::createFromFormat('Y-m-d H:i:s', request('start_date').' '.request('start_time').':00')->toDateTimeString();
		}else if(request()->has('startNow')){
			$starttime = Carbon::createFromTime(Carbon::now()->hour, Carbon::now()->minute, 00);
		}
		if(request()->has('end_date', 'end_time')){
			$endtime = Carbon::createFromFormat('Y-m-d H:i:s', request('end_date').' '.request('end_time').':00')->toDateTimeString();
		}else if(request()->has('endNever')){
			$endtime = NULL;
		}
		
		Alert::insert([
			'body' => request('alert_body'),
			'style' => request('alert_style'),
			'display_at' => $starttime,
			'destroy_at' => $endtime,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		return redirect()->route('admin.alert.viewall')->with('alert-success', 'Alert successfully posted!');
	}
	
	public function delete($id){
		Alert::find($id)->delete();
		return redirect()->route('admin.alert.viewall')->with('alert-success', 'Alert successfully deleted!');
	}
}
