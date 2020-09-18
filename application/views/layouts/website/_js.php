<!-- Animation -->
<script>
    var myVar;
    function myLoader(){
        myVar = setTimeout(showPage, 500);
    }
    function showPage(){
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>
<!-- Javascript -->          
<script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-3.3.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/popper.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>  
<script type="text/javascript" src="<?php echo base_url('assets/plugins/back-to-top.js');?>"></script>    

<!-- Page Specific JS -->
<script type="text/javascript" src="<?php echo base_url('assets/plugins/flickity/flickity.pkgd.min.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/plugins/imagesloaded.pkgd.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/isotope.pkgd.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/highlight/highlight.pack.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-social-share-bar/js/jquery-social-share-bar.js');?>"></script>

<!-- Custom JS -->
<script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/flickity-custom.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/isotope-custom.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/form.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/code-highlight.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/social-share-bar.js');?>"></script>
