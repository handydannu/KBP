
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/hover-box.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    
$(document).ready(function() {
    
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 2000);
    
});
</script>
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
// open new windows url 
var tbl = $('#mybutton2');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    tbl.addClass('lihat');
  } else {
    tbl.removeClass('lihat');
  }
});

function tekannext() {
  location.replace("../simakancana/index.php")
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


$(".image-show").fancybox({
    // API options here
        helpers : {
        title: {
        type: 'outside'
        }
    	}
});

$('.open-album').click(function(e) {
    var el, id = $(this).data('open-id');
    if(id){
        el = $('.image-show[rel=' + id + ']:eq(0)');
        e.preventDefault();
        el.click();
    }
});
</script>



