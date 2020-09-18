<nav class="navbar navbar-expand-lg navbar-dark position-relative">
    <ul class="social-list list-inline mb-0">
        <?php if ($twitter !== '') { ?>
        <li class="list-inline-item"><a class="text-white" href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter fa-fw faa-tada animated-hover"></i></a></li>
        <?php } ?>
        <?php if ($facebook !== '') { ?>
        <li class="list-inline-item"><a class="text-white" href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-f fa-fw faa-tada animated-hover"></i></a></li>
        <?php } ?>
        <?php if ($google_plus !== '') { ?>        
        <li class="list-inline-item"><a class="text-white" href="<?php echo $google_plus;?>" target="_blank"><i class="fab fa-google-plus fa-fw faa-tada animated-hover"></i></a></li>
        <?php } ?>
        <?php if ($instagram !== '') { ?>        
        <li class="list-inline-item"><a class="text-white" href="<?php echo $instagram;?>" target="_blank"><i class="fab fa-instagram fa-fw faa-tada animated-hover"></i></a></li>
        <?php } ?>
    </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item <?php echo $this->uri->segment(1) == '' ? 'active': '' ?> mr-lg-3">
                <a class="nav-link" href="<?php echo base_url();?>">Home</a>
            </li>
            <li class="nav-item <?php echo $this->uri->segment(1) == 'projects.html' ? 'active': '' ?> <?php echo $this->uri->segment(1) == 'projects' ? 'active': '' ?> <?php echo $this->uri->segment(1) == 'project' ? 'active': '' ?> mr-lg-3">
                <a class="nav-link" href="<?php echo base_url('projects.html');?>">Projects</a>
            </li>
            <li class="nav-item <?php echo $this->uri->segment(1) == 'blog.html' ? 'active': '' ?> <?php echo $this->uri->segment(1) == 'blog' ? 'active': '' ?> <?php echo $this->uri->segment(1) == 'post' ? 'active': '' ?> mr-lg-3">
                <a class="nav-link" href="<?php echo base_url('blog.html');?>">Blog</a>
            </li>
        </ul>
        <span id="slide-line"></span>
    </div>
</nav>
