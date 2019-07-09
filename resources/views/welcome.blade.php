@extends('layouts.app')

@section('title' , 'Home')

@section('header')
<div class="container-fluid">
	<div class="col-xl-12 display-1 title text-center">
		<span class="text-center display-1">College of Science</span>
	</div>
</div>

@endsection

@section('content')
<!-- Title Section-->
<div class="container-fluid">
	@foreach($alerts as $alert)
	<div class="alert alert-{{$alert->style}} alert-dismissible fade show" role="alert">
		{!!$alert->body!!}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endforeach
	<div class="row">
		<h1 class="display-4">News</h1>
	</div>
		<!-- News and Announcements Section -->	
	<div class="row justify-content-center">
	@foreach ($news_preview as $news)
		<div class="card col-md-7">
			<div class="row">
				<div class="col-md-3 no-padding">
					<img src="{{asset('images/'.$news->header_image)}}" class="card-img" alt="{{$news->header_alt}}">
				</div>
				<div class="col-md-9">
					<div class="card-body">
						<h4 class="card-title"><strong>{{$news->title}}</strong></h4>
						<p class="card-text"><small class="text-muted">Published on {{\Carbon\Carbon::parse($news->from_date)->toFormattedDateString()}} at {{date('h:i A', strtotime($news->published_at))}} by {{$news->user->name}}</small></p>
						<div class="card-text">
						{!!Str::words(strip_tags($news->body), 100, '...')!!}
						</div>
						<a href="{{route('article.page', ['id' => $news->id])}}" role="button" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
		</div>
	@endforeach
	</div>
	<a href ="{{url('/news')}}" role="button" class="btn btn-primary">Show All News</a>
<!-- Research and Publications Section-->
</div>
@endsection