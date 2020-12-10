<!DOCTYPE html>
<html lang="id">
  <head>
     <?php include '../scripts/dec-scripts-header.php';?>
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
    <?php include '../components/dec-feature.php';?>
    <?php include '../components/dec-info.php';?>
    <?php// include 'components/hadiah.php';?>
    <?php include '../components/dec-form.php';?>
    <?php include '../components/dec-callme.php';?>
    <a id="nextyes" class="text-white" onclick="tekannext()">SELANJUTNYA&nbsp;<i class="text-white fas fa-forward"></i> 
    </a>
  		
		</div><!-- /end main content -->

    <div class="col-md-2"><!--leave empty --></div>
	
  </div><!-- /end row main -->  

</div><!-- /end container main -->

  <!-- footer row -->
  <div id="footer" class="container-fluid bg-footer-kbp text-center mt-2">
    <?php include '../components/all-footer.php';?>
  </div><!-- /footer row -->

  <?php include '../scripts/dec-scripts-footer.php';?>
  </body>
</html>