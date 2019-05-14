<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <script type="text/javascript">
      var base_url_w = 'http://siakad.itera.ac.id/';
    </script>
    <script src="http://siakad.itera.ac.id/assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="http://siakad.itera.ac.id/assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://siakad.itera.ac.id/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://siakad.itera.ac.id/assets/css/css.css" type="text/css" media="screen" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/prfl_mhs.css');?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>


</head>
<body>
<?php $this->load->view('admin/topbar_admin'); ?>
<div class="container-content">
    <?php $this->load->view('admin/sidebar_b-admin'); ?>
<div class="container content">
    <div class="row"><div class="col-md-3">

</div>
<div class="col-md-9">
    <div class="row">
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 class="text-center">5</h3>
                    <br>
                    <h5 class="text-center">Jumlah Mahasiswa Konsultasi</h5>
                </div>
                <div class="icon">
                    <div class="glyph teksbiru">
                        <i class=""></i>
                    </div>
                </div>
                <a href="#" class="small-box-footer"></a>
            </div>
        </div><!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 class="text-center">3</h3>
                    <br>
                    <h5 class="text-center">Flag</h5>
                </div>
                <div class="icon">
                    <div class="glyph teksbiru">
                        <i class=""></i>
                    </div>
                </div>
                <a href="#" class="small-box-footer"></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3 class="text-center">124</h3>
                    <br>
                    <h5 class="text-center">Jumlah Mahasiswa Perwalian</h5>
                </div>
                <div class="icon">
                    <div class="glyph teksbiru">
                        <i class=""></i>
                    </div>
                </div>
                <a href="#" class="small-box-footer"></a>
            </div>
        </div>
    </div>

    <div class="box box-success">
        <div class="box-header">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <h3 class="box-title text-center">JADWAL PENTING</h3>

        </div>
        <div class="box-body">
            <table class="table table-striped">
                    <tbody><tr>
                      <th style="width: 20px">#</th>
                      <th>Tahun Akademik</th>
                      <th>Keterangan</th>
                      <th>Waktu</th>
                    </tr>

                                    <tr>
                      <td>1</td>
                      <td>2018/2019</td>
                      <td>Pengisian KRS Semester Ganjil</td>
                      <td>14 Agustus 2018 s/d 23 Agustus 2018</td>
                        </tr>
                                    <tr>
                      <td>2</td>
                      <td>2018/2019</td>
                      <td>Penggantian Rencana Studi Ganjil</td>
                      <td>7 September 2018 s/d 14 September 2018</td>
                        </tr>
                                    <tr>
                      <td>3</td>
                      <td>2018/2019</td>
                      <td>Pengisian Nilai Semester Ganjil</td>
                      <td>24 Desember 2018 s/d 11 Januari 2019</td>
                        </tr>
                                    <tr>
                      <td>4</td>
                      <td>2018/2019</td>
                      <td>Pengisian KRS Semester Genap</td>
                      <td>21 Januari 2019 s/d 24 Januari 2019</td>
                        </tr>
                                    <tr>
                      <td>5</td>
                      <td>2018/2019</td>
                      <td>Penggantian Rencana Studi Genap</td>
                      <td>8 Februari 2019 s/d 15 Februari 2019</td>
                        </tr>
                                    <tr>
                      <td>6</td>
                      <td>2018/2019</td>
                      <td>Pengisian Nilai Semester Genap</td>
                      <td>27 Mei 2019 s/d 21 Juni 2019</td>
                        </tr>
                                    <tr>
                      <td>7</td>
                      <td>2018/2019</td>
                      <td>Pengisian KRS Semester Pendek</td>
                      <td>12 Juni 2019 s/d 19 Juni 2019</td>
                        </tr>
                                    <tr>
                      <td>8</td>
                      <td>2018/2019</td>
                      <td>Pengisian Nilai Semester Pendek</td>
                      <td>12 Agustus 2019 s/d 16 Agustus 2019</td>
                        </tr>
                    
                  </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>

</body>

</html>
