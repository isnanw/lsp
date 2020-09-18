<?php if($homepage == '1') { ?>
<section class="section-cta py-5 bg-primary text-white">
	<div class="container">
		<div class="text-center">
			<img class="profile-small d-inline-block mx-auto rounded-circle mb-2" src="<?php echo base_url('assets/images/'.$foto);?>" alt="<?php echo $nama;?>">
		</div>
		<h3 class="section-title font-weight-bold text-center mb-2">Interested in hiring me for your project?</h3>
		<div class="section-intro mx-auto text-center mb-3">
			Looking for experienced developers in building web applications or delivering your software products? To start the initial chat, just send me an email at <a class="link-on-bg text-white" href="mailto:<?php echo $email;?>"><?php echo $email;?></a> or use the <a class="link-on-bg text-white" href="<?php echo base_url('contact.html');?>">form on the contact page</a>.
		</div>
		<div class="text-center">
			<a class="theme-btn-on-bg btn btn-sm" href="<?php echo base_url('contact.html');?>">Let's Talk</a>
		</div>
	</div>
</section>
<?php } elseif($homepage == '2') { ?>
<section class="section-cta py-5 bg-primary text-white">
	<div class="container">
		<div class="profile-teaser media flex-column flex-md-row">
			<img class="profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 rounded-circle mx-auto" style="height:140px; width:auto" src="<?php echo base_url('assets/images/webdev-icons/about-section.svg');?>" alt="<?php echo $nama;?>">
			<div class="media-body text-center text-md-left">
				<h3 class="mt-0 display-5">
					Tentang <?php echo $title;?>
				</h3>
				<div class="bio mb-3">
					<?php echo $tentang;?>
				</div>
				<a class="theme-btn-on-bg btn btn-sm" href="<?php echo base_url('contact.html');?>">Hubungi</a>
			</div>
		</div>
	</div>
</section>
<?php } ?>
