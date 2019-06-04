@extends('layouts.app')

@section('title' , 'Articles')

@section('content')
	<div class="container-fluid">
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
						<!--<img src="{{asset('assets/images/u7zqem98m3s21.gif')}}" alt="...">-->
					</div>
				</div>
				<div class="row">				
					<div class="col-md-1">
					<a href="{{url('/')}}" role="button" class="btn btn-primary">&larr; Home</a>
					</div>
					<div class="col-md-2">
					<a href="{{url('/articles')}}" role="button" class="btn btn-primary">&larr; All News</a>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
@endsection