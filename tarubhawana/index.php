<!DOCTYPE html>
<html lang="id">
  <head>
     <?php include '../scripts/taru-scripts-header.php';?>
  </head>
  <body>

    <!-- loader -->
  <!--   <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div> -->

<div class="container-fluid" style="margin-top: 105px;">
	<div class="row">
		
    <!-- main content here -->
    <div class="col-md-12 p-0">

    <!-- main navigation -->
    <?php include '../components/all-navbar.php';?>
    <?php include '../components/taru-top-forms.php';?>
    <?php include '../components/taru-slide-1.php';?>
    <?php include '../components/taru-motion.php';?>
    <?php // include '../components/taru-brochure.php';?>
    <?php include '../components/taru-tour.php';?>
    <?php include '../components/taru-eco-feature.php';?>

     <!--  button to top -->
   <!--  <a id="prevyes" class="text-white" onclick="tekanprev()"><i class="text-white fas fa-backward"></i>&nbsp;SEBELUMNYA   </a> -->
    <a href="https://wa.me/+6287722683888?text=Saya tertarik dengan Produk di Kota Baru Parahyangan ">
      <img src="../assets/img/wa.png"  id="fixedbuttonimage">
    </a>    
    <a onclick="openNav()"target="_blank">
      <img src="../assets/img/form-r.png" id="fixedbuttonimage2">
    </a> 
    <a href="https://goo.gl/maps/HFtT4jz633DzrvQi6" target="_blank">
      <img src="../assets/img/map.png" id="fixedbuttonimage3">
    </a> 
   
  <!--   <a id="nextyes" class="text-white" onclick="tekannext()">SELANJUTNYA&nbsp;<i class="text-white fas fa-forward"></i>  -->
    
  		
		</div><!-- /end main content -->
	
  </div><!-- /end row main -->  

</div><!-- /end container main -->

  <!-- footer row -->
  <div id="footer" class="container-fluid bg-footer-kbp text-center mt-2">
    <?php include '../components/all-footer.php';?>
  </div><!-- /footer row -->

  <?php include '../scripts/sim-scripts-footer.php';?>
  </body>
</html>