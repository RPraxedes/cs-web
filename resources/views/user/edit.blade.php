@extends('layouts.app')

@section('title' , 'Edit Article')

@section('head')
	<script src="{{ asset('js/user.js') }}"></script>
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
			<div class="row justify-content-md-center title margin-top margin-bottom">
				<div class="col-md-12">
					<div class="display-3 text-center">{{Str::title($article->type)}} Builder</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<form method="POST" action="{{route('admin.article.save')}}" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input name="title" class="form-control form-control-lg" type="text" placeholder="{{Str::title($article->type)}} Title" value="{{$article->title}}" required><br>
							<input name="id" type="hidden" value="{{$article->id}}" required>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01">Header image</span>
								</div>
								<div class="custom-file">
									<input type="file" name="header_image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value=NULL>
									<label class="custom-file-label" for="inputGroupFile01">{{$article->header_image}}</label>
								</div>
							</div>
							<input name="header_alt" class="form-control" type="text" placeholder="Header image description" value="{{$article->header_alt}}" required>
							<br>
							<textarea name="body" id="tinytextarea" class="w-100" placeholder="What's the scoop?">{{$article->body}}</textarea>
						</div>
						
						<button type="submit" class="btn btn-primary float-right">Save</button>
					</form>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<a href="{{route('dash')}}" role="button" class="btn btn-primary"> &larr; Dashboard</a>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection