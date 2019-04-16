<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Upload IP</title>

    <!-- Bootstrap -->    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel=”stylesheet”>
    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel=”stylesheet”>
    <!--<link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="upload" id="upload">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center" >
            <h2><strong>UPLOAD IP</strong></h2>
          </div>
        </div>
      </div>
    </section>

    <section class="form" id="form">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
             <form class = "col-sm-6 col-sm-offset-3">
            <div class="form-group">
              <label for="IP1">IP Semester 1</label>
              <input type="IP1" class="form-control" id="IP1" placeholder="Masukkan IP Semester 1">
            </div>

            <div class="form-group">
              <label for="IP1">IP Semester 2</label>
              <input type="IP2" class="form-control" id="IP2" placeholder="Masukkan IP Semester 2">
            </div>

            <div class="form-group">
              <label for="IP3">IP Semester 3</label>
              <input type="IP3" class="form-control" id="IP3" placeholder="Masukkan IP Semester 3">
            </div>

            <div class="form-group">
              <label for="IP4">IP Semester 4</label>
              <input type="IP4" class="form-control" id="IP4" placeholder="Masukkan IP Semester 4">
            </div>

            <div class="form-group">
              <label for="IP5">IP Semester 5</label>
              <input type="IP5" class="form-control" id="IP5" placeholder="Masukkan IP Semester 5">
            </div>

            <div class="form-group">
              <label for="IP6">IP Semester 6</label>
              <input type="IP6" class="form-control" id="IP6" placeholder="Masukkan IP Semester 6">
            </div>

            <div class="form-group">
              <label for="IP7">IP Semester 7</label>
              <input type="IP7" class="form-control" id="IP7" placeholder="Masukkan IP Semester 7">
            </div>

            <div class="form-group">
              <label for="IP8">IP Semester 8</label>
              <input type="IP8" class="form-control" id="IP8" placeholder="Masukkan IP Semester 8">
            </div>

  
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js');?>" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel=”stylesheet”>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>