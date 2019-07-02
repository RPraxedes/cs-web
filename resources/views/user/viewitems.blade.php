@extends('layouts.app')

@section('title' , 'Your Publications')

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row">
                <div class="display-4 title">Your Publications</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				@foreach($publications as $pub)
					<div class="card">
						<div class="card-body">
							<p class="card-text">{{$pub->author.' ('.\Carbon\Carbon::parse($pub->published_date)->year.').'}} <i>{{$pub->title}}</i>. {{$pub->journal}} Volume {{$pub->volume}}</p>
							<a href="{{url($pub->link)}}" class="card-link">Link</a>
						</div>
					</div>
				@endforeach
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPub"><img src="/open-iconic/svg/plus.svg"></button>

					<!-- Modal -->
					<div class="modal fade" id="addPub" tabindex="-1" role="dialog" aria-labelledby="addPub" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add a Publication</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form id="addPubForm" action="{{route('faculty.addpub')}}" method="post">
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
					<button type="submit" class="btn btn-success">Save Changes</button>
					<a role="button" href="{{route('faculty.publications')}}" class="btn btn-primary">Your Publications</a>
					<a role="button" href="{{route('faculty.conferences')}}" class="btn btn-primary">Your Conferences</a>
					<a role="button" href="{{route('faculty.projects')}}" class="btn btn-primary">Your Current Research Projects</a>
					<a role="button" href="{{route('faculty.others')}}" class="btn btn-primary">Your Other Achievements</a>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection