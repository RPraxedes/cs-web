@extends('layouts.app')

@section('title', 'Courses')

@section('header')
<div class="row">
	<div class="col-xl-12 display-4 title header text-center">
		{{$level}} Courses
	</div>
</div>
@endsection

@section('content')
	<div class="container-fluid margin-top-80">
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
