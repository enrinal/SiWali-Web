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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/topbar.css');?>">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

</head>
<body>
  <div class="container-base">
    <div class="container">
      <div class="row">
        <div class="col-md-1">
          <img src="<?php echo base_url('assets/css/image/itera.png')?>" class="logo">
        </div>
        <div class="col-md-4">
          <h3>Sistem Informasi Perwalian Teknik Geofisika</h3>
          <p>"Institut Teknologi Sumatera"</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-top">
    <nav class="navbar">
        <ul class="nav navbar-nav navbar-right">
          <!-- glyphicon glyphicon-user -->
          <li><a href=""><span class="glyphicon glyphicon-user"></span>Dosen</a></li>
          <li><a href="<?php echo base_url()?>Login/logout">Keluar<span class="glyphicon glyphicon-log-out"></span></a></li>
        </ul>
    </nav>
  </div>
  <!-- <nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('assets/css/image/itera.png')?>" class="logo">
      </a>
    </div>
  </div>
  </nav> -->
</body>
</html>
