<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 03:00:33 GMT -->
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
  <link rel="stylesheet" href="style/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="style/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="style/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth register-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <center><h2>Register</h2></center>
                <h4 class="font-weight-light"></h4>
                <form class="pt-4" action="{{ url('stu_reg_submit') }}" method="post"  enctype="multipart/form-data" >
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
				  <div class="form-group">
                   
                    <input type="text" class="form-control" id="studentname" name="studentname" value="{{ old('studentname')}}" placeholder="Student Name"> 
					<p style="color:#F00;font-weight:800">{{ $errors->first('studentname')}}</p>
                  </div>
				  
				   <div class="form-group">
                    
                    <input type="email" class="form-control" id="email" name="email" onchange="check_email();" value="{{ old('email')}}" placeholder="Email">
					<p  id="email_error"
					style="color:#F00;font-weight:800">{{ $errors->first('email')}}</p>
                   </div>
				   
				   <div class="form-group">
				  <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob')}}" placeholder="DOB">
				  <p style="color:#F00;font-weight:800">{{ $errors->first('dob')}}</p>
                  </div>
				  
				  <div class="form-radio">
                    <label for="exampleInputEmail1">Gender</label></br>
                    <input type="radio" id="gender" name="gender" value="1" placeholder="Gender" checked>&nbsp; Male &nbsp;
                    <input type="radio" id="gender" name="gender" value="2" placeholder="Gender">&nbsp; Female &nbsp;
                    <input type="radio" id="gender" name="gender" value="3" placeholder="Gender">&nbsp; Transgender
                  </div>
				  
				   <div class="form-group">
                    
                    <input type="text" class="form-control" id="mobile" value="{{ old('mobile')}}" name="mobile" placeholder="Mobile">
					
					<p id="mobile_error" style="color:#F00;font-weight:800" >{{ $errors->first('mobile')}}</p>
                  </div>
				  
                  
				  <div class="form-group">

                    <input type="password" class="form-control" id="password"  value="{{ old('password')}}" name="password" placeholder="Password">
					<p style="color:#F00;font-weight:800">{{ $errors->first('password')}}</p>
                  </div>
            
				 <div class="form-group">
                   
                    <input type="password" class="form-control" id="confirmpassword" value="{{ old('confirmpassword')}}" name="confirmpassword" placeholder="Confirm password">
                 <p style="color:#F00;font-weight:800">{{ $errors->first('confirmpassword')}}</p>
				 </div>
				 
				  <div class="form-group">

                    <input type="file" class="form-control" id="file"  value="{{ old('file')}}" name="image" placeholder="Password">
					<p style="color:#F00;font-weight:800">{{ $errors->first('file')}}</p>
                  </div>
                
				<div class="mt-5">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium" >Register</button>
                  </div>
                  <div class="mt-2 w-75 mx-auto">
                    <div class="form-check form-check-flat">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        I accept terms and conditions
                      </label>
                    </div>
                  </div>
                  <div class="mt-2 text-center">
                    <a href="{{ url('student_login') }}" class="auth-link text-black">Already have an account? <span class="font-weight-medium">Sign in</p></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
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
  <!-- inject:js -->
  <script src="style/js/off-canvas.js"></script>
  <script src="style/js/hoverable-collapse.js"></script>
  <script src="style/js/misc.js"></script>
  <script src="style/js/settings.js"></script>
  <script src="style/js/todolist.js"></script>
  <!-- endinject -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

 <script>
         $('#mobile').keypress(function (e){
		if(e.which!=8 && e.which!=0 && e.which!=13 && (e.which<48 || e.which>57)){
		    $('#mobile').css('background', '1px solid red'); 
			$('#mobile_error').html('Numbers Only Allowed');
			$('#mobile').focus();
			return false;
		}else{			
            $('#mobile').css('border', ''); 
			$('#mobile_error').html('');	        
		}
    });
	function check_email(){
	var email_id = $('#email').val();
	//alert(email_id);
	$.ajax({
		type: 'get',
		data: 'email_id='+email_id,
		url: '<?php echo url('check_email'); ?>',
		success: function(responseText){ 
if(responseText==1){  
				$("#email").css('border', '1px solid red'); 
				$('#email_error').html("This Email  Already Exist.");	
				$("#email").focus();
				return false;				   
			}else if(responseText==0){
			   // $("#exist").val("0");
				$("#email").css('border', '');
				$('#email_error').html("");	
			}
		}		
	});	
}
			</script>
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 03:00:33 GMT -->
</html>
