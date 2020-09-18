<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $headtitle.' - '.$title;?></title>

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
          <small>Control Panel</small>
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
                <h3><?php echo $blog;?></h3>
                <p>Articles</p>
              </div>
              <div class="icon">
                <i class="fa fa-file-text"></i>
              </div>
              <a href="<?php echo base_url('dashboard/articles.html');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $project;?></h3>
                <p>Projects</p>
              </div>
              <div class="icon">
                <i class="fa fa-rocket"></i>
              </div>
              <a href="<?php echo base_url('dashboard/projects.html');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3><?php echo $category;?></h3>
                <p>Category</p>
              </div>
              <div class="icon">
                <i class="fa fa-tag"></i>
              </div>
              <a href="<?php echo base_url('dashboard/category.html');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
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