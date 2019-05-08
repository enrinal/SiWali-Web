<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Konsultasi</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/konsultasi.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body>
  <?php $this->load->view('dosen/topbar_dosen'); ?>
  <div class="container-content">
    <?php $this->load->view('dosen/sidebar_k-dosen'); ?>
    <div class="row">
      <div class="col-md-8 m-auto">
        <div class="panel panel-default" style="overflow-y: scroll; width: 800px ;height: 400px">
            <div class="mid-width wrapItems" style=" height:400px">
              <div id="pesan">
                <?php foreach($query as $row){
                  echo "<p>
                    <span><b>$row->pengirim :</b></span>
                    <span>$row->pesan</span>
                  </br></br>";
                }
                ?>
            </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
