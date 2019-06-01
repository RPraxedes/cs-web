@extends('layouts.app')

@section('title' , 'Create an Article')

@section('head')
	<!-- TinyMCE -->
	<script src="{{asset('js/tinymce/tinymce.min.js')}}" crossorigin="anonymous"></script>
	<script>
		tinymce.init({
			selector: '#tinytextarea'
		});
	</script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row justify-content-md-center title">
				<div class="dropleft">
					<a href="#" role="button" class="btn btn-outline-dark dropdown-toggle title-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{Str::title($type)}}
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{url()->current()}}?type=news">News</a>
						<a class="dropdown-item" href="{{url()->current()}}?type=research">Research</a>
						<a class="dropdown-item" href="{{url()->current()}}?type=publication">Publication</a>
					</div>
					<button type="button" class="btn btn-outline-dark title-button" disabled>Builder</button>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<form>
					<div class="form-group">
						{{Str::title($type)}} Title <input class="form-control form-control-lg" type="text" placeholder="Article Title">
						<br>
						<textarea id="tinytextarea" class="w-100"></textarea>
					</div>
					<button type="submit" class="btn btn-primary" {{request()->has('type')?'':'disabled'}}>Submit</button>
				</form>
			</div>
			<div class="row">
				<div class="col-md-2">
					<a href="{{url('/dashboard')}}" role="button" class="btn btn-primary">&larr; Dashboard</a>
				</div>
			</div>
        </div>
    </div>
</div>

@endsection