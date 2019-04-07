<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

		<!-- Bootstrap -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/bootstrap/css/style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>

	</head>

	<body>
	<img src="assets/bootstrap/css/image/bg.jpg" alt="gambar" class="bg" />
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="login text-center">
					<h2 class="lgn"><b>LOGIN</b></h2>
					<form method="post" action="<?php echo base_url();?>login/masuk">
						<div class="form-group">
						  	<div class="input-group">
						  		<span class="input-group-addon">
						  			<img src="assets/bootstrap/css/image/user.png">
						  		</span>
						  		<input type="text" name="username" class="form-control input-sm" placeholder="NRK/NIM" id="username" required>
						  	</div>					  	
						</div>
						<div class="form-group">
							<div class="input-group">
							  	<span class="input-group-addon">
							  		<img src="assets/bootstrap/css/image/pswd.png">
							  	</span>
							  	<input type="password" name="password" class="form-control input-sm" placeholder="Kata Sandi" id="password" required>
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