<!DOCTYPE html>
<html lang="id">
  <head>
     <?php include '../scripts/hun-scripts-header.php';?>
  </head>
  <body>
    
  <!-- loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"><!--leave empty --></div>
		
    <!-- main content here -->
    <div class="col-md-8">

    <!-- main navigation -->
    <?php include '../components/all-navbar.php';?>
    <!-- slider-top -->
    <?php include '../components/hun-slider-top.php';?>
    <!-- text-top -->
    <?php include '../components/hun-text-top.php';?>
    <!-- form -->
    <?php include '../components/hun-form.php';?>
    <!-- slider mid a -->
    <?php include '../components/hun-slider-mid-a.php';?>
    <!-- slider mid b -->
    <?php include '../components/hun-slider-mid-b.php';?>
    <!-- video -->
    <?php include '../components/hun-videos.php';?>
    <!-- arsitektur -->
    <?php include '../components/hun-arsitektur.php';?>
    <!-- 4 thumbs -->
    <?php include '../components/all-callme.php';?>
    <!-- 4 thumbs -->
    <?php include '../components/all-thumb-below.php';?>
    <!-- 4 thumbs -->
    <?php include '../components/hun-peta-ruko.php';?>
  
    <a id="mybutton" class="text-white" onclick="tekan()"><i class="text-white fas fa-backward"></i>&nbsp;SEBELUMNYA
    <!--   button to top disable  
    <a id="mybutton2" class="text-white" onclick="tekannext()">SELANJUTNYA&nbsp;<i class="text-white fas fa-forward"></i> -->
    <!-- button to top 
    <a id="mybutton"><i class="text-white fas fa-chevron-up"></i></a>-->
    </a>
  		
		</div><!-- /end main content -->

    <div class="col-md-2"><!--leave empty --></div>
	
  </div><!-- /end row main -->  

</div><!-- /end container main -->

  <!-- footer row -->
  <div id="footer" class="container-fluid bg-footer-kbp text-center mt-2">
    <?php include '../components/all-footer.php';?>
  </div><!-- /footer row -->

  <?php include '../scripts/hun-scripts-footer.php';?>
  </body>
</html>