<!-- <script src="assets/js/jquery.min.js"></script>  -->
<!-- 
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/hover-box.js"></script>
<script src="assets/js/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
// open new windows url	
var btn = $('#mybutton');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

function tekan() {
  location.replace("../index.php")
}

// btn.on('click', openNewWindow = function tekan() {

//  window.location.href = "http://www.w3schools.com";

// });
</script>

<script>
	$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none",
        helpers : {
        title: {
        type: 'outside'
        }
    }
    });

  $(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        padding : 0
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>