@extends('layouts.app')

@section('title' , 'Your '.$category.'s')

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row">
                <div class="display-4 title">Your {{$category}}s</div>
			</div>
		@foreach (['danger', 'warning', 'success', 'info'] as $msg)
			@if(Session::has('alert-' . $msg))
			<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
			@endif
		@endforeach
			<div class="row">
				<div class="col-md-12">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#AddPub">Add</button>
				@foreach ($publications as $pub)
					<div class="card" style="margin-top: 10px;">
						<div class="card-body">
						@if ($category == 'Publication')
							<a href="{{url($pub->link)}}" class="card-link">{{$pub->author.' ('.\Carbon\Carbon::parse($pub->published_date)->year.').'}} <i>{{$pub->title}}</i>. {{$pub->journal}} Volume {{$pub->volume}}</a>
						@elseif ($category == 'Conference')
							<a href="{{url($pub->link)}}" class="card-link"><i>{{$pub->paper_title}}</i>. {{$pub->author}} {{\Carbon\Carbon::parse($pub->conference_date)->format('F d, Y')}}. {{$pub->conference_title}}. {{$pub->venue}}</a>	
						@endif
							<div class="row justify-content-md-center" style="margin-top: 20px;">
							@foreach($obj_actions as $action)
								@if($action['name'] == 'Edit')
								<div class="col-md-2">
									<button type="button" class="btn btn-block btn-{{$action['button']}}"data-toggle="modal" data-target="#{{$action['name']}}Pub">{{$action['name']}}</button>
								</div>
								<!-- Edit Modal -->
								<div class="modal fade" id="{{$action['name']}}Pub" tabindex="-1" role="dialog" aria-labelledby="{{$action['name']}}Pub" aria-hidden="true">
									<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">{{$action['name']}} {{$category}}</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form id="{{$action['name']}}PubForm" action="{{route($action['route'])}}" method="{{$action['method']}}">
													@csrf
												@foreach($fields as $field)
													<label class="form-check-label" for="{{$field['name']}}">{{$field['title']}}@if($field['required'])<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span>@endif</label>
													@if($category == 'Publication')
													<input type="{{$field['type']}}" name="{{$field['name']}}" id="{{$field['name']}}" class="form-control" placeholder="{{$field['placeholder']}}" value=@if($field['name'] == 'title') "{{$pub->title}}" @elseif($field['name'] == 'author') "{{$pub->author}}" @elseif($field['name'] == 'published_date') "{{$pub->published_date}}" @elseif($field['name'] == 'type') "{{$pub->type}}" @elseif($field['name'] == 'journal') "{{$pub->journal}}" @elseif($field['name'] == 'volume') "{{$pub->volume}}" @elseif($field['name'] == 'link') "{{$pub->link}}" @endif {{$field['required']}}>
													@elseif($category == 'Conference')
													<input type="{{$field['type']}}" name="{{$field['name']}}" id="{{$field['name']}}" class="form-control" placeholder="{{$field['placeholder']}}" value=@if($field['name'] == 'paper_title') "{{$pub->paper_title}}" @elseif($field['name'] == 'author') "{{$pub->author}}" @elseif($field['name'] == 'oonference_title') "{{$pub->conference_title}}"  @elseif($field['name'] == 'conference_date') "{{$pub->conference_date}}" @elseif($field['name'] == 'type') "{{$pub->type}}" @elseif($field['name'] == 'venue') "{{$pub->venue}}" @elseif($field['name'] == 'link') "{{$pub->link}}" @endif {{$field['required']}}>
													@endif
													<br>
												@endforeach
													<input type="hidden" name="id" value="{{$pub->id}}">
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-success" form="{{$action['name']}}PubForm">{{$action['name']}}</button>
											</div>
										</div>
									</div>
								</div>
								@else($action['name'] == 'Delete' || $action['name'] == 'Publish')
								<div class="col-md-2">
									<form class="form-inline" action="{{route($action['route'])}}" method="{{$action['method']}}">
										@csrf
										<input type="hidden" name="id" value="{{$pub->id}}">
										<button type="submit" class="btn btn-block btn-{{$action['button']}}" @if($action['name'] == 'Publish' && $pub->published_at != NULL) disabled @endif>{{$action['name']}}</button>
									</form>
								</div>
								@endif
							@endforeach
							</div>
						</div>
					</div>
				@endforeach
				</div>
			@if($category != 'Publication')
				<a role="button" href="{{route('faculty.publications')}}" class="btn btn-primary">Your Publications</a>
			@endif
			@if($category != 'Conference')
				<a role="button" href="{{route('faculty.conferences')}}" class="btn btn-primary">Your Conferences</a>
			@endif
				<a role="button" href="{{route('faculty.projects')}}" class="btn btn-primary @if($category == 'Current Research Project') disabled" aria-disabled="true" @endif">Your Current Research Projects</a>
				<a role="button" href="{{route('faculty.others')}}" class="btn btn-primary @if($category == 'Other Achievement') disabled" aria-disabled="true" @endif">Your Other Achievements</a>
			</div>
        </div>
    </div>
</div>

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
				<form id="addPubForm" action="{{route('faculty.add'.$short_category)}}" method="post">
					@csrf
				@foreach($fields as $field)
					<label class="form-check-label" for="{{$field['name']}}">{{$field['title']}}@if($field['required'])<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span>@endif</label>
					<input type="{{$field['type']}}" name="{{$field['name']}}" id="{{$field['name']}}" class="form-control" placeholder="{{$field['placeholder']}}" value="{{$field['value']}}" {{$field['required']}}>
					<br>
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

@endsection