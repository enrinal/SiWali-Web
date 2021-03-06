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
  		    <form class="g-py-15" name="updateProfile" role="form" data-toggle="validator" class="form-horizontal" action="<?php echo base_url()?>dosen/update" method="POST" enctype="multipart/form-data">
  				<div class="col-sm-11 form-group">
  					<!-- <div class="col-sm-4">
              <?php if($query->foto_dosen==''){?>
                  <img src="<?php echo base_url().'upload/fotodosen/'.$query->foto_dosen?>" class="img-circle mg-thumbnail">
              <?php }else{
                ?> <img src="<?php echo base_url('assets/css/image/avatar.png')?>" class="img-circle mg-thumbnail">
            <?php  } ?>
              <input id="fileupload-img_profil" class="form-control" type="file" name="foto_dosen" <?php echo ($query->foto_dosen!='')?'':'required'; ?> >
  					</div> -->
            <div id="input-img_profil">
              <?php if($query->foto_dosen!=''){ ?>
                <input type="hidden" name="foto_dosen" value="<?php echo $query->foto_dosen ?>"  <?php echo ($query->foto_dosen!='')?'':'required'; ?>  >
              <?php } ?>
            </div><br>
  					<label class="col-sm-2 text-left">Nama</label>
  					<label class="col-sm-1 text-right">:</label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<span class="glyphicon glyphicon-user"></span>
  							</div>
  							<input type="text" class="form-control" name="nama_dosen" readonly placeholder="Nama Dosen" value="<?php echo $query->nama_dosen;?>">
  						</div>
  					</div><br>
  					<label class="col-sm-2 text-left">NIP/NRK</label>
  					<label class="col-sm-1 text-right">:</label>
  					<div>
  						<div class="input-group">
  							<div class="input-group-addon">
  								<span class="glyphicon glyphicon-credit-card"></span>
  							</div>
  							<input type="text" class="form-control" nama="nip_dosen" readonly placeholder="NIP Dosen" value=<?php echo $query->nip_dosen;?>>
  						</div>
  					</div><br>
  							<label class="col-sm-2 text-left">Email</label>
							<label class="col-sm-1 text-right">:</label>
							<div>
								<div class="input-group">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-envelope"></span>
									</div>
									<input type="text" class="form-control" name="email" placeholder="Email" value=<?php echo $query->email;?>>
								</div>
							</div><br>
					<label class="col-sm-2 text-left">No. Telepon</label>
					<label class="col-sm-1 text-right">:</label>
					<div>
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-earphone"></span>
							</div>
							<input type="text" class="form-control" name= "no_telp_dosen" placeholder="No Telp" value=<?php echo $query->no_telp_dosen;?>>
						</div>
					</div><br><br>
					<div class="col-sm-offset-11">
						<button type="submit" class="btn btn-ctm">Simpan</button>
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

</body>
</html>
