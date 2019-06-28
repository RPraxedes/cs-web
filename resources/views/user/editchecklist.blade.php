@extends('layouts.app')

@section('title' , 'Edit Checklist')

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
				<div class="col-md-12">
					<div class="display-4 text-center">Checklist Editor</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-10">
					<form method="POST" action="{{route('checklist.save', ['id' => $page->id])}}">
						@csrf
						<div class="form-group">
							<input name="title" class="form-control form-control-lg" type="text" placeholder="Course Title" value="{{$page->title}}" required data-toggle="tooltip" data-placement="top" title="Which degree program checklist does this belong?"><br>
							<textarea name="body" id="tinytextarea" class="w-100" placeholder="What's the scoop?">{{$page->body}}</textarea>
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