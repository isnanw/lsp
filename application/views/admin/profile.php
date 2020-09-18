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
                <div class="col-md-3">
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/images/').$foto;?>" alt="User profile picture">
                            <p><h3 class="profile-username text-center"><?php echo $title;?></h3></p>
                            <p class="text-muted text-center">Web Developer</p>
                            <a href="<?php echo base_url('auth/logout');?>" class="btn btn-primary btn-block"><b>Sign Out</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                            <li><a href="#password" data-toggle="tab">Password</a></li>
                            <li><a href="#sosmed" data-toggle="tab">Social Media</a></li>
                            <li><a href="#setting" data-toggle="tab">Setting</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="profile">
                                <form method="post" action="<?php echo base_url('auth/update_profile');?>" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input type="hidden" readonly value="<?php echo $this->session->userdata("id");?>" name="id" class="form-control" >
                                            <input type="hidden" readonly value="<?php echo $foto;?>" name="gambar" class="form-control" >
                                            <label>Full Name</label>
                                                <input type="text" class="form-control" name="fullname" placeholder="Full Name" value="<?php echo $nama;?>">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email;?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $telepon;?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label><br>
                                                <textarea name="address" style="width:100%;padding:10px;" rows="2" cols="80"><?php echo $alamat;?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label><br>
                                                <textarea name="description" style="width:100%;padding:10px;" rows="2" cols="80"><?php echo $tentang;?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Avatar</label><br>
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
                            <div class="tab-pane" id="password">
                                <form method="post" action="<?php echo base_url('auth/update_password');?>" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <input type="hidden" readonly value="<?php echo $this->session->userdata("id");?>" name="id" class="form-control" >
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="newpass" placeholder="Password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Retype Password</label>
                                                <input type="password" class="form-control" name="repass" placeholder="Password">
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
                                <form method="post" action="<?php echo base_url('auth/update_sosmed');?>" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <input type="hidden" readonly value="<?php echo $this->session->userdata("id");?>" name="id" class="form-control" >
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" name="fb" placeholder="http://facebook.com/username" value="<?php echo $facebook;?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" name="twt" placeholder="http://twitter.com/username" value="<?php echo $twitter;?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" name="ig" placeholder="http://instagram.com/username" value="<?php echo $instagram;?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Google Plus</label>
                                                <input type="text" class="form-control" name="gplus" placeholder="http://plus.google.com/username" value="<?php echo $google_plus;?>">
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
                            <div class="tab-pane" id="setting">
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
                                        <div class="form-group">
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
                                        </div>
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