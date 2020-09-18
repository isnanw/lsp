<!-- Fade Alert -->
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500,0).slideUp(500,function(){
            $(this).remove();
        });
    }, 3000);
</script>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/css/AdminLTE/js/adminlte.min.js');?>"></script>
