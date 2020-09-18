<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $pagetitle;?></title>

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
        <div class="header-intro theme-bg-primary text-white py-5">
	        <div class="container position-relative">
		        <div class="media flex-column flex-md-row">
			        <img class="profile-medium d-inline-block rounded-circle mr-md-4 align-self-center mb-2 mb-lg-0" src="<?php echo base_url('assets/images/'.$foto);?>" alt="<?php echo $nama;?>">
			        <div class="media-body align-self-center">
			            <h2 class="page-heading mb-2"><?php echo $headtitle;?></h2>
						<?php if($homepage == '1') { ?>
			            <div class="page-heading-tagline mb-3">I write about web development and life as a developer. <br class="d-lg-block d-none">You can follow me via the various channels below:</div>
						<?php } elseif($homepage == '2') { ?>
						<div class="page-heading-tagline mb-3">Daftar tutorial pemrograman bahasa indonesia. <br class="d-lg-block d-none">Ikuti juga sosial media <?php echo $title;?>:</div>
						<?php } ?>
			            <ul class="social-list-square list-inline mb-0">
							<?php if ($twitter !== '') { ?>
				            <li class="list-inline-item mb-3 mb-lg-0"><a href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter fa-fw text-white"></i></a></li>
							<?php } ?>
							<?php if ($facebook !== '') { ?>
							<li class="list-inline-item mb-3 mb-lg-0"><a href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-f fa-fw text-white"></i></a></li>
							<?php } ?>
							<?php if ($google_plus !== '') { ?>
							<li class="list-inline-item mb-3 mb-lg-0"><a href="<?php echo $google_plus;?>" target="_blank"><i class="fab fa-google-plus fa-fw text-white"></i></a></li>
							<?php } ?>
							<?php if ($instagram !== '') { ?>
							<li class="list-inline-item mb-3 mb-lg-0"><a href="<?php echo $instagram;?>" target="_blank"><i class="fab fa-instagram fa-fw text-white"></i></a></li>
							<?php } ?>
						</ul>
			        </div>
		        </div>
	        </div>
        </div>
    </header>

    <section class="section pt-5">
        <div class="container blog-cards">	        
	        <div class="row">
				<?php
					foreach ($pinned['pinned'] as $row):
						$short_content = substr($row->content_article,0,130);
						$totalcontent = strlen($row->content_article);
						$short_title = substr($row->title_article,0,50);
						$totaltitle = strlen($row->title_article);
				?>
		        <div class="col-12">
			        <div class="featured-card d-md-table card rounded-0 border-0 shadow-sm mb-5">
					<div class="featured-card-image card-img-container position-relative d-md-table-cell" <?php if($row->thumb_article !== '') { ?>style="background: url('<?php echo base_url('assets/images/blog/'.$row->thumb_article);?>') no-repeat center center;" <?php } else { ?>style="background: url('<?php echo base_url('assets/images/blog/no-thumb.jpg');?>') no-repeat center center;"<?php } ?>>					        
						    <span class="badge badge-success mb-2 position-absolute">Featured</span>
						    <div class="card-img-overlay overlay-mask text-center p-0">
						        <a class="overlay-mask-link position-absolute w-100 h-100" href="<?php echo base_url('post/'.$row->slug_article.'.html');?>"></a>
							</div>
						</div>
						<div class="featured-card-body card-body d-md-table-cell pb-4">
							<h4 class="card-title mb-2"><a href="<?php echo base_url('post/'.$row->slug_article.'.html');?>"><?php if($totaltitle<=50) { echo $row->title_article; } else { echo "$short_title&hellip;"; } ?></a></h4>
							<div class="card-text">
								<div class="excerpt mb-3"><?php if($totalcontent<=130) { echo strip_tags($row->content_article); } else { echo strip_tags($short_content)."&hellip;"; } ?></div>
								<a class="btn btn-primary btn-sm d-none d-md-inline-block" href="<?php echo base_url('post/'.$row->slug_article.'.html');?>">Read more</a>
							</div>
						</div>
						<div class="card-footer border-0 d-md-none">
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo format_indo($row->created_at);?></li>
								<li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="<?php echo base_url('post/'.$row->slug_article.'.html');?>#comments">8 Comments</a></li>
							</ul>
						</div>
				    </div>
				</div>
				<?php endforeach;?>
				<?php
					foreach ($result as $row):
						$short_content = substr($row['content_article'],0,115);
						$totalcontent = strlen($row['content_article']);
						$short_title = substr($row['title_article'],0,50);
						$totaltitle = strlen($row['title_article']);
				?>
		        <div class="col-12 col-md-6 col-lg-4 mb-5">
			        <div class="card rounded-0 border-0 shadow-sm eq-height">
						<div class="card-img-container position-relative">
							<?php if($row['thumb_article'] !== '') { ?>
					        <img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/blog/').$row['thumb_article'];?>" alt="<?php echo $row['title_article'];?>">
							<?php } else { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/blog/no-thumb.jpg');?>" alt="<?php echo $row['title_article'];?>">
							<?php } ?>
							<div class="card-img-overlay overlay-mask text-center p-0">
						        <div class="overlay-mask-content text-center w-100 position-absolute">
								    <a class="btn btn-sm btn-primary" href="<?php echo base_url().'post/'.$row['slug_article'].'.html';?>">Read more</a>
						        </div>
						        <a class="overlay-mask-link position-absolute w-100 h-100" href="<?php echo base_url().'post/'.$row['slug_article'].'.html';?>"></a>
							</div>
						</div>
						<div class="card-body pb-4">
							<h4 class="card-title mb-2"><a href="<?php echo base_url().'post/'.$row['slug_article'].'.html';?>"><?php if($totaltitle<=50) { echo $row['title_article']; } else { echo "$short_title&hellip;"; } ?></a></h4>
							<div class="card-text">
								<div class="excerpt">
									<?php if($totalcontent<=115) { echo strip_tags($row['content_article']); } else { echo strip_tags($short_content)."&hellip;"; } ?>
								</div>
							</div>
						</div>
						<div class="card-footer border-0">
							<ul class="meta list-inline mb-0">
								<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo format_indo($row['created_at']);?></li>
								<li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="<?php echo base_url().'post/'.$row['slug_article'].'.html';?>#comments">12 Comments</a></li>
							</ul>
						</div>
				    </div>
		        </div>
		        <?php endforeach;?>
	        </div>

			<?php
				if(count($result) == 0){
					redirect(base_url('blog.html'));
				}
			?>

			<?php echo $pagination;?><br>

        </div>
    </section>
    
    <?php $this->load->view("layouts/website/_touch.php") ?>
    
	<?php $this->load->view("layouts/website/_footer.php") ?>
	
	<?php $this->load->view("layouts/website/_js.php") ?>
</body>
</html>