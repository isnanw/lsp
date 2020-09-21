    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>SMK Negeri 2 Karanganyar adalah salah satu Sekolah Menengah Kejuruan favorit di Kabupaten Karanganyar. Dan merupakan sekolah yang terbaik, berwawasan, disiplin, tanggung jawab, dan bermoral baik.</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              Jln. Yos Sudarso, Bejen, Kab. Karanganyar<br>
              Jawa Tengah, Indonesia<br>
              Phone: 0271-494549<br>
              Email: <a href="mailto:support@smkn2kra.sch.id">support@smkn2kra.sch.id</a><br>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest News</h2>
            <li>LSP akan diadakan tanggal ...</li>
            <li>Kartu Ujian LSP dapat dicetak pada ...</li>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            2020 © LSP SMK Negeri 2 Karanganyar. ALL Rights Reserved. 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-3 col-sm-4">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-instagram"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-5 col-sm-4 text-right">
            <p class="powered">Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!-- [if lt IE 9]>
    <script src="assets/frontEnd/plugins/respond.min.js"></script>
    <![endif]  -->
    <script src="<?=base_url();?>assets/frontEnd/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/frontEnd/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/frontEnd/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="<?=base_url();?>assets/frontEnd/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?=base_url();?>assets/frontEnd/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?=base_url();?>assets/frontEnd/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <script src="<?=base_url();?>assets/frontEnd/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/frontEnd/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });
    </script>

    <script src="<?=base_url();?>assets/plugins/DataTables/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/plugins/DataTables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>
    
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>