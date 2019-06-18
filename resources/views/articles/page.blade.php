@extends('layouts.app')

@section('title' , $article->first()->title)

@section('content')
	<div class="container-fluid" style="margin-top: 60px">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-7">
						<h1 class="display-4">{{$article->first()->title}}</h1>
						<small class="text-muted">Published on {{date('F d, Y', strtotime($article->first()->published_at))}} at {{date('h:i A', strtotime($article->published_at))}} by</small><br>
						<p>{!!$article->first()->body!!}</p>
					</div>
					<div class="col-md-5">
						<img src="{{asset($article->header_image)}}" class="card-img" alt="{{$article->header_alt}}">
					</div>
				</div>
				<div class="row">				
					<div class="col-md-2">
					<a href="{{url('/')}}" role="button" class="btn btn-primary">&larr; Home</a>
					</div>
					<div class="col-md-10">
					<a href="{{url('/articles')}}" role="button" class="btn btn-primary float-right">All News &rarr;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection