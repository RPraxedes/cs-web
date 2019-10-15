@extends('layouts.app')

@section('title', 'Current Research Projects')

@section('header')
<div class="row">
	<div class="col-xl-12 display-1 title text-center">
		Current Research Projects
	</div>
</div>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row justify-content-md-center">
			<div class="col-md-7">
			@foreach ($publications as $pub)
				<div class="card margin-top">
					<div class="card-body">
						<p class="card-text">{{$pub->author ?? ''}}, <i>{{$pub->title ?? ''}}</i>. <br>Description: {{$pub->description ?? ''}} ( Status: @if($pub->status_id == 1) Ongoing @else Finished @endif) @if($pub->link)<a href="{{url($pub->link ?? '')}}" class="card-link">[link]</a>@endif</p>
						@if($pub->link != NULL)<a href="{{url($pub->link ?? '')}}" class="card-link">[link]</a>@endif
					</div>
				</div>
			@endforeach
			</div>
		</div>
		<div class="row justify-content-md-center">
			{{$publications->render()}}
		</div>
	</div>
@endsection
