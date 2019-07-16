@extends('layouts.app')

@section('title', $faculty->first_name.' '.$faculty->last_name)

@section('header')
<div class="row">
	<div class="col-xl-12 display-1 title text-center">
		Faculty
	</div>
</div>
@endsection

@section('content')
<div class="body container">
	<div class="row align-content-md-left">
		<div class="col-md-4">
			<div class="card animated fadeInLeft">
			@if($faculty->profile_image != NULL)
				<img src="{{asset('images/'.$faculty->profile_image)}}" class="card-img-top" alt="{{$faculty->profile_alt}}">
			@else
				<img src="{{asset('assets/images/faculty.png')}}" class="card-img-top" alt="{{$faculty->profile_alt}}">
			@endif
				<div class="card-body">
					<p class="card-text">{{$faculty->position ?? ''}}<br>{{$faculty->department->title ?? ''}}<br><span class="text-muted">{{$faculty->status->status ?? ''}}</span></p>
				</div>
			</div>
		</div>
		<div class="col-md-8 animated fadeInRight delay-1">
			<h2 class="display-4 margin-bottom">{{$faculty->last_name.', '.$faculty->first_name.' '.$initials}}</h2>
			<div class="card animated fadeInRight delay-3 margin-bottom">
				<div class="card-body">
					<h5 class="card-title">Educational Attainment</h5>
					<p class="card-text">{{$faculty->bs_degree ?? ''}}<br>{{$faculty->ms_degree ?? ''}}<br>{{$faculty->phd_degree ?? ''}}</p>
				</div>
			</div>
			@if($faculty->contact_info != NULL)
			<div class="card animated fadeInRight delay-5 margin-bottom">
				<div class="card-body">
					<h5 class="card-title">Contact Information</h5>
					<p class="card-text">{!! preg_replace("/, /", "<br>", ($faculty->contact_info)) !!}</p>
				</div>
			</div>
			@endif
			@if($faculty->research_interest != NULL)
			<div class="card animated fadeInRight delay-7 margin-bottom">
				<div class="card-body">
					<h5 class="card-title">Research Interests</h5>
					<p class="card-text">{!! preg_replace("/, /", "<br>", ($faculty->research_interest)) !!}</p>
				</div>
			</div>
			@endif
		</div>
		<div class="col-md-12 animated fadeInDown delay-10">
			<h3 class="margin-top margin-bottom">Academic Profile</h3>
			<div class="accordion" id="Accord">
				<div class="card">
					<div class="card-header" id="pubHeading">
						<h2 class="mb-0">
							<button class="btn btn-link stretched-link" type="button" data-toggle="collapse" data-target="#Publications" aria-expanded="true" aria-controls="Publications">Publications</button>
						</h2>
					</div>

					<div id="Publications" class="collapse" aria-labelledby="pubHeading" data-parent="#Accord">
						<div class="card-body">
							<ul class="list">
						@if(!$publications->isEmpty())
							@foreach($publications as $pub)
								<li><a href="{{url($pub->link ?? '')}}" class="card-link">{{$pub->author ?? ''.' ('.\Carbon\Carbon::parse($pub->published_date)->year.').'}} <i>{{$pub->title ?? ''}}</i>. {{$pub->journal ?? ''}} Volume {{$pub->volume ?? ''}}</a></li>
							@endforeach
						@else
								<li>None</li>
						@endif
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="researchHeading">
						<h2 class="mb-0">
							<button class="btn btn-link stretched-link" type="button" data-toggle="collapse" data-target="#Research" aria-expanded="false" aria-controls="Research">Research Disseminations</button>
						</h2>
					</div>
					<div id="Research" class="collapse" aria-labelledby="researchHeading" data-parent="#Accord">
						<div class="card-body">
							<ul class="list">
						@if(!$conferences->isEmpty())
							@foreach($conferences as $conf)
								<li><a href="{{url($conf->link ?? '')}}" class="card-link"><i>{{$conf->paper_title ?? ''}}</i>. {{$conf->author ?? ''}} {{\Carbon\Carbon::parse($conf->conference_date)->format('F d, Y')}}. {{$conf->conference_title ?? ''}}. {{$conf->venue ?? ''}}</a></li>
							@endforeach
						@else
								<li>None</li>
						@endif
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="projHeading">
						<h2 class="mb-0">
							<button class="btn btn-link stretched-link" type="button" data-toggle="collapse" data-target="#Projects" aria-expanded="false" aria-controls="Projects">Current Research Projects</button>
						</h2>
					</div>
					<div id="Projects" class="collapse" aria-labelledby="projHeading" data-parent="#Accord">
						<div class="card-body">
							<ul class="list">
						@if(!$projects->isEmpty())
							@foreach($projects as $proj)
								<li><a href="{{url($proj->link ?? '')}}" class="card-link">{{$proj->author ?? ''.' ('.\Carbon\Carbon::parse($proj->published_date)->year.').'}} <i>{{$proj->title ?? ''}}</i>. {{$proj->journal ?? ''}} Volume {{$proj->volume ?? ''}}</a></li>
							@endforeach
						@else
								<li>None</li>
						@endif
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="otherHeading">
						<h2 class="mb-0">
							<button class="btn btn-link stretched-link" type="button" data-toggle="collapse" data-target="#Achievements" aria-expanded="false" aria-controls="Achievements">Other Achievements</button>
						</h2>
					</div>
					<div id="Achievements" class="collapse" aria-labelledby="otherHeading" data-parent="#Accord">
						<div class="card-body" style="padding-left: 20px">
						@if(!$others->isEmpty())
							{!!$others->first()->content!!}
						@else
							<ul class="list">
								<li>None</li>
							</ul>
						@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection