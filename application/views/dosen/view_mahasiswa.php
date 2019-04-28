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

  <title>Mahasiswa Perwalian</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/im-admin.css');?>">

</head>

<body>
  <?php $this->load->view('dosen/topbar_dosen'); ?>
  <div class="container-content">
  <?php $this->load->view('dosen/sidebar_m-dosen'); ?>
    <div class="row">
      <div class="col-md-8">
        <h3>Data Mahasiswa Perwalian</h3><br>
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
                    <th>NAMA WALI</th>
                    <th>NO TELP WALI</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($query as $row){?>
                    <tr>
                        <td><?php echo $row->nim_mahasiswa;?></td>
                        <td><?php echo $row->nama_mahasiswa;?></td>
                        <td><?php echo $row->angkatan;?></td>
                        <td><?php echo $row->nama_wali;?></td>
                        <td><?php echo $row->no_telp_wali;?></td>
                        <td><?php if($row->flag=='0'){
                          echo "Aman";
                        }else{
                          echo "Flag";
                        }?></td>
                        <td>
                          <a href="<?php echo base_url()?>dosen/flagmahasiswa/<?php echo $row->nim_mahasiswa; ?>/<?php echo $row->flag; ?>">
                            <button href="" type="button" class="btn btn-danger btn-sm">Flag</button>
                            </a>
                            <a href="<?php echo base_url()?>dosen/profilmahasiswa/<?php echo $row->nim_mahasiswa; ?>">
                              <button type="button" class="btn btn-primary btn-sm">Profil</button>
                              </a>
                              <a href="<?php echo base_url()?>dosen/nimmahasiswa/<?php echo $row->nim_mahasiswa; ?>">
                                <button type="button" class="btn btn-success btn-sm">IP</button>
                                </a>
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
  </a> -->



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

<!--
        Begin Page Content
        <div class="container-fluid">

          Page Heading
          <h1 class="h3 mb-2text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          DataTales Example
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                  <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>ANGKATAN</th>
                    <th>NIP DOSEN</th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>NIM</th>
                  <th>NAMA</th>
                  <th>ANGKATAN</th>
                  <th>NIP DOSEN</th>
                </tr>
              </tfoot>
                <tbody>
                  <?php foreach($query as $row){?>
                    <tr>
                        <td><?php echo $row->nim_mahasiswa; ?></td>
                        <td><?php echo $row->nama_mahasiswa; ?></td>
                        <td><?php echo $row->angkatan; ?></td>
                        <td><?php echo $row->nip_dosen; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        /.container-fluid

      End of Main Content

      Footer
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      End of Footer


    End of Content Wrapper


  End of Page Wrapper

   Scroll to Top Button
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

   Logout Modal
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
