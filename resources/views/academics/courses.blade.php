@extends('layouts.app')

@section('title', 'Courses')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				Courses
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="{{route('checklist.get', ['name' => 'ecology-and-systematics'])}}">
					<img src="{{asset('assets/images/courses/ecology.png')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Biology (Ecology and Systematics)</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="{{route('checklist.get', ['name' => 'general-biology'])}}">
					<img src="{{asset('assets/images/courses/genbio.png')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Biology (General Biology)</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="{{route('checklist.get', ['name' => 'microbiology'])}}">
					<img src="{{asset('assets/images/courses/microbio.png')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Biology (Microbiology)</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="{{route('checklist.get', ['name' => 'computer-science'])}}">
					<img src="{{asset('assets/images/courses/comsci.png')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Computer Science</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="{{route('checklist.get', ['name' => 'mathematics'])}}">
					<img src="{{asset('assets/images/courses/mathematics.jpg')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Mathematics</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="{{route('checklist.get', ['name' => 'physics'])}}">
					<img src="{{asset('assets/images/courses/physics.png')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Physics</strong></h3>
				</a>
			</div>
		</div>
	</div>
@endsection