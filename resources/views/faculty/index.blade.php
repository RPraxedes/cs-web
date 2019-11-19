@extends('layouts.app')

@section('title', $department_info->first()->title ?? 'Faculty')

@section('header')
<div class="row">
	<div class="col-xl-12 display-4 title header text-center">
		{{ $department_info->first()->title ?? 'Faculty'}}
	</div>
</div>
@endsection

@section('content')
<div class="container-fluid margin-top-80">
  <div class="row justify-content-md-center">
    {!!$department_info->first()->body ?? '' !!}
  </div>
  @if(count($courses) > 0)
  <div class="row justify-content-md-center margin-top-80">
    <div class="col-xl-12 display-4 title text-center margin-bottom-80">
      <h1>Programs Offered</h1>
    </div>
    @foreach($all_courses as $course)
      @foreach($courses as $selected)
        @if($course->title == $selected)
        <div class="card col-xl-2 col-md-5 col-xs-12 no-padding tint">
  				<a href="{{route('checklist.get', ['name' => $course->uri])}}">
  					<img src="{{asset('assets/images/courses/'.$course->image)}}" class="card-img rounded">
  					<h4 class="card-text-over"><strong>{{$course->title}}</strong></h4>
  				</a>
  			</div>
        @endif
      @endforeach
    @endforeach
  </div>
  @endif
	<div class="row justify-content-md-center">
    <div class="col-xl-12 display-4 title text-center margin-top-80 margin-bottom-80">
      <h1>Faculty</h1>
    </div>
	@foreach($faculty as $person)
		<div class="card col-md-2 no-padding margin-right margin-left margin-bottom">
		@if($person->profile_image != NULL)
			<img src="{{asset('images/'.$person->profile_image)}}" class="card-img-top h-25vw" alt="{{$person->profile_alt}}">
		@else
			<img src="{{asset('assets/images/faculty.png')}}" class="card-img-top h-25vw" alt="{{$person->profile_alt}}">
		@endif
			<div class="card-body d-flex flex-column">
				<h5 class="card-title">{{$person->first_name}} {{$person->last_name}}</h5>
				<p class="card-text">{{$person->position}}<br>@if(isset($person->phd_degree)){{$person->phd_degree}}@elseif(isset($person->ms_degree)){{$person->ms_degree}}@else{{$person->bs_degree}}@endif</p>
				<a href="{{route('faculty.view', ['id' => $person->user_id])}}" class="btn btn-primary btn-block mt-auto">More</a>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection
