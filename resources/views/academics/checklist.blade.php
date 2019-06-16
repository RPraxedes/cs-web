@extends('layouts.app')

@section('title' , $pages->first()->title)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xl-12 display-4 title text-center">
				{{$pages->first()->title}}
			</div>
		</div>
		<div class="row">
			@foreach($pages as $page)
			<div class="col-md-12 highlight" data-spy="scroll" data-target="#navbar-example3" data-offset="0">
				{!!$page->body!!}
			</div>
			@endforeach
			<!--<nav id="navbar-example3" class="navbar navbar-light bg-light col-md-2 float-right">
				<a class="navbar-brand" href="#">Checklist</a>
				<nav class="nav nav-pills flex-column">
					<a class="nav-link" href="#1st-1st">1st Yr., 1st Sem</a>
					<a class="nav-link" href="#1st-2nd">1st Yr., 2nd Sem</a>
					<a class="nav-link" href="#2nd-1st">2nd Yr., 1st Sem</a>
					<a class="nav-link" href="#2nd-2nd">2nd Yr., 2nd Sem</a>
					<a class="nav-link" href="#3rd-1st">3rd Yr., 1st Sem</a>
					<a class="nav-link" href="#3rd-2nd">3rd Yr., 2nd Sem</a>
					<a class="nav-link" href="#4th-1st">4th Yr., 1st Sem</a>
					<a class="nav-link" href="#4th-2nd">4th Yr., 2nd Sem</a>
				</nav>
			</nav>-->
		</div>
	</div>
@endsection