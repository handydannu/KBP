<!DOCTYPE html>
<html lang="id">
  <head>
     <?php include 'front/scripts-header.php';?>
  </head>
  <body>

   <!--  loader
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div> -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"><!--leave empty --></div>
		
    <!-- main content here -->
    <div class="col-md-8">

    <!-- main navigation -->
    <?php include 'front/navbar.php';?>
    <!-- slider-top -->
    
    <?php include 'front/slider-mid-b.php';?>
    <!-- button to top -->
    <a id="mybutton" class="text-white" onclick="tekan()"><i class="text-white fas fa-backward"></i>&nbsp;SEBELUMNYA
    <!-- button to top 
    <a id="mybutton"><i class="text-white fas fa-chevron-up"></i></a>-->
    </a>
  		
		</div><!-- /end main content -->

    <div class="col-md-2"><!--leave empty --></div>
	
  </div><!-- /end row main -->  

</div><!-- /end container main -->

  <!-- footer row -->
  <div id="footer" class="fixed-bottom container-fluid bg-footer-kbp text-center mt-2">
    <?php include 'front/main-footer.php';?>
  </div><!-- /footer row -->

  <?php include 'front/scripts-footer.php';?>
  </body>
</html>