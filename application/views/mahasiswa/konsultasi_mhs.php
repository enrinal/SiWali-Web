<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Konsultasi</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/konsultasi.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body>
  <?php $this->load->view('mahasiswa/topbar_mahasiswa'); ?>
  <div class="container-content">
  	<?php $this->load->view('mahasiswa/sidebar_k-mhs'); ?>
  	<div class="row">
  		<div class="col-md-offset-4">
        <button class="btn btn-default">Open Ticket</button>
        <button class="btn btn-default">Close Ticket</button>
        <button class="btn btn-primary create">Create New Ticket</button>
        <div class="panel panel-default">
          <div class="no_ticket">
            <img src="<?php echo base_url('assets/css/image/ticket.png')?>"><br>
            <label>You don't have any ticket</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
