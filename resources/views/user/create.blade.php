@extends('layouts.app')

@section('title' , 'Create an Article')

@section('head')
	<!-- TinyMCE -->
	<script src="{{asset('js/tinymce/tinymce.min.js')}}" crossorigin="anonymous"></script>
	<script>
		tinymce.init({
			selector: '#tinytextarea',
			plugins: ["placeholder", "autosave", "image", "table", "code"],
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
			@if (!isset($type))
				<div class="col-md-5 alert alert-info" role="alert">
					Choose a type of article below!
				</div>
			@endif
				<div class="col-md-12">
					<div class="display-3 text-center">{{Str::title($type)}} Builder</div>
				</div>
				<div class="col-md-12">
					<div class="row justify-content-center">
						<div class="col-md-auto text-center">
							<a href="{{route('article.createbuilder', ['type' => 'news'])}}">News</a>
						</div>
						<div class="col-md-auto text-center">
							<a href="{{route('article.createbuilder', ['type' => 'research'])}}">Research</a>
						</div>
						<div class="col-md-auto text-center">
							<a href="{{route('article.createbuilder', ['type' => 'publication'])}}">Publication</a>
						</div>
					</div>
				</div>
			</div>
			@if (isset($type))
				<div class="row justify-content-md-center">
					<div class="col-md-10">
						<form method="POST" action="{{route('article.create')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<input name="title" class="form-control form-control-lg" type="text" placeholder="{{Str::title($type)}} Title" required>
								<input name="type" type="hidden" value="{{$type}}" required><br>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroupFileAddon01">Header image</span>
									</div>
									<div class="custom-file">
										<input type="file" name="header_image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									</div>
								</div>
								<input name="header_alt" class="form-control" type="text" placeholder="Header image description" required>
								<br>
								<textarea name="body" id="tinytextarea" class="w-100" placeholder="What's the scoop?"></textarea>
							</div>
							
							<button type="submit" class="btn btn-primary float-right" {{$type?'':'disabled'}}>Save</button>
						</form>
					</div>
				</div>
			@else
				<div class="half-height text-center">
				Wa ha ha!
				</div>
			@endif
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<a href="{{route('dash')}}" role="button" class="btn btn-primary"> &larr; Dashboard</a>
				</div>
			</div>
        </div>
    </div>
</div>

@endsection