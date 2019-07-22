@extends('layouts.app')

@section('title' , 'Edit '.$category)

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row justify-content-md-center title margin-top margin-bottom">
				<div class="col-md-12">
					<div class="display-3 text-center">Edit {{$category}}</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-12">
					<form id="{{$action['name']}}Form" action="{{route($action['route'], ['id' => $pub['id']])}}" method="{{$action['method']}}" enctype="multipart/form-data">
						@csrf
						@method('patch')
					@foreach($fields as $field)
					@if($field['name'] == 'user_id')
						<label class="form-check-label" for="{{$field['name']}}">{{$field['title']}}@if($field['required'])<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span>@endif</label>
						<select name="{{$field['name']}}" class="form-control" id="{{$field['name']}}" autocomplete="off">
						@foreach($faculty as $author)
							<option value="{{$author->user_id}}" @if($pub['user_id'] == $author->user_id) selected @endif>{{$author->first_name ?? ''}} {{$author->middle_name ?? ''}} {{$author->last_name ?? ''}}</option>
						@endforeach
						</select>
					@elseif($field['type'] == 'file')
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01">{{$field['title']}}</span>
							</div>
							<div class="custom-file">
								<input type="file" name="{{$field['name']}}" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">{{$pub['filename']}}</label>
							</div>
						</div>
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