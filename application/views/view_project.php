<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
	$details = $projects->row_array();
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $headtitle ." - ". $details['project_name'];?></title>

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
	        <div class="container text-center">		        
		        <h2 class="page-heading mb-2">
                    <?php echo $details['project_name'];?>
                </h2>
		        <div class="page-heading-tagline mx-auto mb-3"></div>
		        <ul class="page-heading-post-meta list-inline mb-0">
					<li class="list-inline-item" style="font-size:17px"><?php echo $details['short_desc'];?></li>
				</ul>
        </div>
    </header>
        
    <section class="single-col-max-width py-3 bg-white my-4 pt-4 px-4 mx-auto padding-mobile" style="border-radius:5px; border:1px solid #ebeef2;">
        <div class="section-row">
            <?php if($details['thumb_project'] !== '') { ?>
            <div class="mb-4">
                <img class="img-fluid" src="<?php echo base_url('assets/images/projects/'.$details['thumb_project']);?>" alt="<?php echo $details['project_name'];?>">
            </div>
            <?php } ?>
            <h3 class="section-title">
                Project Background
            </h3>
            <p><?php echo $details['project_desc'];?></p>
            <div class="mb-3">
                <button onclick="preview();" <?php if($details['client_web'] == '') { echo "disabled"; };?> class="btn btn-primary btn-sm"><i class="fas fa-external-link-alt mr-2"></i> View Live Site</button> <button onclick="price();" <?php if($details['price'] == '') { echo "disabled"; };?> class="btn btn-success btn-sm"><i class="fas fa-shopping-cart mr-2"></i> Buy</button>
            </div>
        </div>
    </section>

    <?php $this->load->view("layouts/website/_touch.php") ?>

    <?php $this->load->view("layouts/website/_footer.php") ?>

    <script>
        function preview(url) {
            var x = window.open('<?php echo $details['client_web'];?>','_blank');
            x.focus();
        }

        function price(url) {
            var x = window.open('<?php echo $details['price'];?>','_blank');
            x.focus();
        }
    </script>

	<?php $this->load->view("layouts/website/_js.php") ?>

</body>
</html> 