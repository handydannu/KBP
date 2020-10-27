<!DOCTYPE html>
<html lang="en">
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
    <!-- slider mid a -->
    <?php include 'components/slider-mid-a.php';?>
    <!-- slider mid b -->
    <?php include 'components/slider-mid-b.php';?>
    <!-- 4 thumbs -->
    <?php include 'components/callme.php';?>
    <!-- 4 thumbs -->
    <?php include 'components/thumb-below.php';?>
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
  <div div id="footer" class="container-fluid bg-footer-kbp text-center mt-2">
    <?php include 'components/main-footer.php';?>
  </div><!-- /footer row -->

  <?php include 'components/scripts-footer.php';?>
  </body>
</html>