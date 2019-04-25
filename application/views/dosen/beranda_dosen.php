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

    <title>SiWali</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.css');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!--  <link href="--><?php //echo base_url('assets/css/sb-admin-2.css');?><!--" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/id-admin.css');?>">


</head>
<body>
<?php $this->load->view('dosen/topbar_dosen'); ?>
<div class="container-content">
    <?php $this->load->view('dosen/sidebar_m-dosen'); ?>


</body>

</html>
