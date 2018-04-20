<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 02:58:43 GMT -->
<head>
<style>
.card .card-body1 {
  padding: 1.88rem 3.81rem;
    background-color: #c99595;
}
.bhagy {

    background: url("../images/auth/register_1.jpg");
}
</style>
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
  <link rel="stylesheet" href="style/node_modules/icheck/skins/all.css" />
  <link rel="stylesheet" href="style/node_modules/select2/dist/css/select2.min.css" />
  <link rel="stylesheet" href="style/node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="style/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="style/images/favicon.png" />
</head>

<body class="bhagy">
<center>
  <div class="container">
  
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card"  ">
                <div class="card-body1">
                  <h4 class="card-title">Basic form</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
<form class="pt-4" action="{{ url('post_submit') }}" method="post"  enctype="multipart/form-data" >
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="exampleInputName1" style="float:left">Post Name</label>
                      <input type="text" class="form-control" id="post_name" name="post_name" placeholder="Name">
                    </div>
					
                     <div class="form-group">
                      <label for="exampleInputName1" style="float:left">Desgination</label>
                      <input type="text" class="form-control" id="des" name="des" placeholder="Desgination">
                    </div> 
					
					<div class="form-group">
                      <label for="exampleInputName1" style="float:left">Qualification</label>
                      <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification">
                    </div> 
					
					<div class="form-group">
                      <label for="exampleInputName1" style="float:left">Company Name</label>
                      <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name">
                    </div> 
					
					<div class="form-group">
                      <label for="exampleInputName1" style="float:left">Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                   
                   
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
			
        
  </div>
  </center>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="style/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="style/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="style/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="style/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="style/node_modules/icheck/icheck.min.js"></script>
  <script src="style/node_modules/typeahead.js/dist/typeahead.bundle.min.js"></script>
  <script src="style/node_modules/select2/dist/js/select2.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="style/js/off-canvas.js"></script>
  <script src="style/js/hoverable-collapse.js"></script>
  <script src="style/js/misc.js"></script>
  <script src="style/js/settings.js"></script>
  <script src="style/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="style/js/file-upload.js"></script>
  <script src="style/js/iCheck.js"></script>
  <script src="style/js/typeahead.js"></script>
  <script src="style/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 02:58:54 GMT -->
</html>
