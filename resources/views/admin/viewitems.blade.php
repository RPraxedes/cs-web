@extends('layouts.app')

@section('title' , 'Your '.$category.'s')

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
@if($short_category == 'other')
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
@endif
@endsection

@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-10">
		<div class="display-4 title margin-top margin-bottom">{{$category}}s</div>
		@foreach (['danger', 'warning', 'success', 'info'] as $msg)
			@if(Session::has('alert-' . $msg))
			<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
			@endif
		@endforeach
		</div>
	</div>
    <div class="row justify-content-center">
        <div class="col-md-9">
				@foreach ($publications as $pub)
				<div class="card margin-top">
					<div class="card-body">
					@if ($category == 'Publication' || $category == 'Current Research Project')
						<a href="{{url($pub->link ?? '')}}" class="card-link">{{$pub->author ?? ''}} ({{(\Carbon\Carbon::parse($pub->published_date)->year)}}). <i>{{$pub->title ?? ''}}</i>. {{$pub->journal ?? ''}} Volume {{$pub->volume ?? ''}}</a>
					@elseif ($category == 'Conference')
						<a href="{{url($pub->link ?? '')}}" class="card-link"><i>{{$pub->paper_title ?? ''}}</i>. {{$pub->author ?? ''}} {{\Carbon\Carbon::parse($pub->conference_date)->format('F d, Y')}}. {{$pub->conference_title ?? ''}}. {{$pub->venue ?? ''}}</a>
					@elseif ($category == 'Other Achievement')
						<h4>{{$pub->faculty->first_name ?? ''}} {{$pub->faculty->middle_name ?? ''}} {{$pub->faculty->last_name ?? ''}}</h4>
						{!!$pub->content!!}
					@elseif($category == 'Alert')
						<div class="alert alert-{{$pub->style}} margin-top" role="alert">
							{!!$pub->body!!}
						</div>
						Created at: {{$pub->display_at}}
						<br>
						Destroy at: {{$pub->destroy_at ?? 'No expiry'}}
					@endif
						<div class="row justify-content-md-center" style="margin-top: 20px;">
						@foreach($obj_actions as $action)
							@if($action['name'] == 'Edit')
							<div class="col-md-3">
								<a href="{{route($action['route'], ['id' => $pub->id])}}" role="button" class="btn btn-block btn-{{$action['button']}}">{{$action['name']}}</a>
							</div>
							@elseif($action['name'] == 'Delete')
							<div class="col-md-3">
								<form class="form-inline" action="{{route($action['route'], ['id' => $pub->id])}}" method="{{$action['method']}}">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-block btn-{{$action['button']}}">
										<span class="oi oi-trash"></span> {{$action['name']}}
									</button>
								</form>
							</div>
							@elseif($action['name'] == 'Publish')
							<div class="col-md-3">
								<form class="form-inline" action="{{route($action['route'], ['id' => $pub->id])}}" method="{{$action['method']}}">
									@csrf
									@method('patch')
									<button type="submit" class="btn btn-block btn-{{$action['button']}}" @if($pub->published_at != NULL) disabled @endif>
										<span class="oi oi-task"></span> {{$action['name']}}@if($pub->published_at != NULL)ed @endif
									</button>
								</form>
							</div>
							@endif
						@endforeach
						</div>
					</div>
				</div>
				@endforeach
			<div class="row justify-content-center">
				<div class="col-md-3">
					<button type="button" class="btn btn-success btn-block margin-top margin-bottom" data-toggle="modal" data-target="#AddPub"><span class="oi oi-plus"></span> Add</button>
				</div>
			</div>
		</div>
	</div>
</div>

@if($category != 'Alert')
<!-- Add Modal -->
<div class="modal fade" id="AddPub" tabindex="-1" role="dialog" aria-labelledby="AddPub" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add a {{$category}}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="addPubForm" action="{{route($routeprefix.'.'.$short_category.'.add')}}" method="post">
					@csrf
				@foreach($fields as $field)
				@if($field['name'] == 'user_id')
					<label class="form-check-label" for="{{$field['name']}}">{{$field['title']}}@if($field['required'])<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span>@endif</label>
					<select name="{{$field['name']}}" class="form-control" id="{{$field['name']}}" autocomplete="off">
						<option>Select an Entry Author</option>
					@foreach($faculty as $author)
						<option value="{{$author->user_id}}">{{$author->first_name ?? ''}} {{$author->middle_name ?? ''}} {{$author->last_name ?? ''}}</option>
					@endforeach
					</select>
				@elseif($field['type'] == 'tiny')
					<textarea name="{{$field['name']}}" id="tinytextarea" class="w-100" placeholder="{{$field['placeholder']}}"></textarea><br>
				@else
					<label class="form-check-label" for="{{$field['name']}}">{{$field['title']}}@if($field['required'])<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span>@endif</label>
					<input type="{{$field['type']}}" name="{{$field['name']}}" id="{{$field['name']}}" class="form-control" placeholder="{{$field['placeholder']}}" value="{{$field['value']}}" {{$field['required']}}>
					<br>
				@endif
				@endforeach
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-success" form="addPubForm">Add</button>
			</div>
		</div>
	</div>
</div>
@else
<!-- Alert Modal -->
<div class="modal fade" id="AddPub" tabindex="-1" role="dialog" aria-labelledby="alertModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="alertModalLongTitle">Create an Alert</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('admin.alert.add')}}" method="post">
					@csrf
					<label class="form-check-label" for="alertBody">Alert Body</label>
					<input name="alert_body" class="form-control" type="text" placeholder="What do you urgently want to say? (HTML tags allowed)" id="alertBody" required><br>
					<label for="selectStyle">Select Alert Style</label>
					<select class="form-control" name="alert_style" id="selectStyle">
						<option value="primary" class="text-primary">Primary</option>
						<option value="secondary" class="text-secondary">Secondary</option>
						<option value="success" class="text-success">Success</option>
						<option value="danger" class="text-danger">Danger</option>
						<option value="warning" class="text-warning">Warning</option>
						<option value="info" class="text-info">Info</option>
					</select><br>
					<div class="form-check">
						<input type="checkbox" name="startNow" class="form-check-input" id="Start" value=true>
						<label class="form-check-label" for="Start">Start alert now</label>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="form-check-label" for="alertStartDate">Date Alert Starts</label>
							<input name="start_date" class="form-control start-input" type="date" id="alertStartDate" required><br>
						</div>
						<div class="col">
							<label class="form-check-label" for="alertStartTime">Time Alert Starts</label>
							<input name="start_time" class="form-control start-input" type="time" id="alertStartTime" required><br>
						</div>
					</div>
					<div class="form-check">
						<input type="checkbox" name="endNever" class="form-check-input" id="End" value=true>
						<label class="form-check-label" for="End">Manually end alert</label>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="form-check-label" for="alertEndDate">Date Alert End</label>
							<input name="end_date" class="form-control end-input" type="date" id="alertEndDate" required><br>
						</div>
						<div class="col">
							<label class="form-check-label" for="alertEndTime">Time Alert Ends</label>
							<input name="end_time" class="form-control end-input" type="time" id="alertEndTime" required><br>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endif
@endsection