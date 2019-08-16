@extends('layouts.app')

@section('title' , $title.' Articles')

@section('header')
<div class="row">
	<div class="col-xl-12 display-1 title text-center">
		{{$title}}
	</div>
</div>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-10">
			@foreach ($articles as $article)
				<div class="card margin-top">
					<div class="row">
						<div class="col-md-3 d-flex obj-cover">
							@if($article->header_image != NULL)
								<img src="{{asset('images/'.$article->header_image)}}" class="card-img" alt="{{$article->header_alt}}">
							@else
								<span class="oi oi-copywriting text-center" style="color: #7b1113; padding-top: 6rem; padding-bottom: 6rem; font-size: 8rem; left: 30%"></span>
							@endif
						</div>
						<div class="col-md-9">
							<div class="card-body">
								<h4 class="card-title"><strong>{{$article->title}}</strong></h4>
								<p class="card-text"><small class="text-muted">Published on {{\Carbon\Carbon::parse($article->published_at)->toFormattedDateString()}} at {{date('h:i A', strtotime($article->published_at))}} by {{$article->user->name}} @if(\Carbon\Carbon::parse($article->updated_at)->gt(\Carbon\Carbon::parse($article->published_at))) (Modified on {{\Carbon\Carbon::parse($article->updated_at)->toFormattedDateString()}} at {{date('h:i A', strtotime($article->updated_at))}}) @endif</small></p>
								<div class="card-text">
									{!!Str::words(strip_tags($article->body), 100)!!}
								</div>
								<br>
								<a href="{{route('article.page', ['id' => $article->id])}}" role="button" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
		<div class="row justify-content-md-center margin-top margin-bottom">
			{{$articles->render()}}
		</div>
	</div>
@endsection