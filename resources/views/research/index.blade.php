@extends('layouts.app')

@section('title', 'Research')
<!-- USED WHEN NEWS, RESEARCH, AND PUBLICATIONS HAVE DIFFERENT LAYOUTS -->
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				Research
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			@foreach ($articles as $article)
				<div class="card">
					<div class="row">
						<div class="col-md-2">
							<img src="{{asset($article->header_image)}}" class="card-img" alt="{{$article->header_alt}}">
						</div>
						<div class="col-md-10">
							<div class="card-body">
								<h4 class="card-title "><strong>{{$article->title}}</strong></h4>
								<p class="card-text"><small class="text-muted">Published on {{\Carbon\Carbon::parse($article->from_date)->toFormattedDateString()}} at {{date('h:i A', strtotime($article->published_at))}}</small></p>
								<div class="card-text">
									{!!Str::words(strip_tags($article->body), 100)!!}
								</div>
								<br>
								<a href="{{url('articles?id='.$article->id)}}" role="button" class="btn btn-primary">Read More</a>
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