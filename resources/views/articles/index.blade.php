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
		<div class="row">
			<div class="col-md-12">
			@foreach ($articles as $article)
				<div class="card">
					<div class="row">
						<div class="col-md-2">
							<img src="{{asset('images/'.$article->header_image)}}" class="card-img" alt="{{$article->header_alt}}">
						</div>
						<div class="col-md-10">
							<div class="card-body">
								<h4 class="card-title "><strong>{{$article->title}}</strong></h4>
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
		<div class="row justify-content-md-center">
			{{$articles->render()}}
		</div>
	</div>
@endsection