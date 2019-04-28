<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
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
          <a href="<?php echo base_url('dosen');?>" class="list-group-item">
            <i class="fa fa-home sps"></i>Beranda
          </a>
          <a href="<?php echo base_url('dosen/mahasiswa_wali');?>" class="list-group-item">
            <i class="fa fa-user-graduate sps"></i>Mahasiswa Perwalian
          </a>
          <a href="" class="list-group-item active">
            <i class="fa fa-user-shield sps"></i>Konsultasi
          </a>
          <a href="<?php echo base_url('dosen/upload_laporan');?>" class="list-group-item">
            <i class="fa fa-file-upload sps"></i>Upload Laporan
          </a>
          <a href="<?php echo base_url('dosen/profil');?>" class="list-group-item">
            <i class="fa fa-user sps"></i>Profil
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


