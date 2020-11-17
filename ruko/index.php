<!DOCTYPE html>
<html lang="id">
<head>
	<!-- the script -->
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
		
		<?php include 'components/navbar.php';?>

		<?php include 'components/top-carousel.php';?>		
		<!-- lead -->
		<?php include 'components/leads.php';?>	
		<!-- form contact
		<?php //include 'components/form-contact.php';?>	-->
		<!-- video -->
		<?php include 'components/videos.php';?>
		<!-- after lead -->
		<?php include 'components/masterplan.php';?>
		<!-- peta lokasi -->
		<?php include 'components/peta-lokasi.php';?>
		<!-- slider -->		
		<?php include 'components/bot-carousel.php';?>

		<a id="mybutton" class="text-white" onclick="tekan()">SELANJUTNYA&nbsp;<i class="text-white fas fa-forward"></i></a>
	</div>
	<div class="col-md-2"></div>

	</div>
</div>	
  <!-- footer row -->
  <div id="footer" class="container-fluid bg-footer-kbp text-center mt-2">
		<?php include 'components/footer.php';?>
  </div><!-- /footer row -->
	<!-- the script -->
	<?php include 'components/scripts-footer.php';?>	
</body>
</html>