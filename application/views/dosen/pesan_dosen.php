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


        <form action="<?php echo base_url(). 'dosen/send_pesan'; ?>" method="post">
         <div id="form-control">
      	<div class="rows">
      		</div>
      	<!-- Message -->
      	<div class="form-group">
      		<textarea class="textarea" id="textarea" rows="3"  placeholder="Message" name="pesan"style="resize:none; width:800px; height:100px;"></textarea>
      			 <div class="col-md-8">
      				<div class="input-group">
      				</div>
      			</div>
      		</div>
          <input type="hidden" id="ticket_id" name="ticket_id" value=<?php echo $row->ticket_id; ?> >
      	<!--  Send button -->
      	<div id="button">
      		<div class="button">
      			<input class="btn btn-primary" type="submit" value="Send">
            <a class="btn btn-danger" href="<?php echo base_url()?>dosen/close_ticket/<?php echo $row->ticket_id; ?>" role="button">Closed Ticket</a>
      		</div>
      	</div>
      </div>
         </div>
      </form>
      </div>
    </div>
  </div>
</body>
</html>
