@extends('layouts.app')

@section('title', 'Faculty')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				Faculty
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="card col-2 no-padding">
				<img src="{{asset('assets/images/nao-banner.png')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="{{route('faculty.view', ['id' => 1])}}" class="btn btn-primary">More</a>
				</div>
			</div>
			<div class="card col-2 no-padding">
				<img src="{{asset('assets/images/nao-banner.png')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">More</a>
				</div>
			</div>
			<div class="card col-2 no-padding">
				<img src="{{asset('assets/images/nao-banner.jpg')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">More</a>
				</div>
			</div>
			<div class="card col-2 no-padding">
				<img src="{{asset('assets/images/nao-banner.png')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">More</a>
				</div>
			</div>
			<div class="card col-2 no-padding">
				<img src="{{asset('assets/images/nao-banner.png')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">More</a>
				</div>
			</div>
			<div class="card col-2 no-padding">
				<img src="{{asset('assets/images/nao-banner.png')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">More</a>
				</div>
			</div>
			<div class="card col-2 no-padding">
				<img src="{{asset('assets/images/nao-banner.png')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">More</a>
				</div>
			</div>
			<div class="card col-2 no-padding">
				<img src="{{asset('assets/images/nao-banner.png')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">More</a>
				</div>
			</div>
		</div>
	</div>
@endsection