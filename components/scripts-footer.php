<script src="assets/js/functions.js"></script>
<script src="assets/js/karosel.js"></script>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript">
    
$(document).ready(function() {
    
    setTimeout(function(){
        $('body').addClass('loaded');
    }, 2000);
    
});
</script>
<script type="text/javascript">$(document).ready(function() {
$('#myCarousel').carousel({
interval: 0
})

$('#myCarousel').on('slid.bs.carousel', function() {
});    

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
  location.replace("hunian");
}
// btn.on('click', openNewWindow = function tekan() {
//  window.location.href = "http://www.w3schools.com";
// });
</script>