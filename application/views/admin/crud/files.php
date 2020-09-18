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

      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload File</h3>
            </div>
            <?php echo form_open_multipart('dashboard/save_file');?>
              <div class="box-body">
                <div class="form-group">
                  <input type="file" name="berkas">
                </div>
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Upload</button>
              </div>
            </form>
          </div>
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
            Files not found.
          </div>
          <?php } ?>
          <!-- End Notifikasi -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">List <?php echo $headtitle;?></h3>
              <div class="box-tools">
                <form method='post' action="<?php echo base_url('dashboard/files'); ?>">
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
                  <th width="10px">No</th>
                  <th width="250px" class="text-nowrap">File Name</th>
                  <th width="130px" class="text-nowrap">Short URL</th>
                  <th width="120px" class="text-nowrap">File Type</th>
                  <th width="100px" class="text-nowrap">File Size</th>
                  <th width="120px" class="text-nowrap">Created At</th>
                  <th width="120px" class="text-nowrap">Updated At</th>
                  <th class="text-nowrap">Action</th>
                </tr>
                <?php
                  $no = $row+1;
                  foreach ($result as $data) {
                ?>
                <tr>
                  <td><b><?php echo $no;?></b></td>
                  <td class="text-nowrap"><a href="<?php echo base_url('download/').$data['slug_file'];?>" target="_blank"><?php echo $data['file_name'];?></a></td>
                  <td class="text-nowrap"><a href="<?php echo base_url('download/').$data['slug_file'];?>" class="btn btn-primary btn-xs">Copy Link</a></td>
                  <td class="text-nowrap"><?php echo $data['type_file'];?></td>
                  <td class="text-nowrap"><?php echo format_size($data['file_size']);?></td>
                  <td class="text-nowrap"><?php echo format_indo($data['created_at']);?></td>
                  <td class="text-nowrap"><?php echo format_indo($data['updated_at']);?></td>
                  <td class="text-nowrap"><a href="<?php echo base_url('download/').$data['slug_file'];?>" target="_blank" class="btn btn-success btn-xs"><i class="fa fa-download"></i> Download</a> <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete<?php echo $data['id_file'];?>"><i class="fa fa-trash"></i> Delete</a></td>
                </tr>
                <?php $no++; } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      
      <?php
          foreach ($result as $data) {
      ?>
      <div class="modal fade" id="modal-delete<?php echo $data['id_file'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Confirm Deletion</h4>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('dashboard/delete_files/'.$data['id_file']); ?>">
              <input type="hidden" readonly value="<?php echo $data['file_name'];?>" name="file" class="form-control" >
              <div class="modal-body">
                <p>Are you sure to delete file <b><?php echo $data['file_name'];?></b></p>
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
      <?php } ?>

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