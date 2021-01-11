<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

<script>
// open new windows url 
var btn1 = $('#prevyes');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn1.addClass('show');
  } else {
    btn1.removeClass('show');
  }
});

function tekanprev() {
  location.replace("../december-surprize/index.php")
}
</script>

<script>
// open new windows url	
var btn2 = $('#nextyes');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn2.addClass('show');
  } else {
    btn2.removeClass('show');
  }
});

function tekannext() {
  location.replace("../hunian/index.php")
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

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "-20px";
}
</script>

<script>
$("#tombol").click(function() {
    $('html, body').animate({
        scrollTop: $("#section2").offset().top
    }, 3000);
});
</script>

<script type="text/javascript">
  $('#taru-2').carousel({
  interval: 3000
});
$('#taru-1').carousel({
  interval: 3000
})
</script>