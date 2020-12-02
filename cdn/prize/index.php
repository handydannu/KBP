<!DOCTYPE html>
<html lang="id">
  <head>
     <?php include 'components/scripts-header.php';?>
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
    <?php include 'components/feature.php';?>
    <?php include 'components/navbar.php';?>
    <!-- slider-top -->
    <?php include 'components/hadiah.php';?>
    <?php include 'components/form.php';?>
    <!-- callme -->
    <?php include 'components/callme.php';?>
     <!--  button to top 
    <a id="mybutton" class="text-white" onclick="tekannext()"><i class="text-white fas fa-backward"></i>&nbsp;SEBELUMNYA-->  
    <a id="mybutton3" class="text-white" onclick="tekannext()">SELANJUTNYA&nbsp;<i class="text-white fas fa-forward"></i> 
    </a>
  		
		</div><!-- /end main content -->

    <div class="col-md-2"><!--leave empty --></div>
	
  </div><!-- /end row main -->  

</div><!-- /end container main -->

  <!-- footer row -->
  <div id="footer" class="container-fluid bg-footer-kbp text-center mt-2">
    <?php include 'components/main-footer.php';?>
  </div><!-- /footer row -->

  <?php include 'components/scripts-footer.php';?>
  </body>
</html>