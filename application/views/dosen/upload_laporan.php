<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Upload Laporan</title>

  <style type="text/css">
    body 
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

#Terkirim {
  padding-left: 270px;
  padding-right: 100px;
  padding-top: auto;
  font-weight: bold;
}

#button {
  padding-left: 270px;
  padding-right: auto;
  padding-top: 180px;
  font-weight: bold;
}

#progress {
  padding-left: 270px;
  padding-right: 100px;
  padding-top: auto;
  font-weight: bold;
}


  </style>
</head>

<body>
  <?php $this->load->view('dosen/topbar_dosen'); ?>
  <div class="container-content">
    <?php $this->load->view('dosen/side_upld_lap'); ?>

  <div class="container">
        <h4>Upload File Laporan Perwalian</h4>
        <br>
        
          <!-- Standar Form -->
          <h5>Pilih File</h5>
          <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                <input type="file" id="avatar" name="avatar" accept="file/pdf">
                <br>
          </form>

          <!-- Drop Zone -->
          <div class="col-md-4">
            <div style=
            "border: 1px solid #909296;
            height: 150px;
            margin: 10px 0px;
            text-align: center;
            width: 250px;">

          <h4>Tahan dan Tarik File</h4>
          <br>
          <div class="upload" id="Drop">
          <img src="<?php echo base_url('assets/css/image/upload.png')?>"width="100px" height="70px">
        </div>

          </div>
          </div>
          
          <!-- Progress Bar -->
        
          <div id="button">
            <div class="button">
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload File
              </button>
              <br> <br>
            </div>
          </div>

          <div id="progress">
            <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
            </div>
          </div>
          </div>
          
          <!-- Upload Finished -->
          <div id="Terkirim">
            <div class="Finished">
            <br>
      
            <h5>File Terkirim</h5>
            
              <div class="list-group">
              <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>file1.pdf</a>
              <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>file2.pdf</a>
              <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>file3.pdf</a>
            </div>
            
            </div>
          </div>
          </div>
          
        
      
    </div> <!-- /container -->
    </body>