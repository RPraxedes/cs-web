@extends('layouts.app')

@section('title' , 'Your '.$category.'s')

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
@endsection

@section('content')
<div class="container-fluid margin-top-80">
	<div class="row justify-content-center">
		<div class="col-md-10">
		<div class="display-4 title margin-top margin-bottom">{{$category}}s</div>
		@foreach (['danger', 'warning', 'success', 'info'] as $msg)
			@if(Session::has('alert-' . $msg))
			<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
			@endif
		@endforeach
		<ul class="nav nav-tabs nav-justified flex-column flex-sm-row margin-bottom">
			<li class="flex-sm-fill nav-item">
				<a class="text-sm-center nav-link @if($category == 'Publication')active @endif" href="{{route('faculty.pub.viewall')}}">Publications</a>
			</li>
			<li class="flex-sm-fill nav-item">
				<a class="text-sm-center nav-link @if($category == 'Conference')active @endif" href="{{route('faculty.conf.viewall')}}">Conferences</a>
			</li>
			<li class="flex-sm-fill nav-item">
				<a class="text-sm-center nav-link @if($category == 'Current Research Project')active @endif" href="{{route('faculty.proj.viewall')}}">Current Research Projects</a>
			</li>
			<li class="flex-sm-fill nav-item">
				<a class="text-sm-center nav-link @if($category == 'Other Achievement')active @endif" href="{{route('faculty.other.viewall')}}">Other Achievements</a>
			</li>
		</ul>
		</div>
	</div>
    <div class="row justify-content-center margin-bottom">
        <div class="col-md-9">
				@if($category == 'Other Achievement' && $publications->isEmpty())
				You currently have nothing written.

				@endif
				@foreach ($publications as $pub)
				<div class="card margin-top">
					<div class="card-body">
					@if ($category == 'Publication')
						<a href="{{url($pub->link ?? '')}}" class="card-link">{{$pub->author ?? ''}} ({{(\Carbon\Carbon::parse($pub->published_date)->year)}}). <i>{{$pub->title ?? ''}}</i>. {{$pub->journal ?? ''}} Volume {{$pub->volume ?? ''}}</a>
          @elseif ($category == 'Current Research Project')
						{{$pub->author ?? ''}}, <i>{{$pub->title ?? ''}}</i>. <br>Description: {{$pub->description ?? ''}} ( Status: @if($pub->status_id == 1) Ongoing @else Finished @endif) @if($pub->link)<a href="{{url($pub->link ?? '')}}" class="card-link">[link]</a>@endif
					@elseif ($category == 'Conference')
						<a href="{{url($pub->link ?? '')}}" class="card-link"><i>{{$pub->paper_title ?? ''}}</i>. {{$pub->author ?? ''}} {{\Carbon\Carbon::parse($pub->conference_date)->format('F d, Y')}}. {{$pub->conference_title ?? ''}}. {{$pub->venue ?? ''}}</a>
					@elseif ($category == 'Other Achievement')
						{!!$pub->content!!}
					@endif
						<div class="row justify-content-md-center" style="margin-top: 20px;">
						@foreach($obj_actions as $action)
							@if($action['name'] == 'Edit')
							<div class="col-md-3">
								<a href="{{route($routeprefix.'.'.$short_category.'.'.$action['route'], ['id' => $pub->id])}}" role="button" class="btn btn-block btn-{{$action['button']}}">{{$action['name']}}</a>
							</div>
							@elseif($action['name'] == 'Delete')
							<div class="col-md-3">
								<form class="form-inline" action="{{route($routeprefix.'.'.$short_category.'.'.$action['route'], ['id' => $pub->id])}}" method="{{$action['method']}}">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-block btn-{{$action['button']}}">
										<span class="oi oi-trash"></span> {{$action['name']}}
									</button>
								</form>
							</div>
							@elseif($action['name'] == 'Publish')
							<div class="col-md-3">
								<form class="form-inline" action="{{route($routeprefix.'.'.$short_category.'.'.$action['route'], ['id' => $pub->id])}}" method="{{$action['method']}}">
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
			@if($addExists)
			<div class="row justify-content-center">
				<div class="col-md-3">
					<a role="button" class="btn btn-{{$obj_actions[0]['button']}} btn-block margin-top margin-bottom" href="{{route($routeprefix.'.'.$short_category.'.'.$obj_actions[0]['route'])}}"><span class="oi oi-plus"></span> Add</a>
				</div>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection
