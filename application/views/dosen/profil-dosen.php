<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pfl-dosen.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body>
  <?php $this->load->view('dosen/topbar_dosen'); ?>
  <div class="container-content">
  	<?php $this->load->view('dosen/sidebar_p-dosen'); ?>
  	<div class="row">
  		<div class="col-md-offset-4">
  			<h3>Profil Dosen</h3>
  			<hr>
  			<form>
  				<div class="col-sm-11 form-group">
  					<div class="col-sm-4">
  						<img src="<?php echo base_url('assets/css/image/avatar.png')?>" class="avatar img-circle img-thumbnail">
  						<input class="up-file" type="file">
  					</div><br>
  					<label class="col-sm-2 text-left">Nama</label>
  					<label class="col-sm-1 text-right">:</label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<span class="glyphicon glyphicon-user"></span>
  							</div>
  							<input type="text" class="form-control" placeholder="Nama" disabled>
  						</div>
  					</div><br>
  					<label class="col-sm-2 text-left">NIP/NRK</label>
  					<label class="col-sm-1 text-right">:</label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<span class="glyphicon glyphicon-credit-card"></span>
  							</div>
  							<input type="text" class="form-control" placeholder="NIP/NRK" disabled>
  						</div>
  					</div><br>
  					<label class="col-sm-2 text-left">Tempat Lahir</label>
  					<label class="col-sm-1 text-right">:</label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<span class="glyphicon glyphicon-globe"></span>
  							</div>
  							<input type="text" class="form-control" placeholder="Tempat Lahir">
  						</div>
  					</div><br>
  					<label class="col-sm-2 col-sm-offset-4 text-left">Tanggal Lahir</label>
  					<label class="col-sm-1 text-right">:</label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<i class="fa fa-birthday-cake"></i>
  							</div>
  							<input type="text" class="form-control" placeholder="Tanggal Lahir">
  						</div>
  					</div><br>
  					<label class="col-sm-2 col-sm-offset-4 text-left" for="jk">Jenis Kelamin</label>
  					<label class="col-sm-1 text-right">:</label>
  					<div>
  						<label class="radio-inline" for="jk-0">
  							<input type="radio" name="jk" value="1">Laki-Laki</label>
  							<label class="radio-inline" for="jk-1">
  								<input type="radio" name="jk" value="2">Perempuan</label>
  							</div><br>
  							<label class="col-sm-2 col-sm-offset-4 text-left">Email</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-envelope"></span>
									</div>
									<input type="text" class="form-control" placeholder="Email">
								</div>
							</div><br>
					<label class="col-sm-2 col-sm-offset-4 text-left">No. Telepon</label>
					<label class="col-sm-1 text-right">:</label>
					<div>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-earphone"></span>
							</div>
							<input type="text" class="form-control" placeholder="Nomor Telepon">
						</div>
					</div><br><br>
					<div class="col-sm-offset-11">
						<button class="btn btn-ctm">Simpan</button>
					</div>
								
							<!-- 
							<div class="col-sm-offset-11">
								<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-floppy-disk"> Simpan</span></a>
							</div> -->
      			</div>
      		</form>
      	</div>
      </div>
  </div>


	<!-- <div class="container">
		<div class="profil">
			<h2>Profil Dosen</h2><hr>
		</div>
		<form>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-2">
					<div class="fm">
						<div class="form-group">
							<div class="col-sm-4">
								<img src="<?php echo base_url('assets/css/image/avatar.png')?>" class="avatar img-circle img-thumbnail">
								<input type="file">
							</div><br>
							<label class="col-sm-2 col-sm-offset-1 text-left">Nama</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-user"></span>
									</div>
									<input type="text" class="form-control" placeholder="Nama" disabled>
								</div>
							</div><br>
							<label class="col-sm-2 col-sm-offset-1 text-left">NIP/NRK</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-credit-card"></span>
									</div>
									<input type="text" class="form-control" placeholder="NIP/NRK" disabled>
								</div>
							</div><br>
							<label class="col-sm-2 col-sm-offset-1 text-left">Tempat Lahir</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-globe"></span>
									</div>
									<input type="text" class="form-control" placeholder="Tempat Lahir">
								</div>
							</div><br>
							<label class="col-sm-2 col-sm-offset-5 text-left">Tanggal Lahir</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-birthday-cake"></i>
									</div>
									<input type="text" class="form-control" placeholder="Tanggal Lahir">
								</div>
							</div><br>
							<label class="col-sm-2 col-sm-offset-5 text-left" for="jk">Jenis Kelamin</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<label class="radio-inline" for="jk-0">
									<input type="radio" name="jk" value="1">Laki-Laki</label>
									<label class="radio-inline" for="jk-1">
										<input type="radio" name="jk" value="2">Perempuan</label>
									</div><br>
							<label class="col-sm-2 col-sm-offset-5 text-left">Email</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-envelope"></span>
									</div>
									<input type="text" class="form-control" placeholder="Email">
								</div>
							</div><br>
							<label class="col-sm-2 col-sm-offset-5 text-left">No. Telepon</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-earphone"></span>
									</div>
									<input type="text" class="form-control" placeholder="Nomor Telepon">
								</div>
							</div><br><br>
							<div class="col-sm-offset-11">
								<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-floppy-disk"> Simpan</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div> -->
	
</body>
</html>
