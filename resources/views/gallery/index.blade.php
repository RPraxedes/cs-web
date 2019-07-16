@extends('layouts.app')

@section('title' , 'Gallery')

@section('header')
<div class="row">
	<div class="col-xl-12 display-1 title text-center margin-top margin-bottom">
		Gallery
	</div>
</div>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-10">
		@for($i = 0; $i < count($images); $i++)
			<img src="{{asset($images[$i])}}" alt="..." class="col-md-3 img-thumbnail" style="object-fit: cover;">
		@endfor
		</div>
	</div>
</div>
@endsection