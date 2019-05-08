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
  <?php $this->load->view('mahasiswa/topbar_mahasiswa'); ?>
  <div class="container-content">
    <?php $this->load->view('mahasiswa/sidebar_k-mhs'); ?>
    <div class="row">
      <div class="col-md-offset-1">
        <a class="btn btn-default" href="<?php echo base_url(). 'mahasiswa/konsultasi'; ?>" role="button">Open Ticket</a>
        <a class="btn btn-default" href="<?php echo base_url(). 'mahasiswa/konsultasiclose'; ?>" role="button">Close Ticket</a>
        <a href="<?php echo base_url('mahasiswa/tiket')?>">
        <button class="btn btn-primary create">Create New Ticket</button></a>
      </br> </br>

        <div class="card-body">
          <!-- <div class="no_ticket">
            <img src="<?php echo base_url('assets/css/image/ticket.png')?>"><br>
            <label>You don't have any ticket</label>
          </div> -->
          <div class="table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">Time</th>
                <th scope="col">Subject</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Nama Mahasiswa</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($query as $row){?>
              <tr>
                <td><?php echo $row->ticket_time;?></td>
                <td><a href="<?php echo base_url()?>mahasiswa/pesanclose/<?php echo $row->ticket_id; ?>"><?php echo $row->ticket_subjek;?></td>
                <td><?php echo $row->nama_dosen;?></td>
                <td><?php echo $row->nama_mahasiswa;?></td>
                <td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
