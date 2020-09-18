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
	        <div class="container">
		        <h2 class="page-heading mb-3"><?php echo ucfirst($headtitle);?></h2>
				<?php if($homepage == '1') { ?>
		        <div class="page-heading-tagline">In-depth Case Studies to show you what I can offer and how I work.</div>
				<?php } elseif($homepage == '2') { ?>
				<div class="page-heading-tagline">Daftar project atau portofolio milik <?php echo $title;?>.</div>
				<?php } ?>
			</div>
		</div>
    </header>

    <section class="section pt-5">
        <div class="container">
	        <!-- <div class="text-center">
		        <ul id="filters" class="filters mb-5 mx-auto pl-0">
					<li class="type active" data-filter="*">All</li>
					<?php
						foreach ($tag['tag'] as $row):
					?>
	                <li class="type" data-filter=".<?php echo $row->id_category;?>"><?php echo $row->category_name;?></li>
					<?php endforeach;?>
				</ul>
	        </div> -->
	        <div class="project-cards row mb-1">
				<?php
					foreach ($result as $row):
						$desc = substr($row['project_desc'],0,100);
						$totaldesc = strlen($row['project_desc']);
				?>
		        <div class="col-12 col-lg-4 <?php echo $row['id_category'];?>">
					<div class="card rounded-0 border-0 shadow-sm mb-5">
						<div class="card-img-container position-relative">
							<?php if($row['thumb_project'] !== '') { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/projects/'.$row['thumb_project']);?>" alt="<?php echo $row['project_name'];?>">
							<?php } else { ?>
							<img class="card-img-top rounded-0" style="width: 100%; height: 150px;" src="<?php echo base_url('assets/images/projects/no-thumb.jpg');?>" alt="<?php echo $row['project_name'];?>">
							<?php } ?>
							<a class="card-img-overlay overlay-content text-left p-lg-4" href="<?php echo base_url('project/'.$row['slug_project']);?>">
								<h5 class="card-title font-weight-bold">Client: <?php echo $row['project_name'];?></h5>
							    <p class="card-text">
									<?php if($totaldesc<=100) { echo $row['project_desc']; } else { echo "$desc&hellip;"; } ?>
								</p>
							</a>
						</div>
						<div class="card-body pb-2">
							<h4 class="card-title mb-2"><a href="<?php echo base_url('project/'.$row['slug_project']);?>"><?php echo $row['project_name'];?></a></h4>
						</div>
						<div class="card-footer border-0">
							<ul class="meta list-inline mb-0 text-muted" style="font-size:14px">
								<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo format_indo($row['created_at']);?></li>
							</ul>
					    </div>
				    </div>
		        </div>
		        <?php endforeach;?>
			</div>

			<?php
				if(count($result) == 0){
					redirect(base_url('projects.html'));
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