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
			<div class="row">
			@if(Auth::user()->position == 'admin')
				<a class="btn btn-secondary" href="{{route('admin.article.createbuilder', ['type' => 'news'])}}">Create a News Article</a>
				<a class="btn btn-secondary" href="{{route('admin.article.createbuilder', ['type' => 'research'])}}">Create a Research Article</a>
				<a class="btn btn-secondary" href="{{route('admin.article.view')}}" role="button">View Your Articles</a>
				<a class="btn btn-secondary" href="{{route('admin.user.viewall')}}" role="button">Manage Users</a>
				<a class="btn btn-secondary" href="{{route('admin.faculty.viewall')}}" role="button">Manage Faculty</a>
				<a class="btn btn-secondary" href="{{route('admin.pub.viewall')}}" role="button">Manage Publications</a>
				<a class="btn btn-secondary" href="{{route('admin.conf.viewall')}}" role="button">Manage Conferences</a>
				<a class="btn btn-secondary" href="{{route('admin.proj.viewall')}}" role="button">Manage Current Research Projects</a>
				<a class="btn btn-secondary" href="{{route('admin.other.viewall')}}" role="button">Manage Other Achievements</a>
				<a class="btn btn-secondary" href="{{route('admin.alert.viewall')}}" role="button">Manage Alerts</a>
				<a class="btn btn-secondary" href="{{route('admin.gallery.viewall')}}" role="button">Manage Gallery</a>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#alertModal">Create an Alert</button>
			@elseif(Auth::user()->position == 'faculty')
				<a class="btn btn-success" href="{{route('user.profile')}}" role="button">Edit User Profile</a>
				<a class="btn btn-success" href="{{route('faculty.view', ['id'=> $id])}}" role="button">View Your Faculty Profile</a>
				<form action="{{route('faculty.edit')}}" method="post">
					@csrf
					<button class="btn btn-success" type="submit">Edit Your Faculty Profile</a>
				</form>
				<form action="{{route('faculty.delete', ['id' => Auth::user()->id])}}" method="post">
					@csrf
					<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
					<button type="submit" class="btn btn-danger">Delete My Faculty Profile</button>
				</form>
				<form action="{{route('faculty.publish')}}" method="post">
					@csrf
					<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
					<button type="submit" class="btn btn-success">Publish My Faculty Profile</button>
				</form>
			@endif
				

				<!-- Alert Modal -->
				<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="alertModalLongTitle">Create an Alert</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{route('admin.alert.add')}}" method="post">
									@csrf
									<label class="form-check-label" for="alertBody">Alert Body</label>
									<input name="alert_body" class="form-control" type="text" placeholder="What do you urgently want to say? (HTML tags allowed)" id="alertBody" required><br>
									<label for="selectStyle">Select Alert Style</label>
									<select class="form-control" name="alert_style" id="selectStyle">
										<option value="primary" class="text-primary">Primary</option>
										<option value="secondary" class="text-secondary">Secondary</option>
										<option value="success" class="text-success">Success</option>
										<option value="danger" class="text-danger">Danger</option>
										<option value="warning" class="text-warning">Warning</option>
										<option value="info" class="text-info">Info</option>
									</select><br>
									<div class="form-check">
										<input type="checkbox" name="startNow" class="form-check-input" id="Start" value=true>
										<label class="form-check-label" for="Start">Start alert now</label>
									</div>
									<div class="form-row">
										<div class="col">
											<label class="form-check-label" for="alertStartDate">Date Alert Starts</label>
											<input name="start_date" class="form-control start-input" type="date" id="alertStartDate" required><br>
										</div>
										<div class="col">
											<label class="form-check-label" for="alertStartTime">Time Alert Starts</label>
											<input name="start_time" class="form-control start-input" type="time" id="alertStartTime" required><br>
										</div>
									</div>
									<div class="form-check">
										<input type="checkbox" name="endNever" class="form-check-input" id="End" value=true>
										<label class="form-check-label" for="End">Manually end alert</label>
									</div>
									<div class="form-row">
										<div class="col">
											<label class="form-check-label" for="alertEndDate">Date Alert End</label>
											<input name="end_date" class="form-control end-input" type="date" id="alertEndDate" required><br>
										</div>
										<div class="col">
											<label class="form-check-label" for="alertEndTime">Time Alert Ends</label>
											<input name="end_time" class="form-control end-input" type="time" id="alertEndTime" required><br>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success">Save</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		@else
			<div class="alert alert-warning" role="alert">
				You are not verified by an administrator. Please wait until you have been verified.
			</div>
		@endif
        </div>
    </div>
</div>
@endsection
