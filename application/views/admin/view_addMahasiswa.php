<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SiWali</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet">

</head>
<body id="page-top">
  <div class="container">
  <div class="card-body">
  <div class="row">
    <div class="col-lg-7">
      <div class="p-5">
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
        </div>
        <form class="user">
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="col-sm-6">
              <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
            </div>
          </div>
          <a href="login.html" class="btn btn-primary btn-user btn-block">
            Register Account
          </a>
      </div>
    </div>
    </div>
    </div>
  </div>

  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js');?>"></script>
</body>
</html>
