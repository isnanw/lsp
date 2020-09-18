<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
	$details = $fileinfo->row_array();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $headtitle .' '. $details['file_name'] .' - '. $title;?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/download.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css');?>">
    <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery.min.js');?>"><\/script>')</script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-3.3.1.min.js');?>"></script>
    <script type="text/javascript">
      var counter = 10;
      function countDown() {
        if(counter >= 0) {
          document.getElementById("timer").innerHTML = counter;
        } else {
          download();
          return;
        }
        counter -= 1;
        var counter2 = setTimeout("countDown()",1000);
        return;
      }

      function download() {
        document.getElementById("link").innerHTML = "<button onclick=window.location.href='<?php echo base_url('assets/uploads/').$details['file_name'];?>' class='btn btn-sm btn-primary'> Download</button>";
      }
   </script>
  </head>
  <body onload="countDown();" class="">
    <div class="page">
      <div class="page-content">
        <div class="container text-center">
          <a href=""><img src="<?php echo base_url('assets/images/ads/free.728x90.png');?>"></a><p></p>
          <div class="text-dark mb-1" style="font-size: 20px;"><?php echo $details['file_name'];?></div>
          <div class="mb-3" style="font-size: 14px;">File Size : <?php echo format_size($details['file_size']);?></div>
          <p class="lead" id="link" style="font-size:14px;">menyiapkan link&hellip; <span id="timer"></span></p>
          <p></p><a href=""><img src="<?php echo base_url('assets/images/ads/free.728x90.png');?>"></a>
        </div>
      </div>
    </div>
  </body>
</html>