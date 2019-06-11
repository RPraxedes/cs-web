@extends('layouts.app')

@section('title' , 'SINSM')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xl-12 display-4 title text-center">
				{{$page[0]->title}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				{!!$page[0]->body!!}
			</div>
		</div>
	</div>
@endsection