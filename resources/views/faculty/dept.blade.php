@extends('layouts.app')

@section('title', 'Faculty')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-3 title text-center margin-bottom margin-top">
				The College of Science
			</div>
		</div>
		<div class="row justify-content-md-center">
		@foreach($faculty as $dept)
			<div class="card col-md-3 no-padding" style="margin-left: 20px;">
				<div class="card-body d-flex flex-column">
					<img src="{{asset('assets/images/nao-banner.png')}}" alt="dept" class=" card-img rounded">
					<h5 class="card-title" style="margin-top: 30px;">{{$dept->title}}</h5>
					<a href="{{route('department', ['dept' => $dept->short_title])}}" class="btn btn-primary btn-block mt-auto">More</a>
				</div>
			</div>
		@endforeach
		</div>
	</div>
@endsection