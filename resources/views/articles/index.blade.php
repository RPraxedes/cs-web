@extends('layouts.app')

@section('title' , 'Articles')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				The College of Science
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			@foreach ($articles as $article)
				<div class="card">
					<div class="row">
						<div class="col-md-2">
							<img src="{{asset($article->image_path)}}" class="card-img" alt="{{$article->image_alt}}">
						</div>
						<div class="col-md-10">
							<div class="card-body">
								<h4 class="card-title "><strong>{{$article->title}}</strong></h4>
								<p class="card-text"><small class="text-muted">Published at {{$article->created_at}}</small></p>
								<p class="card-text">{{$content = str_limit($article->body, 440)}}</p>
								<a href="{{url('articles?id='.$article->id)}}" role="button" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
@endsection