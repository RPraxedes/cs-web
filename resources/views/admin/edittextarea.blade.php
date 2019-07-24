@extends('layouts.app')

@section('title' , 'Edit Article')

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
<!-- TinyMCE -->
<script src="{{asset('js/tinymce/tinymce.min.js')}}" crossorigin="anonymous"></script>
<script>
	tinymce.init({
		selector: '#tinytextarea',
		plugins: ["placeholder", "autosave", "code", "link", "lists"],
		height: '600px',
		menubar: "file edit view insert format",
		toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist outdent indent | link",
		autosave_restore_when_empty: true,
		link_assume_external_targets: true,
		target_list: false,
	});
</script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row justify-content-md-center title margin-top margin-bottom">
				<div class="col-md-12">
					<div class="display-3 text-center">{{$page_action}} {{$category}}s</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-12">
				@if(isset($pub['id']))
					<form id="{{$action['name']}}Form" action="{{route($routeprefix.'.'.$short_category.'.'.$action['route'], ['id' => $pub['id']])}}" method="post" enctype="multipart/form-data">
				@else
					<form id="{{$action['name']}}Form" action="{{route($routeprefix.'.'.$short_category.'.'.$action['route'])}}" method="post" enctype="multipart/form-data">
				@endif
						@csrf
						@method($action['method'])
					@foreach($fields as $field)
					@if($field['name'] == 'user_id')
						<label class="form-check-label" for="{{$field['name']}}">{{$field['title']}}@if($field['required'])<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span>@endif</label>
						<select name="{{$field['name']}}" class="form-control" id="{{$field['name']}}" autocomplete="off">
						@foreach($faculty as $author)
							<option value="{{$author->user_id}}" @if($pub['user_id'] == $author->user_id) selected @endif>{{$author->first_name ?? ''}} {{$author->middle_name ?? ''}} {{$author->last_name ?? ''}}</option>
						@endforeach
						</select>
						<br>
					@elseif($field['type'] == 'tiny')
						<label class="form-check-label" for="{{$field['name']}}">{{$field['title']}}@if($field['required'])<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span>@endif</label>
						<textarea name="{{$field['name']}}" id="tinytextarea" class="w-100" placeholder="{{$field['placeholder']}}">{{$pub['content'] ?? ''}}</textarea><br>
					@else
						<label class="form-check-label" for="{{$field['name']}}">{{$field['title']}}@if($field['required'])<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span>@endif</label>
						<input type="{{$field['type']}}" name="{{$field['name']}}" id="{{$field['name']}}" class="form-control" placeholder="{{$field['placeholder']}}" value="{{$pub[$field['name']] ?? ''}}" {{$field['required']}}>
						<br>
					@endif
					@endforeach
						<input type="hidden" name="id" value="{{$pub['id']}}">
						<button type="submit" class="btn btn-success margin-top">{{$action['name']}}</button>
					</form>
				</div>
			</div>
			<div class="row justify-content-md-center margin-top margin-bottom">
				<div class="col-md-5">
					<a href="{{route($routeprefix.'.'.$short_category.'.viewall')}}" role="button" class="btn btn-block btn-primary">Back to {{$category}}s</a>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection