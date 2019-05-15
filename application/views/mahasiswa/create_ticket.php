<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Membuat Tiket</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/create.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

</head>
<body>

	<?php $this->load->view('mahasiswa/topbar_mahasiswa'); ?>
		<div class="container-content">
		<?php $this->load->view('mahasiswa/sidebar_c-mhs'); ?>
	<h2>Konsultasi</h2>

	<!-- Topik -->
	<form action="<?php echo base_url(). 'mahasiswa/submit_ticket'; ?>" method="post">
   <div id="form-control">
	<div class="rows">

	<div class="form-group">
		<input type="text" id="subject" class="form-control md-4" placeholder="Subject" name="subjek"style="width:600px">
			<div class="col-md-8">
				<div class="input-group">
				</div>
			</div>
		</div>
	<!-- Message -->
	<div class="form-group">
		<textarea class="textarea" id="textarea" rows="3"  placeholder="Message" name="pesan"style="resize:none; width:600px; height:100px;"></textarea>
			 <div class="col-md-8">
				<div class="input-group">
				</div>
			</div>
		</div>
		<br>

	<!--  Send button -->
	<div id="button">
		<div class="button">
			<input class="btn btn-ctm" type="submit" value="Input">
		</div>
	</div>
</div>
   </div>
</form>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</body>
</html>
