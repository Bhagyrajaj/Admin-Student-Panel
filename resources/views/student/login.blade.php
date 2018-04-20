<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 03:00:33 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Victory Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="style/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="style/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="style/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="style/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
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
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-full-bg">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-dark text-left p-5">
                <h2>Login</h2>
                <h4 class="font-weight-light"></h4>
                 <form class="pt-5" action="{{ url('stu_login_check') }}" method="post">
				@if(session('msg'))
				<p style="color:#F00;font-weight:800">{{ session('msg') }}</p>
			@endif
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                    <input type="email" class="form-control" id="studentname" name="studentname" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                  <div class="mt-5">
                    <button type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium" >Login</button>
                  </div>
                  <div class="mt-3 text-center">
                    <a href="#" class="auth-link text-white">Forgot password?</a>
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
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 03:00:33 GMT -->
</html>
