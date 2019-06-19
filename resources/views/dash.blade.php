@extends('layouts.app')

@section('title' , 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row">
                <div class="display-4 title">Dashboard</div>
			</div>
			@if (session('status'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('status') }}
					You are logged in!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
			<div class="flash-message">
				@foreach (['danger', 'warning', 'success', 'info'] as $msg)
					@if(Session::has('alert-' . $msg))
					<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
					@endif
				@endforeach
			</div>
			<div class="row">
				<div class="btn-group" role="group" aria-level="Article Management">
					<div class="btn-group" role="group">
						<div class="dropdown">
							<a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create an Article</a>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop">
								<a class="dropdown-item" href="{{route('article.create')}}?type=news">News</a>
								<a class="dropdown-item" href="{{route('article.create')}}?type=research">Research</a>
								<a class="dropdown-item" href="{{route('article.create')}}?type=publication">Publication</a>
							</div>
						</div>
					</div>
					<a class="btn btn-secondary" href="{{route('article.view')}}" role="button">View Your Articles</a>
				</div>
				<div class="btn-group" role="group" aria-level="Article Management">
					<a class="btn btn-secondary" href="#" role="button">Add Course</a>
					<a class="btn btn-secondary" href="#" role="button">View Courses</a>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
