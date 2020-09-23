<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage <?= $headtitle.' - '.$title;?></title>

	<?php $this->load->view("layouts/dashboard/_meta.php") ?>

	<?php $this->load->view("layouts/dashboard/_css.php") ?>
  <link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote.css');?>">
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
          <?= $headtitle;?>
          <small>Manage <?= $headtitle;?></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?= base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Administrator</a></li>
          <li class="active"><?= $headtitle;?></li>
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
          <div id="notifikasi" class="alert alert-success"><strong>Success! </strong> <?= $sukses;?></div>
          <?php } ?>

          <?php 
              $error = $this->session->flashdata('error');
              if($error != ""){
          ?>
          <div id="notifikasi" class="alert alert-danger"><strong>Error! </strong> <?= $error;?></div>
          <?php } ?>

          <!-- End Notifikasi -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table <?= $headtitle;?></h3>
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
                <?php
                    $no = 1;
                    foreach($skema as $data) {
                ?>
                <tr>
                  <td><?=$no++;?></td>
                  <td><image height="50px" src="<?= base_url('assets/images/sertifikasi/').$data['image'] ?>"></image></td>
                  <td> <?=$data['nama'];?></td>
                  <td> <?= substr($data['deskripsi'],0,25).'...';?></td>
                  <td>
                      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#updateDataLokasi<?= $data['id'] ?>"><i class="fa fa-edit "></i></a>
                      <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteDataLokasi<?= $data['id'] ?>"><i class="fa fa-trash-o"></i></a>
                  </td>
                </tr>
                <!--update data-->
                  <div class="modal fade" id="updateDataLokasi<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="addNewDataLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addNewDataLabel">Update Data </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="<?= base_url('admin/updateDataLokasi') ?>" method="post">
                          <div class="modal-body">
                            <input type="hidden" name="kode" id="kode" value="<?= $data['id'] ?>">
                            <!-- <label for="">Lokasi</label>
                            <div class="form-group">
                              <input class="form-control" type="text" name="lokasi" id="lokasi" value="<?= $data['lokasi'] ?>">
                            </div>
                            <label for="">Titik X</label>
                            <div class="form-group">
                              <input class="form-control" type="text" name="x" id="x" value="<?= $data['x'] ?>">
                            </div>
                            <label for="">Titik Y</label>
                            <div class="form-group">
                              <input class="form-control" type="text" name="y" id="y" value="<?= $data['y'] ?>">
                            </div> -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                  <!--delete data-->
                  <div class="modal fade" id="deleteDataLokasi<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="addNewDataLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addNewDataLabel">Hapus Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Anda yakin ingin menghapus data lokasi '<?= $data['nama'] ?>'</p>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a href="<?= base_url('admin/deleteDataLokasi?kode=') ?><?= $data['id'] ?>" class="btn btn-primary">Hapus</a>
                        </div>

                      </div>
                    </div>
                  </div>
                    <?php } ?>
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
              <h4 class="modal-title">Add <?= $headtitle;?></h4>
            </div>
            <form enctype="multipart/form-data" action="<?= base_url('SertifikasiBackEnd/save_skemasertifikasi');?>" method="post">
              <div class="modal-body">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Skema Sertifikasi</label>
                    <input type="text" class="form-control" name="judul" placeholder="Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Image</label><br>
                      <div class="btn btn-default btn-file">
                          <i class="fa fa-image"></i> Image
                          <input type="file" name="image">
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
                <button type="submit" class="btn btn-primary">Save</button>
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
      
      <div class="modal fade" id="modal-delete<?= $data['id_article'];?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Confirm Deletion</h4>
            </div>
            <form class="form-horizontal" method="post" action="<?= base_url('dashboard/delete_article/'.$data['id_article']); ?>">
              <input type="hidden" readonly value="<?= $data['thumb_article'];?>" name="gambar" class="form-control" >
              <div class="modal-body">
                <p>Are you sure to delete article <b><?= $data['title_article'];?></b></p>
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

      <!-- <?= $pagination; ?> -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view("layouts/dashboard/_footer.php") ?>

  </div>
  <script src="<?= base_url('assets/js/jquery-3.4.0.min.js');?>"></script>
	<script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.js');?>"></script>
  
  <!-- ./wrapper -->
  <?php $this->load->view("layouts/dashboard/_js.php") ?>
  <!-- Summernote WYSIWYG -->
  <script src="<?= base_url('assets/plugins/summernote/summernote.js');?>"></script>
  <script type="text/javascript">
    $(document).ready(function(){
			$('#summernote').summernote({
				height: "100px",
			});
    });
  </script>
	

</body>
</html>