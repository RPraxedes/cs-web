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
		$obj_actions = [
			[
				'name' => 'Add',
				'route' => 'new',
				'method' => 'get',
				'button' => 'success'
			],
			[
				'name' => 'Delete',
				'route' => 'delete',
				'method' => 'post',
				'button' => 'danger'
			],
		];
		return view('admin.viewitems')
			->with('publications', $alerts)
			->with('obj_actions', $obj_actions)
			->with('routeprefix', 'admin')
			->with('short_category', 'alert')
			->with('category', 'Alert')
			->with('addExists', true);
	}
	
	public function new(){
		$action = [
			'name' => 'Add',
			'route' => 'add',
			'method' => 'put',
			'button' => 'success'
		];
		return view('admin.editalert')
			->with('action', $action)
			->with('category', 'Alert')
			->with('short_category', 'alert')
			->with('routeprefix', 'admin')
			->with('page_action', 'Add');
	}
	
	public function add(Request $request){
		if(isset($request->start_date) && isset($request->start_time)){
			$starttime = Carbon::createFromFormat('Y-m-d H:i:s', $request->start_date.' '.$request->start_time.':00')->toDateTimeString();
		}else if(isset($request->startNow)){
			$starttime = Carbon::createFromTime(Carbon::now()->hour, Carbon::now()->minute, 00);
		}
		if(isset($request->end_date) && isset($request->end_time)){
			$endtime = Carbon::createFromFormat('Y-m-d H:i:s', $request->end_date.' '.$request->end_time.':00')->toDateTimeString();
		}else if(isset($request->endNever)){
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
