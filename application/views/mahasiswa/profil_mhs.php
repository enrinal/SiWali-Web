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
	<?php $this->load->view('Mahasiswa/topbar_mahasiswa'); ?>
		<div class="container-content">
		<?php $this->load->view('Mahasiswa/sidebar_p-mhs'); ?>
		<div class="row">
  		<div class="col-md-offset-4">
  			<div class="col-md-11">
  				<h3>Profil Mahasiswa</h3><hr>
  			</div>
  			<form>
  				<div class="col-sm-11 form-group">
  					<div class="col-sm-4">
  						<img src="<?php echo base_url('assets/css/image/avatar.png')?>" class="avatar img-circle img-thumbnail">
  						<br> <br>

  						<input class="up-file" type="file">
  					</div>

  					<label class="col-sm-2 text-left">Nama</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-user"> </i>
  							</div>
  							<input type="text" class="form-control" placeholder="Nama" disabled>
  						</div>
  					</div><br>

  					<label class="col-sm-2 text-left">NIM</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-tag"> </i>
  							</div>
  							<input type="text" class="form-control" placeholder="NIM" disabled>
  						</div>
  					</div><br>

  					<label class="col-sm-2 text-left">Angkatan</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-list"> </i>
  							</div>
  							<input type="text" class="form-control" placeholder="Angkatan" disabled>
  						</div>
  					</div><br>

  					<label class="col-sm-2 col-sm-offset-4 text-left">Dosen Wali</label>
  					<label class="col-sm-1 text-right"></label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-female"> </i>
  							</div>
  							<input type="text" class="form-control" placeholder="Dosen Wali" disabled>
  						</div>
  					</div><br>

  					<div class="form-group">
					<label class="col-sm-2 col-sm-offset-4 text-left">Tempat Lahir</label>
  					<label class="col-sm-1 text-right"></label>
						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-home"> </i>
  							</div>
  							<input type="text" class="form-control" placeholder="Tempat Lahir">
  						</div>
  					</div>

  					<div class="form-group">
  						<label class="col-sm-2 col-sm-offset-4 text-left">Tanggal Lahir</label>
  						<label class="col-sm-1 text-right"></label>
  						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-birthday-cake"></i>
							</div>
							<input id="Tanggal  Lahir" name="Tanggal Lahir" type="text" placeholder="Tanggal Lahir" class="form-control input-md">
						</div>
					</div>

					<!-- Multiple Radios (inline) -->
					<div class="form-group">
  						<label class="col-sm-3 col-sm-offset-4 text-left">Jenis Kelamin</label>
  						<label class="col-sm-0 text-right"></label>
							<label class="radio-inline" for="Gender-0">
							<input type="radio" name="Jenis Kelamin" id="Gender-0" value="1" checked="checked">
							Laki-Laki </label>

							<label class="radio-inline" for="Gender-1">
							<input type="radio" name="Jenis Kelamin" id="Gender-1" value="2">
							Perempuan </label>
					</div> <br>

					<div class="form-group">
						<label class="col-sm-3 col-sm-offset-4 text-left">Nomor Telepon</label>
  						<label class="col-sm-0 text-right"></label>
  						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-phone"></i>
							</div>
							<input id="telepon" name="telepon" type="text" placeholder="Nomor telepon" class="form-control"onkeyup="checkNumber()" minlength="11" data-fv-stringlength-message="Telepon minimal 11 Karakter">
					</div> <br>

					<div class="form-group">
						<label class="col-sm-3 col-sm-offset-4 text-left">Email</label>
  						<label class="col-sm-0 text-right"></label>
  						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope"></i>
							</div>
							 <input type="text" name="emailUser" id="emailUser" onchange="ValidateEmail()" placeholder="example@mail.com" class="form-control">
							 </div> <br>
					</div>

					<div class="col-sm-offset-11">
						<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Simpan</a>
				</div>
			</div>
			</form>
		</div>
	</div>
</body>
<!--
						<div id="kanan">
							<div class="colomn">
								<div class="form-group">
									<label class="col-md-4 control-label" for="Nama">Nama</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-user"> </i>
											</div>
											<input id="Nama" name="Nama" type="text" placeholder="Nama" class="form-control input-md" disabled>
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
											<input id="NIM" name="NIM" type="text" placeholder="NIM" class="form-control input-md" disabled>
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
											<input id="Angkatan" name="Angkatan" type="text" placeholder="Angkatan" class="form-control input-md" disabled>
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
											<input id="Doswal" name="Dosen Wali" type="text" placeholder="Dosen Wali" class="form-control input-md" disabled>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" for="Tempat Lahir">Tempat Lahir</label>  
										<div class="col-md-8">
											<div class="input-group">
												<div class="input-group-addon">
												<i class="fa fa-home">
												</i>
											</div>
											<input id="Tempat Lahir" name="Tempat Lahir" type="text" placeholder="Tempat Lahir" class="form-control input-md">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label" for="Tanggal Lahir">Tanggal Lahir</label>  
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-birthday-cake"></i>
											</div>
											<input id="Tanggal  Lahir" name="Tanggal Lahir" type="text" placeholder="Tanggal LAhir" class="form-control input-md">
										</div>
									</div>
								</div>

							<!-- Multiple Radios (inline) --><!--
								<div class="form-group">
									<label class="col-md-4 control-label" for="Jenis Kelamin">Jenis Kelamin</label>
									<div class="col-md-8"> 
										<label class="radio-inline" for="Gender-0">
										<input type="radio" name="Jenis Kelamin" id="Gender-0" value="1" checked="checked">
										Laki-Laki </label>

										<label class="radio-inline" for="Gender-1">
										<input type="radio" name="Jenis Kelamin" id="Gender-1" value="2">
										Perempuan </label> 

									</div>
								</div>

							<!-- Text input--> <!--
								<div class="form-group">
									<label class="col-md-4 control-label" for="Wali">Nama Wali</label>  
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-male"></i>
											</div>
											<input id="Wali" name="Wali" type="text" placeholder="Nama Wali" class="form-control input-md">
										</div>
									</div>
								</div>

							<!-- Text input--> <!--
								<div class="form-group"> 
									<label class="col-md-4 control-label" for="Nomor telepon">Nomor Telepon </label>  
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-phone"></i>
											</div>
											<input id="Nomor telepon" name="Nomor telepon" type="text" placeholder="Nomor telepon" class="form-control input-md">
										</div>
										
									</div>
								</div>

							<!-- Text input--><!--
								<div class="form-group">
									<label class="col-md-4 control-label" for="Email">Email</label>  
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</div>
											<input id="Email" name="Email" type="text" placeholder="Email" class="form-control input-md">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label"></label>
									<div class="col-md-4">
										<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Simpan</a>
									</div>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- jQuery Version 1.11.1 --><!--
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript --><!--
<script src="js/bootstrap.min.js"></script>

</body>
