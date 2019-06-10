@extends('layouts.app')

@section('title' , 'Articles')

@section('content')
	<div class="container-fluid" style="margin-top: 60px">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
			<!-- Foreach needed since it is JSON -->
			@foreach ($articles as $article)
				<div class="row">
					<div class="col-md-7">
						<h1 class="display-3"><strong>{{$article->title}}</strong></h1>
						<small class="text-muted">Published on {{date('F d, Y', strtotime($article->created_at))}} at {{date('h:i A', strtotime($article->created_at))}}</small><br>
						<p>{!!$article->body!!}</p>
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
			@endforeach
			</div>
		</div>
	</div>
@endsection