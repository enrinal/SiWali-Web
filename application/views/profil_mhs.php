<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>

<head>

<title>Profil</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">

<!-- Custom CSS -->
<style>
	body {
		padding-top: 70px;
		/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
	}
	.othertop{margin-top:10px;}
	</style>


</head>

<body>

<div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal">



<div class="left">
	<h2>Profile Mahasiswa</h2> 

</div> 
<hr>
	<div class="col-md-offset-4">
	<br>
	<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
</div>
<div>
	<br>
	<input type="file" class="text-center center-block file-upload">
  	<br><br>
</div>
<br>


<div class="row">
	<div class="form-group">
		<label class="col-md-4 control-label" for="Nama">Nama</label>  
		<div class="col-md-4">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-user"> </i>
				</div>
				<input id="Nama" name="Nama" type="text" placeholder="Nama" class="form-control input-md" disabled>
			</div>
		</div>
	</div>

	<div class="form-group">
	<label class="col-md-4 control-label" for="NIM)">NIM</label>  
		<div class="col-md-4">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-tag"> </i>
				</div>
				<input id="NIM" name="NIM" type="text" placeholder="NIM" class="form-control input-md" disabled>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label" for="Angkatan">Angkatan</label>  
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
					<i class="fa fa-th-list"> </i>
				</div>
				<input id="Angkatan" name="Angkatan" type="text" placeholder="Angkatan" class="form-control input-md" disabled>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label" for="Dosen Wali">Dosen Wali</label>  
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
					<i class="fa fa-female"></i>
					</i>
				</div>
				<input id="Dosen Wali" name="Dosen Wali" type="text" placeholder="Dosen Wali" class="form-control input-md" disabled>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label" for="Tempat Lahir">Tempat Lahir</label>  
			<div class="col-md-4">
				<div class="input-group">
					<div class="input-group-addon">
					<i class="fa fa-home">
					</i>
				</div>
				<input id="Tempat Lahir" name="Tempat Lahir" type="text" placeholder="Tempat Lahir" class="form-control input-md">
			</div>
		</div>
	</div>

<!-- Text input-->
	<div class="form-group">
		<label class="col-md-4 control-label" for="Tanggal Lahir">Tanggal Lahir</label>  
		<div class="col-md-4">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-birthday-cake"></i>
				</div>
				<input id="Tanggal  Lahir" name="Tanggal Lahir" type="text" placeholder="Tanggal LAhir" class="form-control input-md">
			</div>
		</div>
	</div>

<!-- Multiple Radios (inline) -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="Jenis Kelamin">Jenis Kelamin</label>
		<div class="col-md-4"> 
			<label class="radio-inline" for="Gender-0">
			<input type="radio" name="Jenis Kelamin" id="Gender-0" value="1" checked="checked">
			Laki-Laki </label>

			<label class="radio-inline" for="Gender-1">
			<input type="radio" name="Jenis Kelamin" id="Gender-1" value="2">
			Perempuan </label> 

		</div>
	</div>

<!-- Text input-->
	<div class="form-group">
		<label class="col-md-4 control-label" for="Wali">Nama Wali</label>  
		<div class="col-md-4">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-male"></i>
				</div>
				<input id="Wali" name="Wali" type="text" placeholder="Nama Wali" class="form-control input-md">
			</div>
		</div>
	</div>

<!-- Text input-->
	<div class="form-group">
		<label class="col-md-4 control-label" for="Nomor telepon">Nomor Telepon </label>  
		<div class="col-md-4">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-phone"></i>
				</div>
				<input id="Nomor telepon" name="Nomor telepon" type="text" placeholder="Nomor telepon" class="form-control input-md">
			</div>
			
		</div>
	</div>

<!-- Text input-->
	<div class="form-group">
		<label class="col-md-4 control-label" for="Email">Email</label>  
		<div class="col-md-4">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-envelope-o"></i>
				</div>
				<input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label" ></label>  
		<div class="col-md-4">
			<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Simpan</a>
		</div>
	</div>
</div>

	</form>
</div>

<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>