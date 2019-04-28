<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Input Data Dosen</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
 <!--  <link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/id-admin.css');?>">

</head>
<body>
  <?php $this->load->view('admin/topbar_admin'); ?>
  <div class="container-content">
    <?php $this->load->view('admin/sidebar_pw-admin'); ?>
    <div class="row">
      <div class="col-md-6 col-md-offset-1">
        <h3>Ganti Password</h3><br>
        <form action="<?php echo base_url(). 'admin/change_password'; ?>" method="post">
          <div class="form-group">
            <input type="number" class="form-control form-control-lg" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="name" class="form-control form-control-lg" name="password" placeholder="Password">
          </div><br>
          <input class="btn btn-ctm" type="submit" value="Input">
        </form>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>


  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>


  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js');?>"></script>

  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>

  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js');?>"></script>


</body>

</html>
