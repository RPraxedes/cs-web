@extends('layouts.app')

@section('title' , $pages->first()->title)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xl-12 display-4 title text-center">
				{{$pages->first()->title}}
			</div>
		</div>
		<div class="row col-md-11 justify-content-end">
			{!!$pages->first()->body!!}
		</div>
		<div class="row justify-content-md-center">
			@for ($i=1; $i<9; $i++)	<!--consists of total units and subjects per sem-->
			<div class="col-md-5 highlight">
				{!!$pages[$i]->body!!}
			</div>
			@endfor
		</div>
		@for ($i=9; $i<$pages->count(); $i++)	<!--contains list of subjects and retention policy (list @ 9, retention policy @ 10+)-->
		<div class="row">
			<div class="col-md-12 highlight">
				{!!$pages[$i]->body!!}
			</div>
		</div>
		@endfor
	</div>
@endsection