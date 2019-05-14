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
<?php $this->load->view('mahasiswa/topbar_mahasiswa'); ?>
<div class="container-content">
    <?php $this->load->view('mahasiswa/sidebar_b-mhs'); ?>

<div class="container content">
    <div class="row"><div class="col-md-3">

</div>
<div class="col-md-9">
<div class="row">
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3 class="text-center">0</h3>
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

    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3 class="text-center">127</h3>
                <br>
                <h5 class="text-center">Jumlah SKS Transkrip</h5>
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
        <div class="small-box bg-red">
            <div class="inner">
                <h3 class="text-center">3.85</h3>
                <br>
                <h5 class="text-center">IP Transkrip</h5>
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
        <h3 class="box-title text-center">PANDUAN SIWALI</h3>

    </div>
    <div class="box-body">
        <p>SIAKAD telah sesuai dengan Buku Peraturan Akademik Dan Kemahasiswaan Institut Teknologi Sumatera Pasal 6.4 tentang Nilai Rata-Rata, Indeks Prestasi, dan Indeks Prestasi Kumulatif.</p>
        <p><i>ITERA menentukan prestasi akademik mahasiswa melalui NR, IP, dan IPK.</i></p>
        <ol>
        <li>Nilai Rata-rata (NR) merupakan prestasi akademik mahasiswa yang dicaai pada setiap semester atas dasar perhitungan perolehan nilai akhir untuk sejumlah mata kuliah yang terdaftar pada semester tersebut.</li>
        <li>Indeks Prestasi (IP) merupakan prestasi akademik mahasiswa yang dicapai dalam kurun waktu tertentu atas dasar perhitungan perolehan nilai akhir sejumlah mata kuliah, yang jika ada mata kuliah yang diulang, nilai yang diperhitungkan adalah nilai terakhir mata kuliah tersebut saja, tanpa memperhitungkan nilai mata kuliah tersebut pada pengambilan sebelumnya. Ketentuan ini juga berlaku untuk suatu mata kuliah yang menggantikan mata kuliah lain yang diambil sebelumnya.</li>
        <li>Indeks Prestasi Kumulatif (IPK) merupakan prestasi akademik mahasiswa yang dicapai dalam kurun waktu tertentu atas dasar perhitungan semua nilai mata kuliah yang pernah diambil, termasuk nilai suatu mata kuliah yang diambil kembali atau diantikan oleh mata kuliah lain pada semester-semester berikutnya.</li>
        </ol>
    </div><!-- /.box-body-->
</div>
</div>
</div>
</div>
</div>

</body>

</html>
