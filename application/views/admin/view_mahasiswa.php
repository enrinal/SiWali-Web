<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Mahasiswa</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/vm-admin.css');?>">

</head>

<body>
  <?php $this->load->view('admin/topbar_admin'); ?>
  <div class="container-content">
  <?php $this->load->view('admin/sidebar_vm-admin'); ?>
    <div class="row">
      <div class="col-md-7 col-md-offset-1">
       <h3>Data Mahasiswa</h3><br>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- 
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                  <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>ANGKATAN</th>
                    <th>NIP DOSEN</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($query as $row){?>
                    <tr>
                        <td><?php echo $row->nim_mahasiswa; ?></td>
                        <td><?php echo $row->nama_mahasiswa; ?></td>
                        <td><?php echo $row->angkatan; ?></td>
                        <td><?php echo $row->nip_dosen; ?></td>
                        <td>
                        <button type="button" class="btn btn-primary btn-sm"> Detail</button>
                        <button type="button" class="btn btn-primary btn-sm"> Delete</button>
                    </td>
                    </tr>
                  <?php } ?>
                </tbody>
                </table>
           <!--    </div>
            </div> -->
          </div>
        </div>
        
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer> -->
      
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
      </div>
    </div>
    </div>
<!-- <body>

        
        <div class="container-fluid">

        
          <h1 class="h3 mb-2text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                  <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>ANGKATAN</th>
                    <th>NIP DOSEN</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($query as $row){?>
                    <tr>
                        <td><?php echo $row->nim_mahasiswa; ?></td>
                        <td><?php echo $row->nama_mahasiswa; ?></td>
                        <td><?php echo $row->angkatan; ?></td>
                        <td><?php echo $row->nip_dosen; ?></td>
                        <td>
                        <button type="button" class="btn btn-primary btn-sm"> Detail</button>
                        <button type="button" class="btn btn-primary btn-sm"> Delete</button>
                    </td>
                    </tr>
                  <?php } ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

-->
  
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  
  <script src="<?php echo base_url('assets/js/sb-admin-2.min.js');?>"></script>

  
  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>

  
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js');?>"></script>


</body>
 
</html>
