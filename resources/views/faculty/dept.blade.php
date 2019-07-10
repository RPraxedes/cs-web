@extends('layouts.app')

@section('title', 'Faculty')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				The College of Science
			</div>
		</div>
		<div class="row justify-content-md-center">
		@foreach($faculty as $dept)
			<div class="card col-2 no-padding" style="margin-left: 20px;">
				<div class="card-body d-flex flex-column">
					<h5 class="card-title mt-auto">{{$dept->title}}</h5>
					<a href="{{route('department', ['dept' => $dept->short_title])}}" class="btn btn-primary btn-block">More</a>
				</div>
			</div>
		@endforeach
		</div>
	</div>
@endsection