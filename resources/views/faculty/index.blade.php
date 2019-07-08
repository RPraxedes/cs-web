@extends('layouts.app')

@section('title', 'Faculty')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				Faculty
			</div>
		</div>
		<div class="row justify-content-md-center">
		@foreach($faculty as $person)
			<div class="card col-3 no-padding">
			@if($person->profile_image != NULL)
				<img src="{{asset('images/'.$person->profile_image)}}" class="card-img-top" alt="{{$person->profile_alt}}">
			@else
				<img src="{{asset('assets/images/faculty.png')}}" class="card-img-top" alt="{{$person->profile_alt}}">
			@endif
				<div class="card-body">
					<h5 class="card-title">{{$person->first_name}} @if(isset($person->middle_name)){{$person->middle_name}}@endif {{$person->last_name}}</h5>
					<p class="card-text">{{$person->position}}<br>@if(isset($person->phd_degree)){{$person->phd_degree}}@elseif(isset($person->ms_degree)){{$person->ms_degree}}@else{{$person->bs_degree}}@endif</p>
					<a href="{{route('faculty.view', ['id' => $person->user_id])}}" class="btn btn-primary btn-block">More</a>
				</div>
			</div>
		@endforeach
		</div>
	</div>
@endsection