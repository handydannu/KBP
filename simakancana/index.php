<!DOCTYPE html>
<html lang="id">
  <head>
     <?php include '../scripts/sim-scripts-header.php';?>
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
    <?php include '../components/sim-house.php';?>
    <?php include '../components/sim-top-forms.php';?>
    <?php include '../components/sim-feature.php';?>
    <?php include '../components/sim-eco-feature.php';?>
    <?php include '../components/sim-download.php';?>
    <?php include '../components/sim-progress.php';?>
    <?php include '../components/sim-galeri.php';?>
    <!-- video -->
    <?php include '../components/sim-videos.php';?>
    <!-- video -->
    <?php include '../components/all-callme.php';?>
    <!-- 4 thumbs -->
    <?php include '../components/all-thumb-below.php';?>
     <!--  button to top -->
    <a id="prevyes" class="text-white" onclick="tekanprev()"><i class="text-white fas fa-backward"></i>&nbsp;SEBELUMNYA  
  <!--   <a id="nextyes" class="text-white" onclick="tekannext()">SELANJUTNYA&nbsp;<i class="text-white fas fa-forward"></i>  -->
    </a>
  		
		</div><!-- /end main content -->

    <div class="col-md-2"><!--leave empty --></div>
	
  </div><!-- /end row main -->  

</div><!-- /end container main -->

  <!-- footer row -->
  <div id="footer" class="container-fluid bg-footer-kbp text-center mt-2">
    <?php include '../components/all-footer.php';?>
  </div><!-- /footer row -->

  <?php include '../scripts/sim-scripts-footer.php';?>
  </body>
</html>