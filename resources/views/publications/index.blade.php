@extends('layouts.app')

@section('title', 'Publications')

@section('header')
<div class="row">
	<div class="col-xl-12 display-1 title text-center">
		Publications
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
						<p class="card-text"><a href="{{url($pub->link ?? '#')}}" class="card-link">{{$pub->author ?? ''.' ('.\Carbon\Carbon::parse($pub->published_date)->year ?? ''.').'}} <i>{{$pub->title ?? ''}}</i>. {{$pub->journal ?? ''}} Volume {{$pub->volume ?? ''}}</a></p>
						<br>
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