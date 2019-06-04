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
				<a href="#">
					<img src="{{asset('assets/images/hina.jpg')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Computer Science</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="#">
					<img src="{{asset('assets/images/hina.jpg')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Computer Science</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="#">
					<img src="{{asset('assets/images/hina.jpg')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Computer Science</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="#">
					<img src="{{asset('assets/images/hina.jpg')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Computer Science</strong></h3>
				</a>
			</div>
			<div class="card col-xl-3 col-md-5 col-xs-12 no-padding tint">
				<a href="#">
					<img src="{{asset('assets/images/hina.jpg')}}" class="card-img-top">
					<h3 class="card-text-over"><strong>Bachelor of Science in Computer Science</strong></h3>
				</a>
			</div>
		</div>
	</div>
@endsection