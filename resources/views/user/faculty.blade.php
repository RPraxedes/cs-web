@extends('layouts.app')

@section('title' , 'Profile')

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
			<div class="row">
                <div class="display-4 title">Faculty Profile</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="{{isset($faculty_info)?route('faculty.modify'):route('faculty.save')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-row">
							<div class="col">
								<label class="form-check-label" for="fname">First Name<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span></label>
								<input name="first_name" class="form-control" type="text" placeholder="First Name" id="fname" @if(isset($faculty_info)) value="{{$faculty_info->first_name}}" @endif required><br>
							</div>
							<div class="col">
								<label class="form-check-label" for="mname">Middle Name</label>
								<input name="middle_name" class="form-control" type="text" placeholder="Middle Name" id="mname" @if(isset($faculty_info)) value="{{$faculty_info->middle_name}}" @endif required><br>
							</div>
							<div class="col">
								<label class="form-check-label" for="lname">Last Name<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span></label>
								<input name="last_name" class="form-control" type="text" placeholder="Last Name" id="lname" @if(isset($faculty_info)) value="{{$faculty_info->last_name}}" @endif required><br>
							</div>
						</div>
						
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01">Profile image</span>
							</div>
							<div class="custom-file">
								<input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">@if(isset($faculty_info)) {{$faculty_info->profile_image}} @else Choose file (preferably portrait image) @endif </label>
							</div>
						</div>
						
					@if(isset($faculty_info->user_id))
						<input type="hidden" name="user_id" value="{{$faculty_info->user_id}}">
					@endif
						
						<label class="form-check-label" for="department">Department</label>
						<select name="dept_id" class="form-control" id="department" autocomplete="off" required>
							<option value="0"><span class="text-muted">Choose a department</span></option>
						@foreach($dept as $option)
							<option value={{$option->id}} {{isset($faculty_info) && $faculty_info->dept_id == $option->id?'selected':''}}>{{$option->title}}</option>
						@endforeach
						</select><br>
						
						<label class="form-check-label" for="facultyPosition">Faculty Position<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span></label>
						<input name="faculty_position" class="form-control" type="text" placeholder="Faculty Position" id="facultyPosition" @if(isset($faculty_info)) value="{{$faculty_info->position}}" @endif required><br>
						
						<label class="form-check-label" for="facultyBSDegree">B.S. Degree<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span></label>
						<input name="bs_degree" class="form-control" type="text" placeholder="Example: B.S. Math, cum laude, University of the Philippines, 2015" id="facultyBSDegree" @if(isset($faculty_info)) value="{{$faculty_info->bs_degree}}" @endif data-toggle="tooltip" data-placement="top" title="B.S. Degree, College or University, Year obtained" required><br>
						<label class="form-check-label" for="facultyMSDegree">M.S. Degree</label>
						<input name="ms_degree" class="form-control" type="text" placeholder="Example: M.S. Math, University of the Philippines, 2018" id="facultyMSDegree" @if(isset($faculty_info)) value="{{$faculty_info->ms_degree}}" @endif data-toggle="tooltip" data-placement="top" title="M.S. Degree, College or University, Year obtained"><br>
						<label class="form-check-label" for="facultyPhDDegree">Ph.D. Degree</label>
						<input name="phd_degree" class="form-control" type="text" placeholder="Example: Ph.D. Math, University of the Philippines, 2020" id="facultyPhDDegree" @if(isset($faculty_info)) value="{{$faculty_info->phd_degree}}" @endif  data-toggle="tooltip" data-placement="top" title="Ph.D. Degree, College or University, Year obtained"><br>
						
						<label class="form-check-label" for="researchInterest">Research Interest/s</label>
						<input name="research_interest" class="form-control" type="text" placeholder="Topic/s (separated by commas)" id="researchInterest" @if(isset($faculty_info)) value="{{$faculty_info->research_interest}}" @endif><br>
						
						<label class="form-check-label" for="contactInfo">Contact Information</label>
						<input name="contact" class="form-control" type="text" placeholder="Phone, Email" id="contactInfo" @if(isset($faculty_info)) value="{{$faculty_info->contact_info}}" @endif><br>
						
						<label class="form-check-label" for="facultyStatus">Status</label>
						<select name="status_id" class="form-control" id="facultyStatus" autocomplete="off">
						@foreach($status as $option)
							<option value={{$option->status_id}} {{isset($faculty_info) && $faculty_info->status_id == $option->status_id?'selected':''}}>{{$option->status}}</option>
						@endforeach
						</select>
						<br>
						
						<button type="submit" class="btn btn-success">Save Changes</button>
					@if(isset($faculty_info) && Auth::user()->position == 'faculty')
						<a role="button" href="{{route('pub.viewall')}}" class="btn btn-primary">Your Publications</a>
						<a role="button" href="{{route('conf.viewall')}}" class="btn btn-primary">Your Conferences</a>
						<a role="button" href="{{route('proj.viewall')}}" class="btn btn-primary">Your Current Research Projects</a>
						<a role="button" href="{{route('other.viewall')}}" class="btn btn-primary">Your Other Achievements</a>
					@endif
					</form>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection