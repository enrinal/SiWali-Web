<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Laporan</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/create.css');?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

  </head>

  <body>
    <?php $this->load->view('dosen/topbar_dosen'); ?>
    <div class="container-content">
    	<?php $this->load->view('dosen/side_upld_lap'); ?>
    	<div class="row">
    		<div class="col-md-offset-4">
    			<h3>Upload Laporan</h3>
    			<hr>
    		    <form class="g-py-15" name="uploadLaporan" role="form" data-toggle="validator" class="form-horizontal" action="<?php echo base_url()?>dosen/uploadlaporan" method="POST" enctype="multipart/form-data">
    				<div class="form-group">
              <label for="periode_lprn" class="col-sm-2 control-label">Periode Laporan</label>
              <div class="col-sm-4">
                    <select class="form-control" name="semester">
                      <option value="1" selected="">Semester Ganjil</option>
                      <option value="2">Semester Genap</option>
                    </select>
              </div>
            </div><br><br><br>
            <div class="form-group">
              <label for="tahun_ajaran" class="col-sm-2 control-label">Tahun Ajaran</label>
              <div class="col-sm-4">
                    <input class="form-control input-sm validate[required]" type="text" name="tahun_ajaran" value="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;); cursor: auto;">
              </div>
            </div><br><br>
            <div class="berkas_laporan">
              <label for="no_reg_kkn" class="col-sm-2 control-label">Berkas Laporan</label>
              <div class="col-sm-4">
                    <input class="form-control-file input-sm validate[required]" type="file" name="berkas_laporan" value="">
              </div>
            </div>
            <br><br><br>
            <h4>Keterangan</h4>
            <div class="form-group">
              <div class="col-sm-8">
                <p>Berkas laporan yang dapat diunggah adalah berkas doc, docx atau pdf dengan ukuran maksimal 10 MB.</p>
              </div>
            </div><br><br>
            <div class="col-sm-offset-4">
  						<button type="submit" class="btn btn-ctm">Simpan</button>
            </div><br><br>
        	</div>
        </div>
    </div>
    </body>
