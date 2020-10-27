<!DOCTYPE html>
<head>
	<!-- the script -->
	<?php include 'components/script-header.php';?>
</head>

<body>
	<!-- Main Container -->
<div class="main-container">	
		<!-- Header -->
		<?php include 'components/header.php';?>
	<div class="container tip">
		<div class="row">		
			<div class="col-lg-1"></div>
					<div class="col-lg-10">
		<?php include 'components/top-carousel.php';?>		
		<!-- lead -->
		<?php include 'components/leads.php';?>	
		<!-- form contact-->
		<?php include 'components/form-contact.php';?>	
		<!-- video -->
		<?php include 'components/videos.php';?>
		<!-- after lead -->
		<?php include 'components/masterplan.php';?>
		<!-- peta lokasi -->
		<?php include 'components/peta-lokasi.php';?>
		<!-- slider -->		
		<?php include 'components/bot-carousel.php';?>
</div>
			<div class="col-lg-1"></div>
	</div>
	</div>

    <a id="mybutton" class="text-white" onclick="tekan()" style="font-size: 16px;">SELANJUTNYA&nbsp;<i class="text-white fas fa-forward"></i>

</div><!-- Main Container -->	
		
	<footer class="footer-main no-padding">
		<!-- Bottom Footer -->
		<div class="container-fluid no-padding bottom-footer">
			<?php include 'components/footer.php';?>
		</div><!-- Bottom Footer /- -->
	</footer>
	<!-- the script -->
	<?php include 'components/script-footer.php';?>	
</body>
</html>