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

	<?php $this->load->view('Mahasiswa/topbar_mahasiswa'); ?>
		<div class="container-content">
		<?php $this->load->view('Mahasiswa/sidebar_c-mhs'); ?>
	<h2>Konsultasi</h2>

	<!-- Topik -->
	<form>
   <div id="form-control">
	<div class="rows">
		<div class="form-group">
		<input type="text" id="topik" class="form-control md-8" placeholder="Topik Konsultasi" style="width:600px">
			<div class="col-md-12">
				<div class="input-group">
				</div>
			</div>
		</div> 
    

	<!-- Subtopik -->
		<div class="form-group">
		<input type="text" id="subtopik" class="form-control md-4" placeholder="Subtopik Konsultasi" style="width:600px">
			<div class="col-md-8">
				<div class="input-group">
				</div>
			</div> 
		</div>


	<div class="form-group">
		<input type="text" id="subject" class="form-control md-4" placeholder="Subject" style="width:600px">
			<div class="col-md-8">
				<div class="input-group">
				</div>
			</div> 
		</div>
		

	<!-- Message -->
	<div class="form-group">
		<textarea class="textarea" id="textarea" rows="3"  placeholder="Message" style="resize:none; width:600px; height:100px;"></textarea>
			 <div class="col-md-8">
				<div class="input-group">
				</div>
			</div>
		</div> 
		<br>

	<!--  Send button -->
	<div id="button">
		<div class="button">
			<button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Submit Tiket</button>
		</div>
	</div>
</div>
   </div>
</form>

</body>
</html>
	