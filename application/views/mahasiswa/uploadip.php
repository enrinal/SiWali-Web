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

  <title>Upload IP</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
 <!--  <link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/id-admin.css');?>">

</head>
<body>
  <?php $this->load->view('mahasiswa/topbar_mahasiswa'); ?>
  <div class="container-content">
    <?php $this->load->view('mahasiswa/sidebar_up-mahasiswa'); ?>
    <div class="row">
      <div class="col-md-6 col-md-offset-1">
        <h3>Upload IP</h3><br>
        <form action="<?php echo base_url(). 'mahasiswa/update_ip'; ?>" method="post">
          <div class="form-group">
            <select class="form-control form-control-lg" id="Semester" name="semester" placeholder="option">
              <option value="" disabled selected>Semester</option>
              <option value="semester_1">Semester 1</option>
              <option value="semester_2">Semester 2</option>
              <option value="semester_3">Semester 3</option>
              <option value="semester_4">Semester 4</option>
              <option value="semester_5">Semester 5</option>
              <option value="semester_6">Semester 6</option>
              <option value="semester_7">Semester 7</option>
              <option value="semester_8">Semester 8</option>
            </select>
          </div>
          <div class="form-group">
            <input type="number" class="form-control form-control-lg" name="ip" placeholder="IP">
          </div>
          <input class="btn btn-ctm" type="submit" value="Input">
        </form>
      </div>
    </div>
  </div>
<!-- <body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        Nested Row within Card Body
          <div class="col-xl-auto">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Upload IP</h1>
              </div>
              <form action="<?php echo base_url(). 'mahasiswa/update_ip'; ?>" method="post">
                <div class="form-group">
                    <select class="form-control form-control-lg" id="Semester" name="semester" placeholder="option">
                      <option value="" disabled selected>Semester</option>
                      <option value="semester_1">Semester 1</option>
                      <option value="semester_2">Semester 2</option>
                      <option value="semester_3">Semester 3</option>
                      <option value="semester_4">Semester 4</option>
                      <option value="semester_5">Semester 5</option>
                      <option value="semester_6">Semester 6</option>
                      <option value="semester_7">Semester 7</option>
                      <option value="semester_8">Semester 8</option>
                    </select>
                    </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-lg" name="ip" placeholder="IP">
                </div>
                  
                  <input class="btn btn-primary btn-user btn-block" type="submit" value="Input">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
 -->


  <!-- Bootstrap core JavaScript-->
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
