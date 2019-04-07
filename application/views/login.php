<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

		<!-- Bootstrap -->
		<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel=”stylesheet”>
		<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript"  src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

	</head>

	<body>
		<img src="<?php echo base_url('assets/css/image/bg.jpg');?>" alt="gambar" class="bg" />
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="login text-center">
					<h2 class="lgn"><b>LOGIN</b></h2>
					<form class="form-signin" action="<?php echo site_url('login/masuk');?>" method="post">
						<div class="form-group">
						  	<div class="input-group">
						  		<span class="input-group-addon">
										<img src="<?php echo base_url('assets/css/image/user.png');?>">
						  		</span>
						  		<input type="text" class="form-control" placeholder="NRK/NIM">
						  	</div>
						</div>
						<div class="form-group">
							<div class="input-group">
							  	<span class="input-group-addon">
										<img src="<?php echo base_url('assets/css/image/pswd.png');?>">
							  	</span>
							  	<input type="password" class="form-control" placeholder="Kata Sandi">
						  	</div>
						</div>
						<div class="form-group">
							<button class="btn btn-custom-yellow btn-block" type="submit"><b>LOGIN</b></button>
							<hr>
						</div>
						<div class="lupa-pswd">
							<p><b>Lupa password? klik <a href="">di sini</a></b></p>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
