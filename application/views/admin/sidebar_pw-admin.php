<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sidebar.css');?>">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
  <div class="col-md-3 container-side">
    <div class="row">
      <div class="col-md-12">
        <div class="list-group">
          <a href="<?php echo base_url('admin');?>" class="list-group-item">
            <i class="fa fa-home sps"></i>Beranda
          </a>
          <a href="<?php echo base_url('admin/input_mahasiswa');?>" class="list-group-item">
            <i class="fa fa-users sps"></i>Input Data Mahasiswa
          </a>
          <a href="<?php echo base_url('admin/input_dosen');?>" class="list-group-item">
            <i class="fa fa-user sps"></i>Input Data Dosen
          </a>
          <a href="<?php echo base_url('admin/view_mahasiswa');?>" class="list-group-item">
            <i class="fa fa-user-graduate sps"></i>View Data Mahasiswa
          </a>
          <a href="<?php echo base_url('admin/view_dosen');?>" class="list-group-item">
            <i class="fa fa-user-tie sps"></i>View Data Dosen
          </a>
          <a href="<?php echo base_url('admin/ganti_password');?>" class="list-group-item active">
            <i class="fa fa-key sps"></i>Change User Password
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
