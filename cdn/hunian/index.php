<!DOCTYPE html>
<html lang="id">
  <head>
     <?php include 'components/scripts-header.php';?>
  </head>
  <body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"><!--leave empty --></div>
		
    <!-- main content here -->
    <div class="col-md-8">

    <!-- main navigation -->
    <?php include 'components/navbar.php';?>
    <!-- slider-top -->
    <?php include 'components/slider-top.php';?>
    <!-- text-top -->
    <?php include 'components/text-top.php';?>
    <!-- form -->
    <?php include 'components/form.php';?>
    <!-- slider mid a -->
    <?php include 'components/slider-mid-a.php';?>
    <!-- slider mid b -->
    <?php include 'components/slider-mid-b.php';?>
    <!-- video -->
    <?php include 'components/videos.php';?>
    <!-- arsitektur -->
    <?php include 'components/arsitektur.php';?>
    <!-- 4 thumbs -->
    <?php include 'components/callme.php';?>
    <!-- 4 thumbs -->
    <?php include 'components/thumb-below.php';?>
    <!-- 4 thumbs -->
    <?php include 'components/peta-ruko.php';?>
    <!-- button to top -->
    <a id="mybutton" class="text-white" onclick="tekan()"><i class="text-white fas fa-backward"></i>&nbsp;SEBELUMNYA
    <a id="mybutton2" class="text-white" onclick="tekannext()">SELANJUTNYA&nbsp;<i class="text-white fas fa-forward"></i>
    <!-- button to top 
    <a id="mybutton"><i class="text-white fas fa-chevron-up"></i></a>-->
    </a>
  		
		</div><!-- /end main content -->

    <div class="col-md-2"><!--leave empty --></div>
	
  </div><!-- /end row main -->  

</div><!-- /end container main -->

  <!-- footer row -->
  <div div id="footer" class="container-fluid bg-footer-kbp text-center mt-2">
    <?php include 'components/main-footer.php';?>
  </div><!-- /footer row -->

  <?php include 'components/scripts-footer.php';?>
  </body>
</html>