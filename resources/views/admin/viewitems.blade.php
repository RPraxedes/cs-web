@extends('layouts.app')

@section('title' , 'Your '.$category.'s')

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-10">
		<div class="display-4 title margin-top margin-bottom">{{$category}}s</div>
		@foreach (['danger', 'warning', 'success', 'info'] as $msg)
			@if(Session::has('alert-' . $msg))
			<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
			@endif
		@endforeach
		</div>
	</div>
    <div class="row justify-content-center">
        <div class="col-md-9">
				@foreach ($publications as $pub)
				<div class="card margin-top">
					<div class="card-body">
					@if ($category == 'Publication')
						{{$pub->author ?? ''}} ({{(\Carbon\Carbon::parse($pub->published_date)->year)}}). <i>{{$pub->title ?? ''}}</i>. {{$pub->journal ?? ''}} Volume {{$pub->volume ?? ''}} @if($pub->link)<a href="{{url($pub->link ?? '')}}" class="card-link">[link]</a>@endif
					@elseif ($category == 'Current Research Project')
						{{$pub->author ?? ''}}. <i>{{$pub->title ?? ''}}</i>. Description: {{$pub->description ?? ''}} ( Status: @if($pub->status_id == 1) Ongoing @else Finished @endif) @if($pub->link)<a href="{{url($pub->link ?? '')}}" class="card-link">[link]</a>@endif
					@elseif ($category == 'Conference')
						<i>{{$pub->paper_title ?? ''}}</i>. {{$pub->author ?? ''}} {{\Carbon\Carbon::parse($pub->conference_date)->format('F d, Y')}}. {{$pub->conference_title ?? ''}}. {{$pub->venue ?? ''}} @if($pub->link)<a href="{{url($pub->link ?? '')}}" class="card-link">[link]</a>@endif
					@elseif ($category == 'Other Achievement')
						<h4>{{$pub->faculty->first_name ?? ''}} {{$pub->faculty->middle_name ?? ''}} {{$pub->faculty->last_name ?? ''}}</h4>
						{!!$pub->content!!}
					@elseif($category == 'Alert')
						<div class="alert alert-{{$pub->style}} margin-top" role="alert">
							{!!$pub->body!!}
						</div>
						Created at: {{$pub->display_at}}
						<br>
						Destroy at: {{$pub->destroy_at ?? 'No expiry'}}
					@elseif($category == 'Gallery Item')
						<img src="{{asset('images/'.$pub->filename)}}" alt="{{$pub->alt}}" class="img-thumbnail"><br>
						<p>{{$pub->caption}}</p>
					@endif
						<div class="row justify-content-md-center" style="margin-top: 20px;">
						@foreach($obj_actions as $action)
							@if($action['name'] == 'Edit')
							<div class="col-md-3">
								<a href="{{route($routeprefix.'.'.$short_category.'.'.$action['route'], ['id' => $pub->id])}}" role="button" class="btn btn-block btn-{{$action['button']}}">{{$action['name']}}</a>
							</div>
							@elseif($action['name'] == 'Delete')
							<div class="col-md-3">
								<form class="form-inline" action="{{route($routeprefix.'.'.$short_category.'.'.$action['route'], ['id' => $pub->id])}}" method="{{$action['method']}}">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-block btn-{{$action['button']}}">
										<span class="oi oi-trash"></span> {{$action['name']}}
									</button>
								</form>
							</div>
							@elseif($action['name'] == 'Publish')
							<div class="col-md-3">
								<form class="form-inline" action="{{route($routeprefix.'.'.$short_category.'.'.$action['route'], ['id' => $pub->id])}}" method="{{$action['method']}}">
									@csrf
									@method('patch')
									<button type="submit" class="btn btn-block btn-{{$action['button']}}" @if($pub->published_at != NULL) disabled @endif>
										<span class="oi oi-task"></span> {{$action['name']}}@if($pub->published_at != NULL)ed @endif
									</button>
								</form>
							</div>
							@endif
						@endforeach
						</div>
					</div>
				</div>
				@endforeach
			@if($addExists)
			<div class="row justify-content-center">
				<div class="col-md-3">
					<a role="button" class="btn btn-{{$obj_actions[0]['button']}} btn-block margin-top margin-bottom" href="{{route($routeprefix.'.'.$short_category.'.'.$obj_actions[0]['route'])}}"><span class="oi oi-plus"></span> Add</a>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>

@if($category == 'Alert')
<!-- Alert Modal -->
<div class="modal fade" id="AddPub" tabindex="-1" role="dialog" aria-labelledby="alertModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="alertModalLongTitle">Create an Alert</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('admin.alert.add')}}" method="post">
					@csrf
					<label class="form-check-label" for="alertBody">Alert Body</label>
					<input name="alert_body" class="form-control" type="text" placeholder="What do you urgently want to say? (HTML tags allowed)" id="alertBody" required><br>
					<label for="selectStyle">Select Alert Style</label>
					<select class="form-control" name="alert_style" id="selectStyle">
						<option value="primary" class="text-primary">Primary</option>
						<option value="secondary" class="text-secondary">Secondary</option>
						<option value="success" class="text-success">Success</option>
						<option value="danger" class="text-danger">Danger</option>
						<option value="warning" class="text-warning">Warning</option>
						<option value="info" class="text-info">Info</option>
					</select><br>
					<div class="form-check">
						<input type="checkbox" name="startNow" class="form-check-input" id="Start" value=true>
						<label class="form-check-label" for="Start">Start alert now</label>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="form-check-label" for="alertStartDate">Date Alert Start</label>
							<input name="start_date" class="form-control start-input" type="date" id="alertStartDate" required><br>
						</div>
						<div class="col">
							<label class="form-check-label" for="alertStartTime">Time Alert Start</label>
							<input name="start_time" class="form-control start-input" type="time" id="alertStartTime" required><br>
						</div>
					</div>
					<div class="form-check">
						<input type="checkbox" name="endNever" class="form-check-input" id="End" value=true>
						<label class="form-check-label" for="End">Manually end alert</label>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="form-check-label" for="alertEndDate">Date Alert End</label>
							<input name="end_date" class="form-control end-input" type="date" id="alertEndDate" required><br>
						</div>
						<div class="col">
							<label class="form-check-label" for="alertEndTime">Time Alert End</label>
							<input name="end_time" class="form-control end-input" type="time" id="alertEndTime" required><br>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endif
@endsection