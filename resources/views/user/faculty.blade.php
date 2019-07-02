@extends('layouts.app')

@section('title' , 'Profile')

@section('head')
<script src="{{ asset('js/user.js') }}"></script>
<!-- TinyMCE -->
<script src="{{asset('js/tinymce/tinymce.min.js')}}" crossorigin="anonymous"></script>
<script>
	tinymce.init({
		selector: '#tinytextarea',
		plugins: ["placeholder", "autosave", "image", "table", "code"],
		height: '600px',
		menubar: "file edit view insert format table",
		toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
		autosave_restore_when_empty: true,
		table_advtab: true,
		table_default_attributes: {
			class: 'table table-striped'
		},
		image_advtab: true,
		/* Automatic Image Upload (wip)
		image_uploadtab: true,
		images_upload_url: true,
		*/
	});
</script>
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
								<input name="first_name" class="form-control" type="text" placeholder="First Name" id="fname" {{isset($faculty_info)?'value='.$faculty_info->value('first_name'):''}} required><br>
							</div>
							<div class="col">
								<label class="form-check-label" for="mname">Middle Name</label>
								<input name="middle_name" class="form-control" type="text" placeholder="Middle Name" id="mname" {{isset($faculty_info)?'value='.$faculty_info->value('middle_name'):''}} required><br>
							</div>
							<div class="col">
								<label class="form-check-label" for="lname">Last Name<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span></label>
								<input name="last_name" class="form-control" type="text" placeholder="Last Name" id="lname" {{isset($faculty_info)?'value='.$faculty_info->value('last_name'):''}} required><br>
							</div>
						</div>
						
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01">Profile image</span>
							</div>
							<div class="custom-file">
								<input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">{{isset($faculty_info)?$faculty_info->value('profile_image'):'Choose File'}} </label>
							</div>
						</div>

						<label class="form-check-label" for="facultyPosition">Faculty Position<span class="text-danger" data-toggle="tooltip" data-placement="top" title="Required">*</span></label>
						<input name="faculty_position" class="form-control" type="text" placeholder="Faculty Position" id="facultyPosition" {{isset($faculty_info)?'value='.$faculty_info->value('position'):''}} required><br>
						
						<label class="form-check-label" for="facultyBSDegree">B.S. Degree</label>
						<input name="bs_degree" class="form-control" type="text" placeholder="Example: B.S. Math, cum laude, University of the Philippines, 2015" id="facultyBSDegree" {{isset($faculty_info)?'value='.$faculty_info->value('bs_degree'):''}} data-toggle="tooltip" data-placement="top" title="B.S. Degree, College or University, Year obtained"><br>
						<label class="form-check-label" for="facultyMSDegree">M.S. Degree</label>
						<input name="ms_degree" class="form-control" type="text" placeholder="Example: M.S. Math, University of the Philippines, 2018" id="facultyMSDegree" {{isset($faculty_info)?'value='.$faculty_info->value('ms_degree'):''}} data-toggle="tooltip" data-placement="top" title="M.S. Degree, College or University, Year obtained"><br>
						<label class="form-check-label" for="facultyPhDDegree">Ph.D. Degree</label>
						<input name="phd_degree" class="form-control" type="text" placeholder="Example: Ph.D. Math, University of the Philippines, 2020" id="facultyPhDDegree" {{isset($faculty_info)?'value='.$faculty_info->value('phd_degree'):''}}  data-toggle="tooltip" data-placement="top" title="Ph.D. Degree, College or University, Year obtained"><br>
						
						<label class="form-check-label" for="researchInterest">Research Interest/s</label>
						<input name="research_interest" class="form-control" type="text" placeholder="Topic/s (separated by commas)" id="researchInterest" {{isset($faculty_info)?'value='.$faculty_info->value('research_interest'):''}} ><br>
						
						<label class="form-check-label" for="contactInfo">Contact Information</label>
						<input name="contact" class="form-control" type="text" placeholder="Phone, Email" id="contactInfo" {{isset($faculty_info)?'value='.$faculty_info->value('contact_info'):''}}><br>
						
						<label for="facultyStatus">Status</label>
						<select name="status_id" class="form-control" id="facultyStatus" autocomplete="off">
						@foreach($status as $option)
							<option value={{$option->id}} {{isset($faculty_info) && $faculty_info->value('status_id') == $option->id?'selected':''}}>{{$option->status}}</option>
						@endforeach
						</select>
						<br>
						
						<button type="submit" class="btn btn-success">Save Changes</button>
					</form>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection