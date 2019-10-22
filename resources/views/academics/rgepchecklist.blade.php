@extends('layouts.app')

@section('title' , $pages->first()->title)

@section('head')
	@if($position == 'admin')
		<script src="{{ asset('js/user.js') }}"></script>
	@endif
@endsection

@section('header')
<div class="row">
	<div class="col-xl-12 display-4 title header text-center">
		{{$pages->first()->title}}
	</div>
</div>
@endsection

@section('content')
	<div class="container">
		<div class="row justify-content-md-center margin-top">
      @foreach($pages as $page)
  			<div class="col-md-12">
  				{!!$page->body!!}
  			@if($position == 'admin')
  				<form action="{{route('checklist.edit', ['id' => $pages->first()->id])}}" method="post">
  					@csrf
  					<button type="submit" class="btn btn-secondary btn-sm edit-button float-right">Edit Section</a>
  				</form>
  			@endif
  			</div>
      @endforeach
		</div>
	</div>
@endsection
