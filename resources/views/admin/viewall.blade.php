@extends('layouts.app')

@section('title' , $obj_name)

@section('content')
	<!--General purpose view all blade template-->
	<div class="container-fluid margin-top-80">
		<div class="row margin-top margin-bottom">
			<div class="col-xl-12 display-4 title text-center">
				View {{$obj_name}}
			</div>
		</div>
		<div class="row flash-message">
			@foreach (['danger', 'warning', 'success', 'info'] as $msg)
				@if(Session::has('alert-' . $msg))
				<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
				@endif
			@endforeach
		</div>
		<div class="row">
			<div class="col-md-12">
			@if($objects->count() != 0)
				<table class="table table-hover">
					<thead>
						<tr>
						@foreach($obj_columns as $column)
							<th>{{str_replace("_", " ",Str::title($column))}}</th>
						@endforeach
						@if(count($obj_actions) != 0)
							<th colspan={{count($obj_actions)}}>Actions</th>
						@endif
						</tr>
					</thead>
					<tbody>
				@foreach($objects as $obj)
						<tr>
						@foreach($obj_columns as $column)
							<td>
							@if($column == "body")
								{{Str::words(strip_tags($obj[$column]), 50, '...')}}
							@elseif($column == "published_at" || $column == "created_at" || $column == "updated_at")
								{{\Carbon\Carbon::parse($obj[$column])->toFormattedDateString()}} at {{date('h:i A', strtotime($obj[$column]))}}
							@else
								{{$obj[$column]}}
							@endif
							</td>
						@endforeach
					@if(count($obj_actions) != 0)
						@foreach($obj_actions as $action)
							<td><form action="{{route($action['route'])}}" method="post">@csrf @method($action['method'])<input type="hidden" name="id" value="{{$obj['id'] ?? $obj['user_id']}}"><button type="submit" class="btn btn-{{$action['button']}}">{{$action['name']}}</button></form></td>
						@endforeach
					@endif
						</tr>
				@endforeach
					</tbody>
				</table>
			@else
				<div class="alert alert-warning" role="alert">
					Nothing over here but us chickens!
				</div>
			@endif
			</div>
		</div>
	</div>
@endsection