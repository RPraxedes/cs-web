@extends('layouts.app')

@section('title' , 'Create an Article')

@section('head')
	<!-- TinyMCE -->
	<script src="{{asset('js/tinymce/tinymce.min.js')}}" crossorigin="anonymous"></script>
	<script>
		tinymce.init({
			selector: '#tinytextarea',
			plugins: 'placeholder',
			height: '600px'
		});
	</script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row justify-content-md-center title">
			<div class="col-md-5 alert alert-light alert-dismissible fade show" role="alert">
				Choose a type of article!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
				<!--<div class="dropleft">
					<a href="#" role="button" class="btn btn-outline-dark dropdown-toggle title-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{Str::title($type)}}
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{url()->current()}}?type=news">News</a>
						<a class="dropdown-item" href="{{url()->current()}}?type=research">Research</a>
						<a class="dropdown-item" href="{{url()->current()}}?type=publication">Publication</a>
					</div>
					<button type="button" class="btn btn-outline-dark title-button" disabled>Builder</button>
				</div>-->
				<div class="col-md-12">
					<div class="display-2 text-center">{{Str::title($type)}} Builder</div>
				</div>
				<div class="col-md-12">
					<div class="row justify-content-center">
						<div class="col-md-auto text-center">
							<a href="{{url()->current()}}?type=news">News</a>
						</div>
						<div class="col-md-auto text-center">
							<a href="{{url()->current()}}?type=research">Research</a>
						</div>
						<div class="col-md-auto text-center">
							<a href="{{url()->current()}}?type=publication">Publication</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<form action="" method="post">
						<div class="form-group">
							<input name="title" class="form-control form-control-lg" type="text" placeholder="{{Str::title($type)}} Title">
							<br>
							<textarea name="body" style="height: 1000px" id="tinytextarea" class="w-100" placeholder="What's on your mind?"></textarea>
						</div>
						<button type="submit" class="btn btn-primary float-right" {{request()->has('type')?'':'disabled'}}>Submit</button>
					</form>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<a href="{{url('/dashboard')}}" role="button" class="btn btn-primary"> &larr; Dashboard</a>
				</div>
			</div>
        </div>
    </div>
	
		
</div>

@endsection