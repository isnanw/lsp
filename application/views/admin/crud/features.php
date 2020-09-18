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

          <?php
              if(count($result) == 0){
          ?>
          <div class="callout callout-danger">
            Features not found.
          </div>
          <?php } ?>
          <!-- End Notifikasi -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">List <?php echo $headtitle;?></h3>
              <div class="box-tools">
                <form method='post' action="<?php echo base_url('dashboard/features'); ?>">
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
                  <th width="300px" class="text-nowrap">Name</th>
                  <th width="200px" class="text-nowrap">Website</th>
                  <th width="100px" class="text-nowrap">Status</th>
                  <th width="140px" class="text-nowrap">Created At</th>
                  <th width="140px" class="text-nowrap">Updated At</th>
                  <th class="text-nowrap">Action</th>
                </tr>
                <?php
                  $no = $row+1;
                  foreach ($result as $data) {
                    $status = $data['feature_active'];
                ?>
                <tr>
                  <td><b><?php echo $no;?></b></td>
                  <td class="text-nowrap"><a href="<?php echo $data['feature_web'];?>" target="_blank"><?php echo $data['feature_name'];?></a></td>
                  <td class="text-nowrap"><a href="<?php echo $data['feature_web'];?>" target="_blank"><?php echo $data['feature_web'];?></a></td>
                  <td class="text-nowrap"><?php if($status == '1') { ?><span class="label label-primary">Approve</span><?php } else { ?><span class="label label-danger">Denied</span><?php } ?></td>
                  <td class="text-nowrap"><?php echo format_indo($data['created_at']);?></td>
                  <td class="text-nowrap"><?php echo format_indo($data['updated_at']);?></td>
                  <td class="text-nowrap"><a href="" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-edit<?php echo $data['id_feature'];?>"><i class="fa fa-pencil"></i> Edit</a> <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete<?php echo $data['id_feature'];?>"><i class="fa fa-trash"></i> Delete</a></td>
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
      <div class="modal fade" id="modal-delete<?php echo $data['id_feature'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Confirm Deletion</h4>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url('dashboard/delete_feature/'.$data['id_feature']); ?>">
              <input type="hidden" readonly value="<?php echo $data['feature_image'];?>" name="gambar" class="form-control" >
              <div class="modal-body">
                <p>Are you sure to delete feature <b><?php echo $data['feature_name'];?></b></p>
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

      <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Add Feature</h4>
            </div>
            <?php echo form_open_multipart('dashboard/save_feature');?>
              <div class="modal-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="judul" placeholder="Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Website</label>
                    <input type="text" class="form-control" name="web" placeholder="http://" value="http://">
                  </div>
                </div>
                <div class="form-group">
                  <label>Publish</label>
                  <select class="form-control select2" name="status" style="width: 100%;">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Logo</label><br>
                  <div class="btn btn-default btn-file">
                    <i class="fa fa-image"></i> Image
                    <input type="file" name="gambar">
                  </div>
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

      <?php
          foreach ($result as $data) {
      ?>
      <div class="modal fade" id="modal-edit<?php echo $data['id_feature'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Feature</h4>
            </div>
            <?php echo form_open_multipart('dashboard/edit_feature');?>
              <div class="modal-body">
                <input type="hidden" readonly value="<?php echo $data['id_feature'];?>" name="id" class="form-control" >
                <input type="hidden" readonly value="<?php echo $data['feature_image'];?>" name="gambar" class="form-control" >
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="judul" placeholder="Name" value="<?php echo $data['feature_name'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Website</label>
                    <input type="text" class="form-control" name="web" placeholder="http://" value="<?php echo $data['feature_web'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label>Publish</label>                  
                  <select class="form-control select2" name="status" style="width: 100%;">
                    <?php if($data['feature_active'] == '1') { ?>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                    <?php } else { ?>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <img style="width: 150px; height:auto;" src="<?php echo base_url('assets/images/logos/').$data['feature_image'];?>">
                </div>
                <div class="form-group">
                  <label>Logo</label><br>
                  <div class="btn btn-default btn-file">
                    <i class="fa fa-image"></i> Image
                    <input type="file" name="gambar">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger">Save</button>
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