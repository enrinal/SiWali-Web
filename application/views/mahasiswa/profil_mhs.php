<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>

<head>

	<title>Profile</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
<!-- Custom CSS -->

<style type="text/css">
	body {

		padding-top: 20px;
	}
	.othertop {margin-top: 10px}

	.container-content{
    background: #fff;
    box-shadow: 4px 4px 22px 0px rgba(0, 0, 0, 0.2);
    padding-top: 20px;
    margin-right: 0px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}

	#kiri
	{
	width:30%;
	height:100%;
	float:left;
	padding-left: 70px;
	}

	#kanan
	{
	width:60%;
	height:100%;
	float:right;
	}
	#left
	{
		padding-left: 70px;
	}


</style>
</head>

<body>
		<?php $this->load->view('Mahasiswa/topbar_mahasiswa'); ?>
		<div class="container-content">
		<?php $this->load->view('Mahasiswa/sidebar_p-mhs'); ?>
	<div class="container">
		<div class="colomn">
			<div class="col-md-8">
				<div class="form-horizontal">

					<div id="left">
					<div class="left">
						<h3>Profile Mahasiswa</h3>
						<hr>
						</div>

					</div>

					<div id="kiri">
						<div class="col-md-offset-3">
							<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
					</div>
					<div>
						<br>
						<input type="file" class="text-center left-block file-upload">
					</div>
					</div>

					<form class="g-py-15" name="updateProfile" role="form" data-toggle="validator" class="form-horizontal" action="<?php echo base_url()?>mahasiswa/update" method="POST" enctype="multipart/form-data">
						<div id="kanan">
							<div class="colomn">
								<div class="form-group">
									<label class="col-md-4 control-label" for="Nama">Nama</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user"> </i>
											</div>
											<input id="Nama" name="nama_mahasiswa" type="text" placeholder="Nama" value="<?php echo $query->nama_mahasiswa;?>" class="form-control input-md" disabled>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" for="NIM">NIM</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-tag"> </i>
											</div>
											<input id="NIM" name="nim_mahasiswa" type="text" placeholder="NIM"value="<?php echo $query->nim_mahasiswa;?>" class="form-control input-md" disabled>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" for="Angkatan">Angkatan</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-list"> </i>
											</div>
											<input id="Angkatan" name="angkatan" type="text" placeholder="Angkatan" value="<?php echo $query->angkatan;?>" class="form-control input-md" disabled>
										</div>
									</div>
								</div>


								<div class="form-group">
									<label class="col-md-4 control-label" for="Doswal">Dosen Wali</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-female"> </i>
											</div>
											<input id="Doswal" name="nip_dosen" type="text" placeholder="Dosen Wali" value="<?php echo $query->nip_dosen;?>"class="form-control input-md" disabled>
										</div>
									</div>
								</div>



							<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="Wali">Nama Wali</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-male"></i>
											</div>
											<input id="Wali" name="nama_wali" type="text" placeholder="Nama Wali" value="<?php echo $query->nama_wali;?>" class="form-control input-md">
										</div>
									</div>
								</div>

							<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="Nomor telepon">Nomor Telepon </label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-phone"></i>
											</div>
											<input id="Nomor telepon" name="no_telp_mahasiswa" type="text" placeholder="Nomor telepon" value="<?php echo $query->no_telp_mahasiswa;?>" class="form-control input-md">
										</div>

									</div>
								</div>

							<!-- Text input-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="Email">Email</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</div>
											<input id="Email" name="email" type="text" placeholder="Email" value="<?php echo $query->email;?>" class="form-control input-md">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label"></label>
									<div class="col-md-4">
										<button type="submit" class="btn btn-ctm">Simpan</button>
									</div>
								</div>







							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
