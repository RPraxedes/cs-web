@extends('layouts.app')

@section('title' , 'Home')

@section('content')
<!-- Title Section-->
<div class="container-fluid col-xl-12 bg-image">
	<div class="display-1">
		<span class="text-center title-text animated fadeInDown">College of Science</span>
	</div>
	<div class="crop-height flip">
		<img src="{{asset('assets/images/UPBaguio-El-blurred.png')}}" class="d-block w-100 titleBackground flip" alt="UPB Oblation">
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<h1 class="display-4">News</h1>
	</div>
		<!-- News and Announcements Section -->	
	<a href ="{{route('news')}}" role="button" class="btn btn-primary">Show All News</a>
<!-- Research and Publications Section-->
</div>
@endsection