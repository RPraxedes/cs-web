@extends('layouts.app')

@section('title', 'Research')

@section('header')
<div class="row">
	<div class="col-xl-12 display-1 title text-center">
		Research
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
						<p class="card-text">{{$pub->author ?? ''}}. <i>{{$pub->title ?? ''}}</i>. Description: {{$pub->description ?? ''}} ( Status: @if($pub->status_id == 1) Ongoing @else Finished @endif)</p>
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