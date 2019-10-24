@extends('layouts.app')

@section('title' , 'Gallery')

@section('header')
<div class="row">
	<div class="col-xl-12 display-4 title header text-center">
		Gallery
	</div>
</div>
@endsection

@section('content')
<div class="container-fluid margin-top-80">
	<div class="row justify-content-center margin-top margin-bottom">
		@foreach($images as $image)
			<div class="col-md-3">
				<a href="{{asset('images/'.$image->filename)}}" data-lightbox="gallery" data-title="{{$image->caption}}" data-alt="{{$image->alt}}"><img src="{{asset('images/'.$image->filename)}}" class="img-thumbnail" style="object-fit: cover; width: auto;" alt="{{$image->alt}}"></a>
			</div>
		@endforeach
	</div>
	<div class="row justify-content-md-center margin-top margin-bottom">
		{{$images->render()}}
	</div>
</div>
@endsection
