<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<title><?php echo $title;?></title>

	<?php $this->load->view("layouts/website/_meta.php") ?>

	<?php $this->load->view("layouts/website/_css.php") ?>
</head> 

<body onload="myLoader()" style="margin:0;">
	<div id="loader"></div>
	<div style="display:none;" id="myDiv" class="animate-bottom">
    <header class="header">
        <div class="top-bar theme-bg-primary-darken">
            <div class="container-fluid">
				<?php $this->load->view("layouts/website/_nav.php") ?>
            </div>
		</div>
		<?php if($homepage == '1') { ?>
        <div class="header-intro theme-bg-primary text-white py-5">
	        <div class="container">
		        <div class="profile-teaser media flex-column flex-md-row">
				    <img class="profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 rounded-circle mx-auto" src="<?php echo base_url('assets/images/'.$foto);?>" alt="<?php echo $nama;?>">
					<div class="media-body text-center text-md-left">
						<div class="lead">
							Hello, my name is
						</div>
						<h3 class="mt-0 display-5">
							<?php echo $nama;?>
						</h3>
						<div class="bio mb-3">
							<?php echo $tentang;?>
						</div>
						<a class="theme-btn-on-bg btn btn-sm" href="<?php echo base_url('contact.html');?>">Hire Me</a>
					</div>
				</div>
	        </div>
		</div>
		<?php } elseif($homepage == '2') { ?>
		<div class="header-intro theme-bg-primary text-white py-5">
	        <div class="container">
		        <div class="profile-teaser media flex-column flex-md-row">
					<div class="media-body text-center text-md-left">
						<h2 class="mt-0 display-5">
							Programmer Pengguna Linux
						</h2>
						<div class="bio mb-3">
							Belajar Pemrograman Apapun Menggunakan Linux
						</div>
						<a class="theme-btn-on-bg btn btn-sm" href="<?php echo base_url('blog.html');?>">Mulai Belajar</a>
					</div>
				</div>
	        </div>
		</div>
		<?php } ?>
    </header>

	<?php if($homepage == '1') { ?>
    <section class="section-featured-projects py-1" style="margin-top: 60px">
        <div class="container">
	        <h3 class="section-title font-weight-bold text-center mb-4">
				Featured Projects
			</h3>
	        <div class="project-cards row mb-5">
				<?php
					foreach ($project['project'] as $row):
						$desc = substr($row->project_desc,0,100);
						$totaldesc = strlen($row->project_desc);
				?>
		        <div class="col-12 col-lg-4">
					<div class="card rounded-0 border-0 shadow-sm my-4 mb-lg-0">
						<div class="card-img-container position-relative">
							<?php if($row->thumb_project !== '') { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/projects/'.$row->thumb_project);?>" alt="<?php echo $row->project_name;?>">
							<?php } else { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/projects/no-thumb.jpg');?>" alt="<?php echo $row->project_name;?>">
							<?php } ?>
							<a class="card-img-overlay overlay-content text-left p-lg-4" href="<?php echo base_url('project/'.$row->slug_project);?>">
								<h5 class="card-title font-weight-bold">Client: <?php echo $row->project_name;?></h5>
							    <p class="card-text">
									<?php if($totaldesc<=100) { echo $row->project_desc; } else { echo "$desc&hellip;"; } ?>
								</p>
							</a>
						</div>
						<div class="card-body pb-2">
							<h4 class="card-title mb-2"><a href="<?php echo base_url('project/'.$row->slug_project);?>"><?php echo $row->project_name;?></a></h4>
							<ul class="meta list-inline mb-0 text-muted mb-2" style="font-size:14px">
								<li class="list-inline-item mr-3"><i class="fa fa-tag mr-2"></i><?php echo $row->category_name;?></li>
							</ul>
						</div>
							
				    </div>
				</div>
		        <?php endforeach;?>
			</div>
	        <div class="text-center">
	            <a class="btn btn-sm btn-primary" href="<?php echo base_url('projects.html');?>">View all projects</a>
			</div>
        </div>
    </section>
	<?php } ?>
    
	<?php if($homepage == '1') { ?>
    <section class="section-latest-blog py-5">
        <div class="container">
	        <h3 class="section-title font-weight-bold text-center mb-5">
				Latest Blog Posts
			</h3>
	        <div class="blog-cards row">
				<?php
					foreach ($blog['blog'] as $row):
						$short_content = substr($row->content_article,0,115);
						$totalcontent = strlen($row->content_article);
						$short_title = substr($row->title_article,0,50);
						$totaltitle = strlen($row->title_article);
				?>
		        <div class="col-12 col-lg-4">
			        <div class="card rounded-0 border-0 shadow-sm mb-5">
						<div class="card-img-container position-relative">
							<?php if($row->thumb_article !== '') { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/blog/'.$row->thumb_article);?>" alt="<?php echo $row->title_article;?>">
							<?php } else { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/blog/no-thumb.jpg');?>" alt="<?php echo $row->title_article;?>">
							<?php } ?>
							<div class="card-img-overlay overlay-mask overlay-logo text-center p-0">
						        <div class="overlay-mask-content text-center w-100 position-absolute">
								    <a class="btn btn-sm btn-primary" href="<?php echo base_url('post/'.$row->slug_article.'.html');?>">Read more</a>
						        </div>
						        <a class="overlay-mask-link position-absolute w-100 h-100" href="<?php echo base_url('post/'.$row->slug_article.'.html');?>"></a>
							</div>
						</div>
						<div class="card-body pb-4">
							<h4 class="card-title text-truncate mb-2"><a href="<?php echo base_url('post/'.$row->slug_article.'.html');?>"><?php echo $row->title_article;?></a></h4>
							<div class="card-text">
								<ul class="meta list-inline mb-1">
									<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo format_indo($row->created_at);?></li>
									<li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="<?php echo base_url('post/'.$row->slug_article.'.html');?>#comments">4 Comments</a></li>
								</ul>
								<div class="excerpt">
									<?php if($totalcontent<=115) { echo $row->content_article; } else { echo "$short_content&hellip;"; } ?>
								</div>
							</div>
						</div>
				    </div>
				</div>
		        <?php endforeach;?>
			</div>
		</div>
        <div class="text-center">
            <a class="btn btn-sm btn-primary" href="<?php echo base_url('blog.html');?>">View all posts</a>
		</div>
	</section>
	<?php } elseif($homepage == '2') { ?>
	<section class="section-latest-blog py-4">
        <div class="container">
	        <div class="blog-cards row">
				<?php
					foreach ($blog2['blog2'] as $row):
						$short_title = substr($row->title_article,0,50);
						$totaltitle = strlen($row->title_article);
				?>
		        <div class="col-12 col-lg-4">
			        <div class="card rounded-0 border-0 shadow-sm mb-3 my-4">
						<div class="card-img-container position-relative">
							<?php if($row->thumb_article !== '') { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/blog/'.$row->thumb_article);?>" alt="<?php echo $row->title_article;?>">
							<?php } else { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/blog/no-thumb.jpg');?>" alt="<?php echo $row->title_article;?>">
							<?php } ?>
							<div class="card-img-overlay overlay-mask overlay-logo text-center p-0">
						        <div class="overlay-mask-content text-center w-100 position-absolute">
								    <a class="btn btn-sm btn-primary" href="<?php echo base_url('post/'.$row->slug_article.'.html');?>">Read more</a>
						        </div>
						        <a class="overlay-mask-link position-absolute w-100 h-100" href="<?php echo base_url('post/'.$row->slug_article.'.html');?>"></a>
							</div>
						</div>
						<div class="card-body pb-4">
							<h4 class="card-title text-truncate mb-2"><a href="<?php echo base_url('post/'.$row->slug_article.'.html');?>"><?php echo $row->title_article;?></a></h4>
							<div class="card-text">
								<ul class="meta list-inline mb-1">
									<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo format_indo($row->created_at);?></li>
									<li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="<?php echo base_url('post/'.$row->slug_article.'.html');?>#comments">4 Komentar</a></li>
								</ul>
							</div>
						</div>
				    </div>
				</div>
		        <?php endforeach;?>
			</div>
		</div>
		<a href=""><img class="center my-4" src="<?php echo base_url('assets/images/ads/free.728x90.png');?>"></a>
        <div class="text-center">
            <a class="btn btn-sm btn-primary" href="<?php echo base_url('blog.html');?>">Semua Tutorial</a>
		</div>
	</section>
	<?php } ?>

	<?php $this->load->view("layouts/website/_touch.php") ?>
    
    <?php $this->load->view("layouts/website/_footer.php") ?>

	<?php $this->load->view("layouts/website/_js.php") ?>
    
</body>
</html>