<script src="assets/js/functions.js"></script>
<script src="https://res.cloudinary.com/dansprogramming/raw/upload/v1604543624/KBP_RUKO/JSCSS/karosel.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

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
  location.replace("../hunian/index.php");
}
// btn.on('click', openNewWindow = function tekan() {
//  window.location.href = "http://www.w3schools.com";
// });
</script>