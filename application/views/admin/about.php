<!DOCTYPE html>
<html>
<head>
    <title><?php echo $headtitle.' - '.$title;?></title>

	<?php $this->load->view("layouts/dashboard/_meta.php") ?>

	<?php $this->load->view("layouts/dashboard/_css.php") ?>

  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote.css');?>">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<?php $this->load->view("layouts/dashboard/_nav.php") ?>

	<?php $this->load->view("layouts/dashboard/_sidebar.php") ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                <?php echo $headtitle;?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Administrator</a></li>
                <li class="active"><?php echo $headtitle;?></li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                <!-- End Notifikasi -->
                </div>
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#setting" data-toggle="tab">Profile Instansi</a></li>
                            <li><a href="#sosmed" data-toggle="tab">Visi dan Misi</a></li>
                            <li><a href="#organisasi" data-toggle="tab">Struktur Organisasi</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="setting">
                                <form method="post" action="<?php echo base_url('TentangKami/update_instansi');?>" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <input type="hidden" readonly value="<?php echo $id_visimisi;?>" name="id" class="form-control" >
                                        <div class="form-group">
                                            <label>NPSN</label>
                                            <input type="text" class="form-control" name="NPSN" placeholder="NPSN" value="<?php echo $NPSN;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Sekolah</label>
                                            <input type="text" class="form-control" name="namaSekolah" placeholder="Nama Sekolah" value="<?php echo $nama_profile;?>">
                                        </div>
                                        <div class="form-group">
                                          <label>Deskripsi</label>
                                          <textarea id="summernote" name="deskripsi" rows="10" cols="80"><?= $deskripsi;?></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label>Sampul</label><br>
                                          <div class="btn btn-default btn-file">
                                            <i class="fa fa-image"></i> Image
                                            <input type="file" name="gambar">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="sosmed">
                                <form method="post" action="<?php echo base_url('TentangKami/updateHomeAbout');?>" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <input type="hidden" readonly value="<?php echo $id_visimisi;?>" name="id" class="form-control" >
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label>Visi</label>
                                                <textarea type="text" class="form-control" name="visi" placeholder="Visi"><?= $visi;?></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group">
                                                  <label>Misi</label>
                                                  <textarea id="summernote1" name="misi" rows="10" cols="80"><?= $misi;?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label>Gambar</label><br>
                                          <div class="btn btn-default btn-file">
                                            <i class="fa fa-image"></i> Image
                                            <input type="file" name="gambar">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="organisasi">
                                <form method="post" action="<?php echo base_url('TentangKami/updateHomeAbout');?>" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <input type="hidden" readonly value="<?php echo $id_profile;?>" name="id" class="form-control" >
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                              <label>Gambar</label><br>
                                              <div class="btn btn-default btn-file">
                                                <i class="fa fa-image"></i> Image
                                                <input type="file" name="gambar">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="form-group">
                                                  <label>Deskripsi</label>
                                                  <textarea id="summernote2" name="organisasi" rows="10" cols="80"><?= $misi;?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

	<?php $this->load->view("layouts/dashboard/_footer.php") ?>

</div>

<?php $this->load->view("layouts/dashboard/_js.php") ?>
 <!-- Summernote WYSIWYG -->
	<script src="<?php echo base_url('assets/js/jquery-3.4.0.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/summernote/summernote.js');?>"></script>
  <script type="text/javascript">
    $(document).ready(function(){
			$('#summernote1').summernote({
				height: "300px",
			});
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
			$('#summernote2').summernote({
				height: "500px",
			});
    });
  </script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#summernote').summernote({
				height: "300px",
				callbacks: {
          onImageUpload: function(image) {
            uploadImage(image[0]);
          },
          onMediaDelete : function(target) {
            deleteImage(target[0].src);
          }
				}
			});

			function uploadImage(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
          url: "<?php echo site_url('dashboard/upload_image_post_article')?>",
          cache: false,
          contentType: false,
          processData: false,
          data: data,
          type: "POST",
          success: function(url) {
            $('#summernote').summernote("insertImage", url);
          },
          error: function(data) {
              console.log(data);
          }
        });
			}

			function deleteImage(src) {
        $.ajax({
          data: {src : src},
          type: "POST",
          url: "<?php echo site_url('dashboard/delete_image_post_article')?>",
          cache: false,
          success: function(response) {
              console.log(response);
          }
        });
			}
		});
	</script>


</body>
</html>