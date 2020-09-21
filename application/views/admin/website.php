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
                            <li class="active"><a href="#setting" data-toggle="tab">Website</a></li>
                            <li><a href="#sosmed" data-toggle="tab">Kontak</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="setting">
                                <form method="post" action="<?php echo base_url('auth/update_website');?>" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <input type="hidden" readonly value="<?php echo $id_setting;?>" name="id" class="form-control" >
                                        <div class="form-group">
                                            <label>Web Name</label>
                                            <input type="text" class="form-control" name="web_name" placeholder="Web Name" value="<?php echo $title;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Keyword</label>
                                            <input type="text" class="form-control" name="keyword" placeholder="Keyword" value="<?php echo $keyword;?>">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Homepage</label>
                                            <select class="form-control select2" name="style" style="width: 100%;">
                                                <?php if($homepage == '1') { ?>
                                                <option value="1">Portofolio</option>
                                                <option value="2">Personal</option>
                                                <?php } elseif($homepage == '2') { ?>
                                                <option value="2">Personal</option>
                                                <option value="1">Portofolio</option>
                                                <?php } ?>
                                            </select>
                                        </div> -->
                                        <div class="form-group">
                                            <label>Description</label><br>
                                            <textarea name="description" style="width:100%;padding:10px;" rows="2" cols="80"><?php echo $description;?></textarea>
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
                                <form method="post" action="<?php echo base_url('auth/update_websiteKontak');?>" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <input type="hidden" readonly value="<?php echo $this->session->userdata("id");?>" name="id" class="form-control" >
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" name="info_fb" placeholder="https://facebook.com/username" value="<?php echo $info_fb;?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" name="info_twt" placeholder="https://twitter.com/username" value="<?php echo $info_twt;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" name="info_ig" placeholder="https://instagram.com/username" value="<?php echo $info_ig;?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Youtube</label>
                                                <input type="text" class="form-control" name="info_yt" placeholder="https://www.youtube.com/channel/uSerNamE" value="<?php echo $info_yt;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>No Telp</label>
                                                <input type="text" class="form-control" name="info_telp" placeholder="(20xx) 35xxx4" value="<?php echo $info_telp;?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>No Fax</label>
                                                <input type="text" class="form-control" name="info_fax" placeholder="(027x) 3xx54x" value="<?php echo $info_fax;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="info_email" placeholder="username@email.com" value="<?php echo $info_email;?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Embed Peta</label>
                                                <input type="text" class="form-control" name="info_peta" placeholder="<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15942.950233452795!2d140.66900030000002!3d-2.5916045000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686cf5effd4b102f%3A0x9f584f730480b27!2zMsKwMzUnMzEuNSJTIDE0MMKwNDAnMDguMiJF!5e0!3m2!1sid!2sid!4v1600509845921!5m2!1sid!2sid width='600' height='450' frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe>" value="<?php echo $info_peta;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label>Alamat</label>
                                                <textarea type="text" class="form-control" name="info_alamat" placeholder="Jl. Sama Aku, Nikah Sama Dia"><?php echo $info_alamat;?></textarea>
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

</body>
</html>