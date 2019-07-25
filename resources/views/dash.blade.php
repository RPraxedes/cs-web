@extends('layouts.app')

@section('title' , 'Dashboard')

@section('head')
	<script src="{{ asset('js/user.js') }}"></script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 margin-top">
		@if(Auth::user()->verified_at != NULL)
			<div class="row">
                <div class="display-4 title">{{Str::title(Auth::user()->position)}} Dashboard</div>
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
			@if(Auth::user()->position == 'admin')
			<div class="row">
				<div class="col-12 margin-bottom">
					<h3>Article Management</h3>
					<a class="btn btn-secondary" href="{{route('admin.article.createbuilder', ['type' => 'news'])}}">Create a News Article</a>
					<a class="btn btn-secondary" href="{{route('admin.article.createbuilder', ['type' => 'research'])}}">Create a Research Article</a>
					<a class="btn btn-secondary" href="{{route('admin.article.view')}}" role="button">View Your Articles</a>
				</div>
				<div class="col-12 margin-bottom">
					<h3>User Management</h3>
					<a class="btn btn-secondary" href="{{route('admin.user.viewall')}}" role="button">Manage Users</a>
				</div>
				<div class="col-12 margin-bottom">
					<h3>Faculty Information Management</h3>
					<a class="btn btn-secondary" href="{{route('admin.faculty.viewall')}}" role="button">Manage Faculty</a>
					<a class="btn btn-secondary" href="{{route('admin.pub.viewall')}}" role="button">Manage Publications</a>
					<a class="btn btn-secondary" href="{{route('admin.conf.viewall')}}" role="button">Manage Conferences</a>
					<a class="btn btn-secondary" href="{{route('admin.proj.viewall')}}" role="button">Manage Current Research Projects</a>
					<a class="btn btn-secondary" href="{{route('admin.other.viewall')}}" role="button">Manage Other Achievements</a>
				</div>
				<div class="col-12 margin-bottom">
					<h3>Other Features Management</h3>
					<a class="btn btn-secondary" href="{{route('admin.alert.viewall')}}" role="button">Manage Alerts</a>
					<a class="btn btn-secondary" href="{{route('admin.gallery.viewall')}}" role="button">Manage Gallery</a>
				</div>
			</div>
			@elseif(Auth::user()->position == 'faculty')
			<div class="row">
				<div class="col-12 margin-bottom">
					<h3>Your User Profile</h3>
					<a class="btn btn-secondary btn-block col-3" href="{{route('user.profile')}}" role="button">Edit</a>
				</div>
				<div class="col-12 margin-bottom">
					<h3>Your Faculty Profile</h3>
					<a class="btn btn-secondary btn-block col-3 margin-bottom" href="{{route('faculty.view', ['id'=> $id])}}" role="button">View</a>
					<form class="form-inline margin-bottom" action="{{route('faculty.edit')}}" method="post">@csrf<button class="btn btn-secondary btn-block col-3" type="submit">Edit</button></form>
					<form class="form-inline margin-bottom" action="{{route('faculty.publish')}}" method="post">@csrf<input type="hidden" name="user_id" value="{{Auth::user()->id}}"><button type="submit" class="btn btn-success btn-block col-3">Publish</button></form>
					<form class="form-inline margin-bottom" action="{{route('faculty.delete', ['id' => Auth::user()->id])}}" method="post">@csrf<input type="hidden" name="user_id" value="{{Auth::user()->id}}"><button type="submit" class="btn btn-danger btn-block col-3">Delete</button></form>
				</div>
			</div>
			@endif
		@else
			<div class="alert alert-warning" role="alert">
				You are not verified by an administrator. Please wait until you have been verified.
			</div>
		@endif
        </div>
    </div>
</div>
@endsection
