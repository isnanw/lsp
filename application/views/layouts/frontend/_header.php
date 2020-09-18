<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
	<meta name="author" content="Kodinger">
	<meta name="keyword" content="magz, html5, css3, template, magazine template">
	<!-- Shareable -->
	<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
	<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
	<title>Magz &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>scripts/bootstrap/bootstrap.min.css">
	<!-- IonIcons -->
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>scripts/ionicons/css/ionicons.min.css">
	<!-- Toast -->
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>scripts/toast/jquery.toast.min.css">
	<!-- OwlCarousel -->
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>scripts/owlcarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>scripts/magnific-popup/dist/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>scripts/sweetalert/dist/sweetalert.css">
	<!-- Custom style -->
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>css/style.css">
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>css/skins/all.css">
	<link rel="stylesheet" href="<?=base_url('assets/frontEnd/'); ?>css/demo.css">
</head>

<body class="skin-orange">
	<header class="primary">
		<div class="firstbar">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="brand">
							<a href="<?=base_url('assets/frontEnd/'); ?>index.html">
								<img src="<?=base_url('assets/frontEnd/'); ?>images/logo.png" alt="Magz Logo">
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<form class="search" autocomplete="off">
							<div class="form-group">
								<div class="input-group">
									<input type="text" name="q" class="form-control" placeholder="Type something here">
									<div class="input-group-btn">
										<button class="btn btn-primary"><i class="ion-search"></i></button>
									</div>
								</div>
							</div>
							<div class="help-block">
								<div>Popular:</div>
								<ul>
									<li><a href="<?=base_url('assets/frontEnd/'); ?>#">HTML5</a></li>
									<li><a href="<?=base_url('assets/frontEnd/'); ?>#">CSS3</a></li>
									<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Bootstrap 3</a></li>
									<li><a href="<?=base_url('assets/frontEnd/'); ?>#">jQuery</a></li>
									<li><a href="<?=base_url('assets/frontEnd/'); ?>#">AnguarJS</a></li>
								</ul>
							</div>
						</form>
					</div>
					<div class="col-md-3 col-sm-12 text-right">
						<ul class="nav-icons">
							<li><a href="<?=base_url('assets/frontEnd/'); ?>register.html"><i class="ion-person-add"></i>
									<div>Register</div>
								</a></li>
							<li><a href="<?=base_url('assets/frontEnd/'); ?>login.html"><i class="ion-person"></i>
									<div>Login</div>
								</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Start nav -->
		<nav class="menu">
			<div class="container">
				<div class="brand">
					<a href="<?=base_url('assets/frontEnd/'); ?>#">
						<img src="<?=base_url('assets/frontEnd/'); ?>images/logo.png" alt="Magz Logo">
					</a>
				</div>
				<div class="mobile-toggle">
					<a href="<?=base_url('assets/frontEnd/'); ?>#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
				</div>
				<div class="mobile-toggle">
					<a href="<?=base_url('assets/frontEnd/'); ?>#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
				</div>
				<div id="menu-list">
					<ul class="nav-list">
						<li class="for-tablet nav-title"><a>Menu</a></li>
						<li class="for-tablet"><a href="<?=base_url('assets/frontEnd/'); ?>login.html">Login</a></li>
						<li class="for-tablet"><a href="<?=base_url('assets/frontEnd/'); ?>register.html">Register</a></li>
						<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Standard</a></li>
						<li class="dropdown magz-dropdown">
							<a href="<?=base_url('assets/frontEnd/'); ?>category.html">Pages <i class="ion-ios-arrow-right"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?=base_url('assets/frontEnd/'); ?>index.html">Home</a></li>
								<li class="dropdown magz-dropdown">
									<a href="<?=base_url('assets/frontEnd/'); ?>#">Authentication <i class="ion-ios-arrow-right"></i></a>
									<ul class="dropdown-menu">
										<li><a href="<?=base_url('assets/frontEnd/'); ?>login.html">Login</a></li>
										<li><a href="<?=base_url('assets/frontEnd/'); ?>register.html">Register</a></li>
										<li><a href="<?=base_url('assets/frontEnd/'); ?>forgot.html">Forgot Password</a></li>
										<li><a href="<?=base_url('assets/frontEnd/'); ?>reset.html">Reset Password</a></li>
									</ul>
								</li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Category</a></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>single.html">Single</a></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>page.html">Page</a></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>search.html">Search</a></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>contact.html">Contact</a></li>
								<li class="dropdown magz-dropdown">
									<a href="<?=base_url('assets/frontEnd/'); ?>#">Error <i class="ion-ios-arrow-right"></i></a>
									<ul class="dropdown-menu">
										<li><a href="<?=base_url('assets/frontEnd/'); ?>403.html">403</a></li>
										<li><a href="<?=base_url('assets/frontEnd/'); ?>404.html">404</a></li>
										<li><a href="<?=base_url('assets/frontEnd/'); ?>500.html">500</a></li>
										<li><a href="<?=base_url('assets/frontEnd/'); ?>503.html">503</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown magz-dropdown"><a href="<?=base_url('assets/frontEnd/'); ?>#">Dropdown <i class="ion-ios-arrow-right"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Internet</a></li>
								<li class="dropdown magz-dropdown"><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Troubleshoot <i
											class="ion-ios-arrow-right"></i></a>
									<ul class="dropdown-menu">
										<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Software</a></li>
										<li class="dropdown magz-dropdown"><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Hardware <i
													class="ion-ios-arrow-right"></i></a>
											<ul class="dropdown-menu">
												<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Main Board</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">RAM</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Power Supply</a></li>
											</ul>
										</li>
										<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Brainware</a>
									</ul>
								</li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Office</a></li>
								<li class="dropdown magz-dropdown"><a href="<?=base_url('assets/frontEnd/'); ?>#">Programming <i class="ion-ios-arrow-right"></i></a>
									<ul class="dropdown-menu">
										<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Web</a></li>
										<li class="dropdown magz-dropdown"><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Mobile <i
													class="ion-ios-arrow-right"></i></a>
											<ul class="dropdown-menu">
												<li class="dropdown magz-dropdown"><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Hybrid <i
															class="ion-ios-arrow-right"></i></a>
													<ul class="dropdown-menu">
														<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Ionic Framework 1</a></li>
														<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Ionic Framework 2</a></li>
														<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Ionic Framework 3</a></li>
														<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Framework 7</a></li>
													</ul>
												</li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Native</a></li>
											</ul>
										</li>
										<li><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Desktop</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="<?=base_url('assets/frontEnd/'); ?>#">Mega Menu <i
									class="ion-ios-arrow-right"></i>
								<div class="badge">Hot</div>
							</a>
							<div class="dropdown-menu megamenu">
								<div class="megamenu-inner">
									<div class="row">
										<div class="col-md-3">
											<div class="row">
												<div class="col-md-12">
													<h2 class="megamenu-title">Trending</h2>
												</div>
											</div>
											<ul class="vertical-menu">
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
											</ul>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-12">
													<h2 class="megamenu-title">Featured Posts</h2>
												</div>
											</div>
											<div class="row">
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="<?=base_url('assets/frontEnd/'); ?>single.html">
																<img src="<?= base_url('assets/frontEnd/'); ?>images/news/img10.jpg" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 10, 2016</div>
																<div class="category"><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Healthy</a></div>
															</div>
															<h2><a href="<?=base_url('assets/frontEnd/'); ?>single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="<?=base_url('assets/frontEnd/'); ?>single.html">
																<img src="<?=base_url('assets/frontEnd/'); ?>images/news/img11.jpg" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 13, 2016</div>
																<div class="category"><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Lifestyle</a></div>
															</div>
															<h2><a href="<?=base_url('assets/frontEnd/'); ?>single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
														</div>
													</div>
												</article>
												<article class="article col-md-4 mini">
													<div class="inner">
														<figure>
															<a href="<?=base_url('assets/frontEnd/'); ?>single.html">
																<img src="<?=base_url('assets/frontEnd/'); ?>images/news/img14.jpg" alt="Sample Article">
															</a>
														</figure>
														<div class="padding">
															<div class="detail">
																<div class="time">December 14, 2016</div>
																<div class="category"><a href="<?=base_url('assets/frontEnd/'); ?>category.html">Travel</a></div>
															</div>
															<h2><a href="<?=base_url('assets/frontEnd/'); ?>single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
														</div>
													</div>
												</article>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="<?=base_url('assets/frontEnd/'); ?>#">Column <i
									class="ion-ios-arrow-right"></i></a>
							<div class="dropdown-menu megamenu">
								<div class="megamenu-inner">
									<div class="row">
										<div class="col-md-3">
											<h2 class="megamenu-title">Column 1</h2>
											<ul class="vertical-menu">
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 1</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 2</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 3</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 4</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 5</a></li>
											</ul>
										</div>
										<div class="col-md-3">
											<h2 class="megamenu-title">Column 2</h2>
											<ul class="vertical-menu">
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 6</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 7</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 8</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 9</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 10</a></li>
											</ul>
										</div>
										<div class="col-md-3">
											<h2 class="megamenu-title">Column 3</h2>
											<ul class="vertical-menu">
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 11</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 12</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 13</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 14</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 15</a></li>
											</ul>
										</div>
										<div class="col-md-3">
											<h2 class="megamenu-title">Column 4</h2>
											<ul class="vertical-menu">
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 16</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 17</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 18</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 19</a></li>
												<li><a href="<?=base_url('assets/frontEnd/'); ?>#">Example 20</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown magz-dropdown"><a href="<?=base_url('assets/frontEnd/'); ?>#">Dropdown Icons <i class="ion-ios-arrow-right"></i></a>
							<ul class="dropdown-menu">
								<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="icon ion-person"></i> My Account</a></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="icon ion-heart"></i> Favorite</a></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="icon ion-chatbox"></i> Comments</a></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="icon ion-key"></i> Change Password</a></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="icon ion-settings"></i> Settings</a></li>
								<li class="divider"></li>
								<li><a href="<?=base_url('assets/frontEnd/'); ?>#"><i class="icon ion-log-out"></i> Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End nav -->
	</header>