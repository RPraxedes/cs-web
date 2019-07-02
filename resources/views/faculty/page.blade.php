@extends('layouts.app')

@section('title', 'Faculty')

@section('header')
<div class="row">
	<div class="col-xl-12 display-1 title text-center">
		Faculty
	</div>
</div>
@endsection

@section('content')
<div class="body container">
	<div class="row align-content-md-left">
		<div class="col-md-4">
			<div class="card animated fadeInLeft">
				<img src="{{asset('assets/images/nao-banner.png')}}" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text">Position</p>
				</div>
			</div>
		</div>
		<div class="col-md-8 animated fadeInRight">
			<h2 class="display-4">Faculty Name</h2>
			<div class="card animated fadeInRight delay-3">
				<div class="card-body">
					<h5 class="card-title">Educational Attainment</h5>
					<p class="card-text">
						Some quick example text to build on the card title and make up the bulk of the card's content.
						Some quick example text to build on the card title and make up the bulk of the card's content.
						Some quick example text to build on the card title and make up the bulk of the card's content.
					</p>
				</div>
			</div>
			<div class="card animated fadeInRight delay-5">
				<div class="card-body">
					<h5 class="card-title">Contact Info.</h5>
					<p class="card-text">
						Some quick example text to build on the card title and make up the bulk of the card's content.
						Some quick example text to build on the card title and make up the bulk of the card's content.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<h3>Works</h3>
			<div class="accordion" id="Accord">
				<div class="card">
					<div class="card-header" id="pubHeading">
						<h2 class="mb-0">
							<button class="btn btn-link stretched-link" type="button" data-toggle="collapse" data-target="#Publications" aria-expanded="true" aria-controls="Publications">Publications</button>
						</h2>
					</div>

					<div id="Publications" class="collapse" aria-labelledby="pubHeading" data-parent="#Accord">
						<div class="card-body">
							<ul class="list">
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="researchHeading">
						<h2 class="mb-0">
							<button class="btn btn-link stretched-link" type="button" data-toggle="collapse" data-target="#Research" aria-expanded="false" aria-controls="Research">Research Disseminations</button>
						</h2>
					</div>
					<div id="Research" class="collapse" aria-labelledby="researchHeading" data-parent="#Accord">
						<div class="card-body">
							<ul class="list">
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="projHeading">
						<h2 class="mb-0">
							<button class="btn btn-link stretched-link" type="button" data-toggle="collapse" data-target="#Projects" aria-expanded="false" aria-controls="Projects">Current Research Projects</button>
						</h2>
					</div>
					<div id="Projects" class="collapse" aria-labelledby="projHeading" data-parent="#Accord">
						<div class="card-body">
							<ul class="list">
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
								<li>Some quick example text to build on the card title and make up the bulk of the card's content.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection