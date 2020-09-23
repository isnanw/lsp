<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage <?php echo $headtitle.' - '.$title;?></title>

	<?php $this->load->view("layouts/dashboard/_meta.php") ?>

	<?php $this->load->view("layouts/dashboard/_css.php") ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote.css');?>">
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

      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <p><a href="#" data-toggle="modal" data-target="#modal-add" class="btn btn-primary">Add Data</a></p>
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

          <!-- <?php
              if(count($result) == 0){
          ?>
          <div class="callout callout-danger">
            Articles not found.
          </div>
          <?php } ?> -->
          <!-- End Notifikasi -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table <?php echo $headtitle;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Skema Sertifikasi</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      

      <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Add <?php echo $headtitle;?></h4>
            </div>
            <form action="<?php echo base_url('dashboard/save_category');?>" method="post">
              <div class="modal-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Skema Sertifikasi</label>
                    <input type="text" class="form-control" name="judul" placeholder="Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Avatar</label><br>
                      <div class="btn btn-default btn-file">
                          <i class="fa fa-image"></i> Image
                          <input type="file" name="gambar">
                      </div>
                  </div>
                </div>
               <div class="form-group">
                    <label>Description</label><br>
                    <textarea id="summernote" name="description" style="width:100%;padding:10px;" rows="2" cols="80"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger">Publish</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- <?php
          foreach($result as $data) {
      ?>
      
      <div class="modal fade" id="modal-delete<?php echo $data['id_article'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Confirm Deletion</h4>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('dashboard/delete_article/'.$data['id_article']); ?>">
              <input type="hidden" readonly value="<?php echo $data['thumb_article'];?>" name="gambar" class="form-control" >
              <div class="modal-body">
                <p>Are you sure to delete article <b><?php echo $data['title_article'];?></b></p>
              </div>
              <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger">Delete</button>
              </div>
            </form>
          </div> -->
          <!-- /.modal-content -->
        <!-- </div> -->
        <!-- /.modal-dialog -->
      <!-- </div> -->
      <!-- /.modal -->
      <!-- <?php } ?> -->

      <!-- <?php echo $pagination; ?> -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view("layouts/dashboard/_footer.php") ?>

  </div>
  <script src="<?php echo base_url('assets/js/jquery-3.4.0.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.js');?>"></script>
  
  <!-- ./wrapper -->
  <?php $this->load->view("layouts/dashboard/_js.php") ?>
  <!-- Summernote WYSIWYG -->
  <script src="<?php echo base_url('assets/plugins/summernote/summernote.js');?>"></script>
  <script type="text/javascript">
    $(document).ready(function(){
			$('#summernote').summernote({
				height: "100px",
			});
    });
  </script>
	

</body>
</html>