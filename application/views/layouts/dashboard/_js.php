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
<script src="<?php echo base_url('assets/plugins/DataTables/jQuery-3.3.1/jQuery-3.3.1.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/css/AdminLTE/js/adminlte.min.js');?>"></script>

<script src="<?=base_url();?>assets/plugins/DataTables/DataTables-1.10.22/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/plugins/DataTables/DataTables-1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/plugins/DataTables/Responsive-2.2.6/js/dataTables.responsive.min.js" type="text/javascript"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      responsive: true
    })
  })
</script>
