@extends('layouts.app')

@section('title' , 'Profile')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row">
                <div class="display-4 title">Your Profile</div>
			</div>
			<div class="row">
				<form action="{{route('user.saveprofile')}}" class="col-md-6" method="post">
					@csrf
					<div class="card w-75">
						<div class="card-body">
							<h5 class="card-title">Position</h5>
							<p class="card-text">Are you part of the administration or the faculty?</p>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="position" id="radio1" value="admin" @if(isset($position) && $position=="admin") checked @endif>
								<label class="form-check-label" for="radio1">Administration</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="position" id="radio2" value="faculty" @if(isset($position) && $position=="faculty") checked @endif>
								<label class="form-check-label" for="radio2">Faculty</label>
							</div>
						</div>
					</div>
					<label class="form-check-label" for="profName">Profile Name</label>
					<input name="name" class="form-control" type="text" placeholder="Profile Name" id="profName" value="{{$name}}" required><br>
					
					<label class="form-check-label" for="emailAddress">E-mail address</label>
					<input name="email" class="form-control" type="text" placeholder="E-mail Address" id="emailAddress" value="{{$email}}" required><br>
					
					<button type="submit" class="btn btn-success">Save Changes</button>
				</form>
				<div class="col-md-6">
				<h4>Faculty Profile</h4>
				<form action="{{route('faculty.saveprofile')}}" method="post">
					@csrf
					<div class="form-row">
						<div class="col">
							<label class="form-check-label" for="fname">First Name</label>
							<input name="first_name" class="form-control" type="text" placeholder="First Name" id="fname" required><br>
						</div>
						<div class="col">
							<label class="form-check-label" for="mname">Middle Name</label>
							<input name="middle_name" class="form-control" type="text" placeholder="Middle Name" id="mname" required><br>
						</div>
						<div class="col">
							<label class="form-check-label" for="lname">Last Name</label>
							<input name="last_name" class="form-control" type="text" placeholder="Last Name" id="lname" required><br>
						</div>
					</div>

					<label class="form-check-label" for="facultyPosition">Faculty Position</label>
					<input name="faculty_position" class="form-control" type="text" placeholder="Faculty Position" id="facultyPosition" required><br>
					
					<label class="form-check-label" for="facultyDegree">Degree</label>
					<input name="degree" class="form-control" type="text" placeholder="Degree" id="facultyDegree" required><br>
					
					<label class="form-check-label" for="researchInterest">Research Interest/s</label>
					<input name="research_interest" class="form-control" type="text" placeholder="Topic/s (separated by commas)" id="researchInterest"><br>
					
					<label for="facultyStatus">Status</label>
					<select name=""class="form-control" id="facultyStatus">
					<option value=1>Active</option>
					<option value=2>On study leave</option>
					</select>
					<br>
					
					<button type="submit" class="btn btn-success">Save Changes</button>
				</form>
				</div>
			</div>
			<div class="row justify-content-center">
				<a class="btn btn-primary" href="{{route('faculty.page')}}" role="button">Go to Faculty Page</a>
			</div>
        </div>
    </div>
</div>
@endsection