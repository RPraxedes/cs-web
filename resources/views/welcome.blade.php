@extends('layouts.app')

@section('title' , 'Home')

@section('header')
<div class="container-fluid">
	<div class="col-xl-12 display-1 d-flex justify-content-center align-items-center text-center" id="welcome-header">
		<img src="{{asset('assets/images/title1.jpeg')}}" alt="title1" class="hvr-fade">
		<span class="d-none d-sm-block text-center display-3 title-text" style="z-index: 1; margin-bottom: 20vh;"><strong>University of the Philippines Baguio<br>College of Science</strong></span>
		<div class="down-arrow bounce"></div>
	</div>
</div>
<script>
$('.hvr-fade').on('mouseenter', function(){
});

$('.hvr-fade').hover(
	function (){
		$('.down-arrow').show();
		$('.down-arrow').addClass('fadeInDown');	
	},
	function (){
		$('.down-arrow').hide();
		$('.down-arrow').removeClass('fadeInDown');	
	}
	
);
</script>
@endsection

@section('content')
<!-- Title Section-->
<div class="container-fluid card-background">
	<div class="row justify-content-center">
		<div class="col-md-10 margin-top margin-bottom">
			<h1 class="display-3 text-center">News</h1>
		</div>
	</div>
	@foreach($alerts as $alert)
	<div class="alert alert-{{$alert->style}} alert-dismissible fade show margin-top" role="alert">
		{!!$alert->body!!}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endforeach
	<div class="row justify-content-center">
	@foreach ($news_preview as $news)
		<div class="card col-md-10 margin-bottom">
			<div class="row">
				<div class="col-md-3 no-padding text-center">
				@if($news->header_image != NULL)
					<img src="{{asset('images/'.$news->header_image)}}" class="card-img" alt="{{$news->header_alt}}">
				@else
					<span class="oi oi-copywriting text-center" style="color: #7b1113; padding-top: 6rem; font-size: 8rem;"></span>
				@endif
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
	<div class="row justify-content-center">
		<div class="col-md-8 margin-bottom">
			<a href ="{{url('/news')}}" role="button" class="btn btn-secondary btn-block">Show All News</a>
		</div>
	</div>
	
<!-- Research and Publications Section-->
</div>
@endsection