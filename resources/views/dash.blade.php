@extends('layouts.app')

@section('title' , 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row">
                <div class="display-4 title">Dashboard</div>
			</div>
			<div class="row">
				@if (session('status'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('status') }}
						You are logged in!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif
				<div class="btn-group" role="group" aria-level="Article Management">
					<div class="btn-group" role="group">
						<div class="dropdown">
							<a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create an Article</a>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop">
								<a class="dropdown-item" href="{{url()->current()}}/create?type=news">News</a>
								<a class="dropdown-item" href="{{url()->current()}}/create?type=research">Research</a>
								<a class="dropdown-item" href="{{url()->current()}}/create?type=publication">Publication</a>
							</div>
						</div>
					</div>
					<a class="btn btn-secondary" href="#" role="button">View Your Articles</a>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
