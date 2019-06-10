@extends('layouts.app')

@section('title', 'Publications')
<!-- USED WHEN NEWS, RESEARCH, AND PUBLICATIONS HAVE DIFFERENT LAYOUTS -->
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				Publications
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			@foreach ($publications as $publication)
				<div class="card">
					<div class="row">
						<div class="col-md-2">
							<img src="{{asset($publication->header_image)}}" class="card-img" alt="{{$publication->header_alt}}">
						</div>
						<div class="col-md-10">
							<div class="card-body">
								<h4 class="card-title "><strong>{{$publication->title}}</strong></h4>
								<p class="card-text"><small class="text-muted">Published at {{$publication->created_at}}</small></p>
								<div class="card-text">
									{!!Str::words(strip_tags($publication->body), 100)!!}
								</div>
								<br>
								<p class="card-text"><small class="text-muted">Type: {{$publication->type}}</small></p>
								<a href="{{url('articles?id='.$publication->id)}}" role="button" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
		<div class="row justify-content-md-center">
			{{$publications->render()}}
		</div>
	</div>
@endsection