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
				<a class="btn btn-success" href="{{url()->current()}}/create" role="button">Create an Article</a>
			</div>
        </div>
    </div>
</div>
@endsection
