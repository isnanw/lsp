<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
	$details = $blog->row_array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $details['title_article'] ." - ". $title;?></title>

    <?php $this->load->view("layouts/website/_meta.php") ?>

    <?php $this->load->view("layouts/website/_css.php") ?>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/atom-one-dark.min.css');?>">
</head>

<body onload="myLoader()" style="margin:0;">
	<div id="loader"></div>
	<div style="display:none;" id="myDiv" class="animate-bottom">
    <header class="header" id="blog-post-top">
        <div class="top-bar theme-bg-primary-darken">
            <div class="container-fluid">
                <?php $this->load->view("layouts/website/_nav.php") ?>
            </div>
        </div>
        <div class="header-intro theme-bg-primary text-white py-5">
	        <div class="container text-center">
		        <h2 class="page-heading mb-1">
					<?php echo $details['title_article'];?>
				</h2>
		        <div class="page-heading-tagline mx-auto mb-3"></div>
		        <ul class="page-heading-post-meta list-inline mb-0">
					<li class="list-inline-item mr-3"><i class="far fa-clock mr-2"></i><?php echo format_indo($details['created_at']);?></li>
					<li class="list-inline-item mr-3"><i class="fas fa-folder-open mr-2"></i><a href=""><?php echo $details['category_name'];?></a></li>
					<li class="list-inline-item"><i class="fas fa-comment mr-2"></i><a href="#comments">8 Comments</a></li>
				</ul>
	        </div>
        </div>
    </header>

    <section class="single-col-max-width py-3 bg-white my-4 pt-4 px-4 mx-auto padding-mobile" style="border-radius:5px; border:1px solid #ebeef2;">
		<div class="section-row">
			<?php if($details['thumb_article'] !== '') { ?>
			<div class="cover-image mb-4">
				<img class="img-fluid" src="<?php echo base_url('assets/images/blog/'.$details['thumb_article']);?>" alt="<?php echo $details['title_article'];?>">
			</div>
			<?php } ?>
			<?php echo $details['content_article'];?>
			<a href=""><img class="center my-4" src="<?php echo base_url('assets/images/ads/free.728x90.png');?>"></a>
			<div class="author-block my-4 bg-light p-3 p-l-5" style="border:2px solid #ebeef2;">
				<div class="media flex-column flex-md-row">
					<img class="author-profile profile-small d-inline-block rounded-circle mr-md-4 mb-2 mb-lg-0" src="<?php echo base_url('assets/images/'.$foto);?>" alt="<?php echo $nama;?>">
					<div class="author-info media-body">
						<h5 class="mb-2">
							<?php echo $nama;?>
						</h5>
						<div class="mb-3">
							<?php echo $tentang;?> You can follow me via the various channels below:
						</div>
						<ul class="social-list-color list-inline mb-0">
							<?php if ($twitter !== '') { ?>
							<li class="list-inline-item mb-3"><a class="twitter rounded-circle" href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
							<?php } ?>
							<?php if ($facebook !== '') { ?>
							<li class="list-inline-item mb-3"><a class="facebook rounded-circle" href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-f fa-fw"></i></a></li>
							<?php } ?>
							<?php if ($google_plus !== '') { ?>
							<li class="list-inline-item mb-3"><a class="googleplus rounded-circle" href="<?php echo $google_plus;?>" target="_blank"><i class="fab fa-google-plus fa-fw"></i></a></li>
							<?php } ?>
							<?php if ($instagram !== '') { ?>
							<li class="list-inline-item mb-3"><a class="instagram rounded-circle" href="<?php echo $instagram;?>" target="_blank"><i class="fab fa-instagram fa-fw"></i></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="comments" class="comments bg-white py-3 mb-3 px-4">
				<div id="disqus_thread"></div>
				<script type="text/javascript">
					/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
					var disqus_shortname = 'teknowebapp'; // required: replace example with your forum shortname

					/* * * DON'T EDIT BELOW THIS LINE * * */
					(function() {
						var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
						dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				<a href="http://disqus.com/" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
			</div>
		</div>
	</section>

	<?php $this->load->view("layouts/website/_touch.php") ?>

    <?php $this->load->view("layouts/website/_footer.php") ?>

    <!--//add jquery social share bar (configure your channels in js)-->
    <div id="share-bar"></div>

    <?php $this->load->view("layouts/website/_js.php") ?>

	<script type="text/javascript" src="<?php echo base_url('assets/js/highlight.min.js');?>"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('pre').each(function(i, block) {
				hljs.highlightBlock(block);
			});
		});
	</script>

</body>
</html>
