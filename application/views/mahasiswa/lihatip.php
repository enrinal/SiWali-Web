<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ip-mahasiswa.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body>
<?php $this->load->view('mahasiswa/topbar_mahasiswa'); ?>
<div class="container-content">
    <?php $this->load->view('mahasiswa/sidebar_lhtip'); ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <h3>Lihat IP</h3><br>
            <div class="form-group">
                <label for="IP1">IP Semester 1</label>
                <input readonly type="IP1" class="form-control" id="IP1" placeholder=<?php echo $query->semester_1;?>>
            </div>

            <div class="form-group">
                <label for="IP1">IP Semester 2</label>
                <input readonly type="IP2" class="form-control" id="IP2" placeholder=<?php echo $query->semester_2;?>>
            </div>

            <div class="form-group">
                <label for="IP3">IP Semester 3</label>
                <input readonly type="IP3" class="form-control" id="IP3" placeholder=<?php echo $query->semester_3;?>>
            </div>

            <div class="form-group">
                <label for="IP4">IP Semester 4</label>
                <input readonly type="IP4" class="form-control" id="IP4" placeholder=<?php echo $query->semester_4;?>>
            </div>

            <div class="form-group">
                <label for="IP5">IP Semester 5</label>
                <input readonly type="IP5" class="form-control" id="IP5" placeholder=<?php echo $query->semester_5;?>>
            </div>

            <div class="form-group">
                <label for="IP6">IP Semester 6</label>
                <input readonly type="IP6" class="form-control" id="IP6" placeholder=<?php echo $query->semester_6;?>>
            </div>

            <div class="form-group">
                <label for="IP7">IP Semester 7</label>
                <input readonly type="IP7" class="form-control" id="IP7" placeholder=<?php echo $query->semester_7;?>>
            </div>

            <div class="form-group">
                <label for="IP8">IP Semester 8</label>
                <input readonly type="IP8" class="form-control" id="IP8" placeholder=<?php echo $query->semester_8;?>>
            </div>
        </div>
    </div>
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js');?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js');?>"></script>


</body>

</html>
