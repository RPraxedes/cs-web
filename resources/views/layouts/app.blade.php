<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield('title') - College of Science</title>
		
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
		<!-- Bootstrap -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- CSS -->
		<link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<!-- Scripts -->
		<!--<script src="{{ asset('js/app.js') }}" defer></script>-->

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
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAcademics" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Academics
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAcademics">
								<a class="dropdown-item {{request()->is('faculty')?'active':''}}" href="{{url('/faculty')}}">Faculty</a>
								<a class="dropdown-item {{request()->is('courses')?'active':''}}" href="{{url('/courses')}}">Courses</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link {{request()->is('research')?'active':''}}" href="{{url('/research')}}">Research</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{request()->is('publications')?'active':''}}" href="{{url('/publications')}}">Publications</a>
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
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									{{ Auth::user()->name }}
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{route('dash')}}">Dashboard</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
