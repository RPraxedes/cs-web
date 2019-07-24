@extends('layouts.app')

@section('title' , $page_action.' '.$category)

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row justify-content-md-center title margin-top margin-bottom">
				<div class="col-md-12">
					<div class="display-3 text-center">{{$page_action}} {{$category}}</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-12">
					<form id="{{$action['name']}}Form" action="{{route($routeprefix.'.'.$short_category.'.'.$action['route'])}}" method="post">
						@csrf
						@method($action['method'])
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
						<button type="submit" class="btn btn-success margin-top">{{$action['name']}}</button>
					</form>
				</div>
			</div>
			<div class="row justify-content-md-center margin-top margin-bottom">
				<div class="col-md-5">
					<a href="{{route($routeprefix.'.'.$short_category.'.viewall')}}" role="button" class="btn btn-block btn-primary">Back to {{$category}}s</a>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection