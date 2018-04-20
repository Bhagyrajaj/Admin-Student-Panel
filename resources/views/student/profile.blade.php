<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 03:01:09 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="style/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="style/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="style/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="style/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="style/node_modules/dropify/dist/css/dropify.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="style/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="style/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
        <!-- partial -->
          <div class="row user-profile">
            <div class="col-lg-4 side-left d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
				  @foreach($pass as $vals)
                    <div class="card-body avatar">
                      <h4 class="card-title"></h4>
                      <img src="{{ url('profile')}}/{{ $vals->image }}" alt="">
                      <p class="name">{{ $vals->studentname }}</p>
                      <a class="d-block text-center text-dark" href="#">{{ $vals->email }}</a>
					  <a href="{{ url('student_logout') }}"><button class="btn btn-danger">Logout</button></a>
                    </div>
				@endforeach
				
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 side-right stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                    <h4 class="card-title mb-0">Details</h4>
                    <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Post</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar">Edit Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">View Profile</a>
                      </li>
                    </ul>
                  </div>
                  <div class="wrapper">
                    <hr>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">
					  
					  @foreach($job_details as $job_detail)
					   <div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Post Name :</label>
								<div class="col-12  col-sm-9 field">{{ $job_detail->post_name}}</div>
						</div>
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Qualification :</label>
								<div class="col-12  col-sm-9 field">{{ $job_detail->qualification}}</div>
						</div>
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Desgination :</label>
								<div class="col-12  col-sm-9 field">{{ $job_detail->des }}</div>
						</div>
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Company name :</label>
								<div class="col-12  col-sm-9 field">{{ $job_detail->company_name }}</div>
						</div>
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Email :</label>
								<div class="col-12  col-sm-9 field">{{ $job_detail->email }}</div>
						</div>
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Posted Date :</label>
								<div class="col-12  col-sm-9 field">{{ $job_detail->date }}</div>
						</div><center>
<p style="color:red">********************************************</p></center></br>
						@endforeach
                       <!-- -->
                      </div><!-- tab content ends -->
                      <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                        <div class="wrapper mb-5 mt-4">
                         
                        </div>
                        
						<form class="pt-4" action="{{ url('stu_update') }}" method="post"  enctype="multipart/form-data" >
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@foreach($pass as $vals)
                           <div class="form-group">
                            <label for="designation">Student Name</label>
                            <input type="text" class="form-control" name="studentname" value="{{ $vals->studentname }}" placeholder="Change designation">
							                 <p style="color:#F00;font-weight:800">{{ $errors->first('studentname')}}</p>
                          </div>
                          <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $vals->mobile }}" placeholder="Change mobile number">
							                 <p style="color:#F00;font-weight:800">{{ $errors->first('mobile')}}</p>
                          </div>
                          <div class="form-group">
                            <label for="email">DOB</label>
                            <input type="date" class="form-control" id="dob"  name="dob" value="{{ $vals->dob }}" placeholder="Change email address">
							                 <p style="color:#F00;font-weight:800">{{ $errors->first('dob')}}</p>
                          </div>
                          <div class="form-group">
                           <label for="mobile">Email</label>
                            <input type="text" class="form-control" id="mobile" name="email" value="{{ $vals->email }}" placeholder="Change mobile number">
							                 <p style="color:#F00;font-weight:800">{{ $errors->first('email')}}</p>
                          </div>
						   
						   <div class="form-group">
                           <label for="mobile">image</label>
						   <input type="hidden" class="form-control" id="mobile" name="image1" value="{{ $vals->image }}" placeholder="Change mobile number">
                            <input type="file" class="form-control" id="file" name="image" value="{{ $vals->image }}" placeholder="Change mobile number">
							               
							<img src="{{ url('profile')}}/{{ $vals->image }}" alt="" width="100px" height="100px">
						 </div>
						  <div class="form-group">
                          <!--  <label for="mobile">password</label>-->
                            <input type="hidden" class="form-control" id="password" name="password" value="{{ $vals->password }}" placeholder="Change mobile number">
                          </div>
						  <div class="form-group">
                           <!-- <label for="mobile">confirm password</label>-->
                            <input type="hidden" class="form-control" id="confirmpassword" name="confirmpassword" value="{{ $vals->confirmpassword }}" placeholder="Change mobile number">
                          </div>
						  
						   <div class="form-radio">
                    <label for="exampleInputEmail1">Gender</label></br>
                    <input type="radio" id="gender" name="gender" value="1" @if($vals->gender==1) checked @endif placeholder="Gender">&nbsp; Male &nbsp;
                    <input type="radio" id="gender" name="gender" value="2" @if($vals->gender==2) checked @endif placeholder="Gender">&nbsp; Female &nbsp;
                    <input type="radio" id="gender" name="gender" value="3" @if($vals->gender==3) checked @endif placeholder="Gender">&nbsp; Transgender
                  </div>
				 @endforeach
						  
                         
                          <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <button class="btn btn-outline-danger">Cancel</button>
                          </div>
                        </form>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
					  @foreach($pass as $vals)
                        <div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Studentname :</label>
								<div class="col-12  col-sm-9 field">{{ $vals->studentname }}</div>
						</div>
						
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Email :</label>
								<div class="col-12  col-sm-9 field">{{ $vals->email }}</div>
						</div>
						
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> DOB :</label>
								<div class="col-12  col-sm-9 field">{{ $vals->dob }}</div>
						</div>
						
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Mobile :</label>
								<div class="col-12  col-sm-9 field">{{ $vals->mobile }}</div>
						</div>
						
						<div class="form-group row">				
							<label for="text" class="col-12 col-sm-3" style="font-weight:bold;"> Gender :</label>
							<?php if($vals->gender==1){ 
							$gender="Male";}
							elseif($vals->gender==2){ 
							$gender="Female";}
							else{
								$gender="Transgender";
							}
							?>
								<div class="col-12  col-sm-9 field">{{ $gender }}</div>
						@endforeach
						</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:style/partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="style/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="style/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="style/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="style/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="style/node_modules/dropify/dist/js/dropify.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="style/js/off-canvas.js"></script>
  <script src="style/js/hoverable-collapse.js"></script>
  <script src="style/js/misc.js"></script>
  <script src="style/js/settings.js"></script>
  <script src="style/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="style/js/dropify.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 03:01:09 GMT -->
</html>
