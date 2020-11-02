<!-- <script src="assets/js/jquery.min.js"></script>  -->
<script src="assets/js/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
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

<script type="text/javascript">
	 $(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 4000
    })
    $('.carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
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