<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/prfl_mhs.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

</head>
<body>
	<?php $this->load->view('mahasiswa/topbar_mahasiswa'); ?>
		<div class="container-content">
		<?php $this->load->view('mahasiswa/sidebar_p-mhs'); ?>
		<div class="row">
  		<div class="col-md-offset-4">
  			<div class="col-md-11">
  				<h3>Profil Mahasiswa</h3><hr>
  			</div>
				<form class="g-py-15" name="updateProfile" role="form" data-toggle="validator" class="form-horizontal" action="<?php echo base_url()?>mahasiswa/update" method="POST" enctype="multipart/form-data">
  				<div class="col-sm-11 form-group">


  					<label class="col-sm-2 text-left">Nama</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-user"> </i>
  							</div>
  							<input type="text" name="nama_mahasiswa" class="form-control" value="<?php echo $query->nama_mahasiswa;?>"placeholder="Nama" disabled>
  						</div>
  					</div><br>

  					<label class="col-sm-2 text-left">NIM</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-tag"> </i>
  							</div>
  							<input type="text" name="nim_mahasiswa" class="form-control" value="<?php echo $query->nim_mahasiswa;?>"placeholder="NIM" disabled>
  						</div>
  					</div><br>

  					<label class="col-sm-2 text-left">Angkatan</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-list"> </i>
  							</div>
  							<input type="text" name="angkatan" class="form-control" value="<?php echo $query->angkatan;?>"placeholder="Angkatan" disabled>
  						</div>
  					</div><br>

  					<label class="col-sm-2 col-sm-offset-4 text-left">Dosen Wali</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-female"> </i>
  							</div>
  							<input type="text" class="form-control" value="<?php echo $query->nama_dosen;?>"placeholder="" disabled>
  						</div>
  					</div><br>

						<label class="col-sm-2 text-left">Nama Wali</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-user"> </i>
  							</div>
  							<input type="text" name="nama_wali" class="form-control" value="<?php echo $query->nama_wali;?>"placeholder="Nama Wali" >
  						</div>
  					</div><br>

						<label class="col-sm-2 text-left">No Telp Wali</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-phone"> </i>
  							</div>
  							<input type="number" name="no_telp_wali" class="form-control" value="<?php echo $query->no_telp_wali;?>"placeholder="No Telp Wali" >
  						</div>
  					</div><br>

						<label class="col-sm-2  text-left">Email</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-envelope"> </i>
  							</div>
  							<input type="text" name="email_mahasiswa" class="form-control" value="<?php echo $query->email_mahasiswa ;?>"placeholder="Email" >
  						</div>
  					</div><br>
						<div class="col-sm-offset-11">
							<button type="submit" class="btn btn-ctm">Simpan</button>
						</div>
			</div>
			</form>
		</div>
	</div>
	<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
