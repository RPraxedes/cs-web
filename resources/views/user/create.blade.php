@extends('layouts.app')

@section('title' , 'Create an Article')

@section('head')
	<!-- TinyMCE -->
	<script src="{{asset('js/tinymce/tinymce.min.js')}}" crossorigin="anonymous"></script>
	<script>
		tinymce.init({
			selector: '#tinytextarea',
			plugins: ["placeholder", "autosave", "image", "table"],
			height: '600px',
			menubar: "file edit view insert format table",
			toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
			autosave_restore_when_empty: true,
			table_advtab: true,
			table_default_attributes: {
				class: 'table table-striped'
			},
			image_advtab: true,
			/* Automatic Image Upload (wip)
			image_uploadtab: true,
			images_upload_url: true,
			*/
		});
	</script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row justify-content-md-center title">
			@if($alert)
				<div class="col-md-5 alert alert-danger" role="alert">
					Invalid request!
				</div>
			@endif
			@if (!request()->has('type'))
				<div class="col-md-5 alert alert-info" role="alert">
					Choose a type of article below!
				</div>
			@endif
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
					<div class="display-3 text-center">{{Str::title($type)}} Builder</div>
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
			@if (request()->has('type'))
				<div class="row justify-content-md-center">
					<div class="col-md-10">
						<form method="POST" action="/dashboard/save">
							@csrf
							<div class="form-group">
								<input name="title" class="form-control form-control-lg" type="text" placeholder="{{Str::title($type)}} Title" required>
								<input name="type" class="form-control form-control-lg" type="hidden" value="{{$type}}" required>
								<!--<label for="exampleFormControlFile1">Example file input</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">-->
								<br>
								<textarea name="body" id="tinytextarea" class="w-100" placeholder="What's the scoop?"></textarea>
							</div>
							
							<button type="submit" class="btn btn-primary float-right" {{request()->has('type')?'':'disabled'}}>Save</button>
						</form>
						{{var_dump($errors)}}
					</div>
				</div>
			@else
				<div class="half-height text-center">
				Wa ha ha!
				</div>
			@endif
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<a href="{{url('/dashboard')}}" role="button" class="btn btn-primary"> &larr; Dashboard</a>
				</div>
			</div>
        </div>
    </div>
	
		
</div>

@endsection