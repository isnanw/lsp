<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/images/'.$foto);?>" class="img-circle" alt="<?php echo $this->session->userdata("name");?>">
            </div>
            <div class="pull-left info">
                <p style="font-size:13px"><?php echo $this->session->userdata("name");?></p>
                <!-- Status -->
                <span style="font-size:12px"><i class="fa fa-circle text-success"></i> Administrator</span>
            </div>
        </div>
<hr>
        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li class="<?php echo $this->uri->segment(2) == '' ? 'active': '' ?>"><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'profile.html' ? 'active': '' ?> treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Master</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo $this->uri->segment(2) == 'setting.html' ? 'active': '' ?>"><a href="<?php echo base_url('dashboard/setting.html');?>"><i class="fa fa-circle-o"></i> Setting</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span> Sertifikasi</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Skema Sertifikasi</a></li>
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Asesor Kompetensi</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Tempat Ujian Kopetensi</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Pemegang Sertifikat</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> SMK Jejaring Kerja</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span> Informasi</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Agenda Kegiatan</a></li>
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Foto Kegiatan</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Berita</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Tanya Jawab</a></li>
                </ul>
            </li>

            <li class="<?php echo $this->uri->segment(2) == 'pendaftar.html' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'pendaftar.html' ? 'active': '' ?><?php echo $this->uri->segment(2) == 'pendaftar' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'post' ? 'active': '' ?>"><a href="<?php echo base_url('dashboard/pendaftar.html');?>"><i class="fa fa-file-text"></i> <span>Pendaftar</span></a></li>

            <li class="<?php echo $this->uri->segment(2) == 'download.html' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'download.html' ? 'active': '' ?><?php echo $this->uri->segment(2) == 'download' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'post' ? 'active': '' ?>"><a href="<?php echo base_url('dashboard/download.html');?>"><i class="fa fa-file-text"></i> <span> File Download</span></a></li>

            <li class="<?php echo $this->uri->segment(2) == 'kontak.html' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'kontak.html' ? 'active': '' ?><?php echo $this->uri->segment(2) == 'articles' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'post' ? 'active': '' ?>"><a href="<?php echo base_url('dashboard/kontak.html');?>"><i class="fa fa-file-text"></i> <span>Kontak Kami</span></a></li>

            <li class="<?php echo $this->uri->segment(2) == 'articles.html' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'article.html' ? 'active': '' ?><?php echo $this->uri->segment(2) == 'articles' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'post' ? 'active': '' ?>"><a href="<?php echo base_url('dashboard/articles.html');?>"><i class="fa fa-file-text"></i> <span>Articles</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'projects.html' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'project.html' ? 'active': '' ?><?php echo $this->uri->segment(2) == 'projects' ? 'active': '' ?><?php echo $this->uri->segment(3) == 'project' ? 'active': '' ?>"><a href="<?php echo base_url('dashboard/projects.html');?>"><i class="fa fa-rocket"></i> <span>Projects</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'category.html' ? 'active': '' ?><?php echo $this->uri->segment(2) == 'category' ? 'active': '' ?>"><a href="<?php echo base_url('dashboard/category.html');?>"><i class="fa fa-tag"></i> <span>Category</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
