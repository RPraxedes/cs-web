<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="{{asset('favicon.ico')}}" type="image/gif">

		<title>@yield('title') - College of Science</title>

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- JQuery -->
		<script src="{{asset('js/jquery/jquery-3.4.1.min.js')}}"></script>
		<!-- Bootstrap -->
		<script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
		<link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-reboot.min.css')}}">
		<link rel="stylesheet" href="{{asset('open-iconic/font/css/open-iconic-bootstrap.css')}}">
		<!-- CSS -->
		<link rel="stylesheet" href="{{asset('css/styles.css')}}">
		<!-- Lightbox 2 -->
		<link href="{{asset('js/lightbox2/css/lightbox.min.css')}}" rel="stylesheet">
		<script src="{{asset('js/lightbox2/js/lightbox.min.js')}}"></script>
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>
		@yield('head')	<!-- Additional HEAD -->
    </head>
    <body>
		@yield('header')
        <nav class="navbar navbar-dark navbar-expand-md">
			<div class="container">
				<a class="navbar-brand" href="{{url('/')}}" data-toggle="tooltip" data-placement="bottom" title="Home"><span class="oi oi-home animated fadeInDown delay-10"></span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left side of the navbar, Page Links -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle animated fadeInDown delay-1" href="#" id="navbarDropdownAcademics" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Academics
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAcademics">
								<a class="dropdown-item" href="{{route('checklist.get', ['name' => 'rgep'])}}">RGEP Programs</a>
								<a class="dropdown-item" href="{{route('courses')}}">Undergraduate Programs</a>
								<a class="dropdown-item" href="{{route('gradcourses')}}">Graduate Programs</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link {{request()->is('news')?'active':''}} animated fadeInDown delay-2" href="{{route('news')}}">News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{request()->is('faculty')?'active':''}} animated fadeInDown delay-3" href="{{route('faculty')}}">Departments</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{request()->is('research')?'active':''}} animated fadeInDown delay-4" href="{{route('research')}}">Research</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{request()->is('publications')?'active':''}} animated fadeInDown delay-5" href="{{route('publications')}}">Publications</a>
						</li>
            <li class="nav-item">
							<a class="nav-link {{request()->is('src')?'active':''}} animated fadeInDown delay-6" href="{{route('src')}}">SRC</a>
						</li>
            <li class="nav-item">
							<a class="nav-link {{request()->is('himnasyo-amianan')?'active':''}} animated fadeInDown delay-7" href="{{route('himnasyo_amianan')}}">Himnasyo Amianan</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{request()->is('sinsm')?'active':''}} animated fadeInDown delay-8" href="{{route('sinsm')}}">SINSM</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{request()->is('gallery')?'active':''}} animated fadeInDown delay-9" href="{{route('gallery')}}">Gallery</a>
						</li>
            <li class="nav-item">
              <a class="nav-link {{request()->is('about')?'active':''}} animated fadeInDown delay-10" href="{{route('about')}}">About</a>
            </li>
					</ul>
				<!-- Right side of the navbar, Authentication Links -->
					<ul class="navbar-nav ml-auto animated fadeInDown delay-10">
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
		<div id="blank-navbar" class="hidden"></div>
		@yield('content')

		<div class="container-fluid footer half-height margin-top-80">
			<div class="row">
				<div class="col-sm-6 float-left text-right">
					<h3><strong>UP Baguio Links</strong></h3>
					<ul class="list-unstyled">
						<li><a href="http://ilib.upb.edu.ph/" target="_blank">UP Baguio iLib</a></li>
						<li><a href="https://mainlib.upb.edu.ph/" target="_blank">UP Baguio Learning Resource Center</a></li>
						<li><a href="http://gpo.upb.edu.ph/" target="_blank">UP Baguio Graduate Program Office</a></li>
						<li><a href="https://sais.up.edu.ph/" target="_blank">SAIS Website</a></li>
						<li><a href="https://sfaonline.up.edu.ph/" target="_blank">SFA Online</a></li>
					</ul>
				</div>
				<div class="col-sm-4 float-right text-left">
					<h3><strong>University of the Philippines</strong></h3>
					<ul class="list-unstyled">
						<li><a href="https://www.upb.edu.ph/" target="_blank">UP Baguio</a></li>
            <li><a href="https://upcebu.edu.ph/" target="_blank">UP Cebu</a></li>
						<li><a href="https://upd.edu.ph/" target="_blank">UP Diliman</a></li>
						<li><a href="https://uplb.edu.ph/" target="_blank">UP Los Baños</a></li>
						<li><a href="https://www.upm.edu.ph/" target="_blank">UP Manila</a></li>
            <li><a href="https://www2.upmin.edu.ph/" target="_blank">UP Mindanao</a></li>
            <li><a href="https://www.upou.edu.ph/" target="_blank">UP Open University</a></li>
            <li><a href="https://www.up.edu.ph/" target="_blank">UP System</a></li>
						<li><a href="https://www.upv.edu.ph/" target="_blank">UP Visayas</a></li>
					</ul>
				</div>
			</div>
		</div>
    </body>
</html>
