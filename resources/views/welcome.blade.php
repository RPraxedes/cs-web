@extends('layouts.app')

@section('title' , 'Home')

@section('content')

	<!-- Title Section-->
	<div class="container-fluid col-xl-12 bg-image">
		<div class="display-1">
			<span class="text-center title-text">College of Science</span>
		</div>
		<div class="crop-height flip">
			<img src="{{asset('assets/images/UPBaguio-El-blurred.png')}}" class="d-block w-100 titleBackground flip" alt="UPB Oblation">
		</div>
	</div>
	<!-- Alert Section -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			@foreach ($alerts as $alert)
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{$alert}}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endforeach
			</div>
		</div>
	<!-- News and Announcements Section -->	
		<h1 class="display-4">News</h1>
		@foreach ($news_preview as $news)
			<div class="card">
				<div class="row">
					<div class="col-md-2">
						<img src="{{asset($news->header_image)}}" class="card-img" alt="{{$news->header_alt}}">
					</div>
					<div class="col-md-10">
						<div class="card-body">
							<h4 class="card-title"><strong>{{$news->title}}</strong></h4>
							<p class="card-text"><small class="text-muted">Published on {{\Carbon\Carbon::parse($news->from_date)->toFormattedDateString()}} at {{date('h:i A', strtotime($news->published_at))}}</small></p>
							<div class="card-text">
							{!!Str::words(strip_tags($news->body), 100, '...')!!}
							</div>
							<a href="{{url('articles?id='.$news->id)}}" role="button" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
			</div>
		@endforeach
		<a href ="{{url('/news')}}" role="button" class="btn btn-primary">Show All News</a>
	<!-- Research and Publications Section-->
	</div>
@endsection