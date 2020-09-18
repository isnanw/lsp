<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
	$details = $article->row_array();
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo ucwords($this->uri->segment(2)).' '.$headtitle.' '.$details['title_article'].' - '.$title;?></title>

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
          <small><?php echo ucwords($this->uri->segment(2)).' '.$headtitle;?></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Administrator</a></li>
          <li><?php echo ucwords($this->uri->segment(2));?></li>
          <li class="active"><?php echo $headtitle;?></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo ucwords($this->uri->segment(2)).' '.$headtitle;?></h3>
            </div>
            <!-- /.box-header -->
            <?php echo form_open_multipart('dashboard/update_blog');?>
              <div class="box-body">
                <input type="hidden" readonly value="<?php echo $details['id_article'];?>" name="id" class="form-control" >
                <input type="hidden" readonly value="<?php echo $details['thumb_article'];?>" name="gambar" class="form-control" >
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="judul" placeholder="Title" value="<?php echo $details['title_article'];?>">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control select2" name="kategori" style="width: 100%;">
                    <option hidden value="<?php echo $details['id_category'];?>"><?php echo $details['category_name'];?></option>
                    <?php
                      foreach ($tag['tag'] as $row):
                    ?>
                    <option value="<?php echo $row->id_category;?>"><?php echo $row->category_name;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Publish</label>
                  <select class="form-control select2" name="status" style="width: 100%;">
                    <?php if($details['article_active'] == '1') { ?>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                    <?php } else { ?>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Featured</label>
                  <select class="form-control select2" name="fitur" style="width: 100%;">
                    <?php if($details['featured'] == '1') { ?>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                    <?php } else { ?>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Content</label>
                  <textarea id="summernote" name="isi" rows="10" cols="80"><?php echo $details['content_article'];?></textarea>
                </div>
                <div class="form-group">
                  <label>Thumbnail</label><br>
                  <div class="btn btn-default btn-file">
                    <i class="fa fa-image"></i> Image
                    <input type="file" name="gambar">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('dashboard/articles.html');?>" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i> Back</a>
                  <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Publish</button>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view("layouts/dashboard/_footer.php") ?>

  </div>
  <!-- ./wrapper -->

  <?php $this->load->view("layouts/dashboard/_js.php") ?>

  <!-- Summernote WYSIWYG -->
	<script src="<?php echo base_url('assets/js/jquery-3.4.0.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.js');?>"></script>
  <script src="<?php echo base_url('assets/plugins/summernote/summernote.js');?>"></script>
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