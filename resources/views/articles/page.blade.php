@extends('layouts.app')

@section('title' , 'Articles')

@section('content')
	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
			<!-- Foreach needed since it is JSON -->
			@foreach ($articles as $article)
				<div class="card">
					<div class="row">
						<div class="col-md-7">
							<div class="card-body">
								<h1 class="card-title "><strong>{{$article->title}}</strong></h1>
								<p class="card-text"><small class="text-muted">Published on {{date('F d, Y', strtotime($article->created_at))}} at {{date('h:i A', strtotime($article->created_at))}}</small></p>
								<p class="card-text">{{$article->body}}</p>
							</div>
						</div>
						<div class="col-md-5">
							<img src="{{asset($article->image_path)}}" class="card-img" alt="{{$article->image_alt}}">
						</div>
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