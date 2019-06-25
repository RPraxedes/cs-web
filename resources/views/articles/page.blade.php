@extends('layouts.app')

@section('title' , $article->title)

@section('content')
	<div class="container-fluid" style="margin-top: 60px">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-7">
						<h1 class="display-4">{{$article->title}}</h1>
						<small class="text-muted">Published on {{date('F d, Y', strtotime($article->published_at))}} at {{date('h:i A', strtotime($article->published_at))}} by {{$article->user->name}} @if(\Carbon\Carbon::parse($article->updated_at)->gt(\Carbon\Carbon::parse($article->published_at)))(Modified on {{\Carbon\Carbon::parse($article->updated_at)->toFormattedDateString()}} at {{date('h:i A', strtotime($article->updated_at))}}) @endif</small><br>
						<p>{!!$article->body!!}</p>
					</div>
					<div class="col-md-5">
						<img src="{{asset('images/'.$article->header_image)}}" class="card-img" alt="{{$article->header_alt}}">
					</div>
				</div>
				<div class="row">				
					<div class="col-md-2">
					<a href="{{route('welcome')}}" role="button" class="btn btn-primary">&larr; Home</a>
					</div>
					<div class="col-md-10">
					<a href="{{route('news')}}" role="button" class="btn btn-primary float-right">All News &rarr;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection