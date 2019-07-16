@extends('layouts.app')

@section('title', 'Courses')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-3 title text-center margin-bottom margin-top">
			{{$level}} Courses
			</div>
		</div>
		<div class="row justify-content-md-center">
		@foreach($courses as $course)
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="{{route('checklist.get', ['name' => $course->uri])}}">
					<img src="{{asset('assets/images/courses/'.$course->image)}}" class="card-img rounded">
					<h3 class="card-text-over"><strong>{{$course->title}}</strong></h3>
				</a>
			</div>
		@endforeach
		</div>
	</div>
@endsection