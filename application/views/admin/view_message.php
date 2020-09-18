<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
	$details = $message->row_array();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Message From <?php echo $details['guest_name'].' - '.$title;?></title>

	<?php $this->load->view("layouts/dashboard/_meta.php") ?>

	<?php $this->load->view("layouts/dashboard/_css.php") ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php $this->load->view("layouts/dashboard/_nav.php") ?>

    <?php $this->load->view("layouts/dashboard/_sidebar.php") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <?php echo $headtitle;?>
          <small>Read <?php echo $headtitle;?></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Administrator</a></li>
          <li class="active">Read <?php echo $headtitle;?></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <!-- Main content -->
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Read <?php echo $headtitle;?></h3>
                <div class="box-tools pull-right">
                  <?php if($details['subject'] == '1') { echo "<span class='label label-success'>Testimoni</span>"; } else if($details['subject'] == '2') { echo "<span class='label label-warning'>Kritik dan Saran</span>"; } else if($details['subject'] == '3') { echo "<span class='label label-danger'>Laporkan Masalah</span>"; } else { echo "<span class='label label-primary'>Lainya</span>"; } ?>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-read-info">
                  <h3><?php echo $details['guest_name'];?></h3>
                  <h5>From: <a href="mailto:<?php echo $details['email'];?>"><?php echo $details['email'];?></a></h5>
                  <h5>Date: <?php echo format_indo($details['created_at']);?></h5>
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                  <p><?php echo $details['message'];?></p>
                </div>
                <!-- /.mailbox-read-message -->
              </div>
              <!-- /.box-footer -->
              <div class="box-footer">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-delete<?php echo $details['id_message'];?>"><i class="fa fa-trash-o"></i> Delete</button>
                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="modal fade" id="modal-delete<?php echo $details['id_message'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm Deletion</h4>
              </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url('dashboard/delete_message/'.$details['id_message']);?>">
                <div class="modal-body">
                  <p>Are you sure to delete message from <b><?php echo $details['guest_name'];?></b></p>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-danger">Delete</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view("layouts/dashboard/_footer.php") ?>

  </div>
  <!-- ./wrapper -->

  <?php $this->load->view("layouts/dashboard/_js.php") ?>

</body>
</html>