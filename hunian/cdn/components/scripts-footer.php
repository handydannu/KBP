<script src="https://res.cloudinary.com/handydannu/raw/upload/v1603176379/KBP_hunian/js/jquery.min.js"></script> 
<script src="https://res.cloudinary.com/handydannu/raw/upload/v1603176378/KBP_hunian/js/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script>
var btn = $('#mybutton');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
</script>