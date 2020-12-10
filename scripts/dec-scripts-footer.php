<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- script for loader -->
<script type="text/javascript">    
$(document).ready(function() {
    
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 2000);
    
});
</script>

<!-- script next -prev -->
<script>
// open new windows url	
var btn3 = $('#nextyes');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn3.addClass('show');
  } else {
    btn3.removeClass('show');
  }
});

function tekannext() {
  location.replace("../simakancana/index.php")
}
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