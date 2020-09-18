<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>TeknoWebApp - Not Found</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<!-- Start CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pages/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pages/error.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pages/colors.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pages/app.css');?>">
	<!-- End CSS -->
</head>
<!-- Start Body -->
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
	<!-- Start Content -->
	<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-body">
		<section class="flexbox-container">
			<div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1">
			<div class="card-header bg-transparent no-border pb-0">
				<h2 class="error-code text-xs-center mb-2">404</h2>
				<h3 class="text-uppercase text-xs-center">Page Not Found !</h3>
			</div>
			<div class="card-footer bg-transparent pb-0">
				<div class="row">
				<p class="text-muted text-xs-center col-xs-12 py-1">
					Copyright &copy; <?php echo date("Y");?> by <a href="http://teknowebapp.com" style="color:grey">TeknoWebApp</a>
				</p>
				</div>
			</div>
			</div>
		</section>
		</div>
	</div>
	</div>
	<!-- End Content -->
</body>
<!-- End Body -->
</html>
