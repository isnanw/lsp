<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage <?php echo $headtitle.' - '.$title;?></title>

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
          <small>Manage <?php echo $headtitle;?></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Administrator</a></li>
          <li class="active"><?php echo $headtitle;?></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $homepage;?></h3>
                <p>Homepage</p>
              </div>
              <div class="icon">
                <i class="fa fa-home"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $blog;?></h3>
                <p>Blog</p>
              </div>
              <div class="icon">
                <i class="fa fa-file-text"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $projects;?></h3>
                <p>Projects</p>
              </div>
              <div class="icon">
                <i class="fa fa-rocket"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $contact;?></h3>
                <p>Contact</p>
              </div>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $visitor;?></h3>
                <p>This Month</p>
              </div>
              <div class="icon">
                <i class="fa fa-calendar"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
        <div class="row">
          <div class="col-xs-12">
            <!-- Notifikasi -->
            <?php 
                $sukses = $this->session->flashdata('sukses');
                if($sukses != ""){
            ?>
            <div id="notifikasi" class="alert alert-success"><strong>Success! </strong> <?php echo $sukses;?></div>
            <?php } ?>

            <?php 
                $error = $this->session->flashdata('error');
                if($error != ""){
            ?>
            <div id="notifikasi" class="alert alert-danger"><strong>Error! </strong> <?php echo $error;?></div>
            <?php } ?>

            <?php
              if(count($result) == 0){
            ?>
            <div class="callout callout-danger">
              Visitors not found.
            </div>
            <?php } ?>
            <!-- End Notifikasi -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">List <?php echo $headtitle;?></h3>
                <div class="box-tools">
                  <form method='post' action="<?php echo base_url('dashboard/visitors'); ?>">
                    <div class="input-group input-group-sm">
                        <input type='text' name='search' class='form-control pull-right' placeholder="Search&hellip;" value='<?php echo $search ?>'>
                        <div class='input-group-btn'>
                          <button type='submit' name='submit' value='Submit' class='btn btn-default'><i class='fa fa-search'></i></button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>No</th>
                    <th>IP Address</th>
                    <th>Onpage</th>
                    <th>Visit Date</th>
                  </tr>
                  <?php
                      $no = $row+1;
                      foreach($result as $data):
                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data['ip_address'];?></td>
                    <td><?php echo $data['onpage'];?></td>
                    <td><?php echo format_indo($data['created_at']);?></td>
                  </tr>
                  <?php $no++; endforeach;?>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>

        <?php echo $pagination; ?>

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