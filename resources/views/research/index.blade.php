@extends('layouts.app')

@section('title', 'Research')

@section('header')
<div class="row">
	<div class="col-xl-12 display-4 title header text-center">
		Research
	</div>
</div>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row justify-content-md-center">
	@foreach($departments as $dept)
		<div class="card col-md-3 no-padding" style="margin-left: 20px;">
			<div class="card-body d-flex flex-column">
				<img src="{{asset('assets/images/upbcs-logo.png')}}" alt="dept" class=" card-img rounded">
				<h5 class="card-title" style="margin-top: 30px;">{{$dept->department}}</h5>
				<a href="{{route('research_by_department', ['department' => $dept->short_title])}}" class="btn btn-primary btn-block mt-auto">More</a>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection
