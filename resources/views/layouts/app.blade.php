<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield('title') - College of Science</title>
		
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!-- CSS -->
		<link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
		<!-- Navbar -->
        <nav class="navbar navbar-light shadow-sm navbar-expand-md bg-white">
			<div class="container">
			<a class="navbar-brand" href="{{url('/')}}">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left side of the navbar, Page Links -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link {{request()->is('academics')?'active':''}}" href="{{url('/about')}}">Academics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{request()->is('research')?'active':''}}" href="{{url('/about')}}">Research</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{request()->is('publications')?'active':''}}" href="{{url('/about')}}">Publications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{request()->is('sinsm')?'active':''}}" href="{{url('/sinsm')}}">SINSM</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{request()->is('about')?'active':''}}" href="{{url('/about')}}">About Us</a>
					</li>
				</ul>
			<!-- Right side of the navbar, Authentication Links -->
				<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
					</ul>
				</div>
			</div>
		</nav>
		
		<main>
			@yield('content')
		</main>
		
		<div class="container-fluid footer half-height">
			<div class="row">
				<div class="col-sm-6 float-left text-right">
					<h3><strong>UPB Links</strong></h3>
					<ul class="list-unstyled">
						<li>UPB iLib</li>
						<li>UPB Learning Resource Center</li>
						<li>UPB Graduate Program Office</li>
						<li>SAIS Website</li>
						<li>SFA Online</li>
					</ul>
				</div>
				<div class="col-sm-6 float-right text-left">
					<h3><strong>University of the Philippines</strong></h3>
					<ul class="list-unstyled">
						<li>UP Baguio</li>
						<li>UP Diliman</li>
						<li>UP Los Baños</li>
					</ul>
				</div>
			</div>
		</div>
		
    </body>
	<script>
		$(function () {
			$('[data-toggle="popover"]').popover()
		})
	</script>
</html>
