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
						<a class="btn btn-secondary" href="{{route('article.create')}}?type=news">Create a News Article</a>
						<a class="btn btn-secondary" href="{{route('article.create')}}?type=research">Create a Research Article</a>
						<a class="btn btn-secondary" href="{{route('article.create')}}?type=publication">Create a Publication</a>
				</div>
				<a class="btn btn-secondary" href="{{route('article.view')}}" role="button">View Your Articles</a>
				<a class="btn btn-secondary" href="{{route('article.edit')}}" role="button">Edit Checklist</a>
				<a class="btn btn-secondary" href="#" role="button">View Courses</a>
				<a class="btn btn-success" href="#" role="button">Create an Alert</a>
				<a class="btn btn-success" href="{{route('user.profile')}}" role="button">Edit Profile</a>
			</div>
        </div>
    </div>
</div>
@endsection
