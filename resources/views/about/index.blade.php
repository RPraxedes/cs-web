@extends('layouts.app')

@section('title', 'About Us')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				The College of Science
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center">
				<img src="{{asset('assets/images/upbcs-logo.png')}}">
			</div>
			<div class="col-md-8">
				<div class="text-justify">
					<p>
					The College of Science was established in December 2002 when the University of the Philippines Baguio became the 7th constituent university of the UP System. Evolving from the then Department of Natural Sciences and Mathematics, the College continues to take the lead in upgrading Science and Mathematics education and research in Northern Luzon.

					The College comprises three departments, the Department of Biology, Department of Mathematics and Computer Science, and the Department of Physical Sciences. The Human Kinetics Program, which takes care of the Physical Education and Sports programs of UP Baguio, is also part of the College of Science.

					The College offers four undergraduate programs, namely, BS Biology, BS Mathematics, BS Computer Science and BS Physics, and one graduate program, MS Mathematics. All these academic programs prepare students for a career in education, research, or post-graduate studies. These academic programs are regularly reviewed and upgraded to address the developments of the times. In 1998, the College of Science was designated by the Commission on Higher Education as Centers of Development in Biology, Mathematics and Physics.
					</p>
					<button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="left" data-content="cs.upbaguio@up.edu.ph">
						E-mail
					</button>
					<button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-content="(074) XXX XXXX">
						Landline
					</button>
				</div>
			</div>
		</div>
	</div>
@endsection