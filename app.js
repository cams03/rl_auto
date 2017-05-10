$(function () {
  $('a').on('click', function(e) {
    e.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top
    }, 900, function(){
      window.location.hash = hash;
    });
  });

   $('#achat-div').on('mouseover', function() {
  	$('#item1').slideDown();
  	$('#item2').hide();
  	$('#item3').hide();
  	})
  $('#mandat-div').on('mouseover', function() {
  	$('#item2').slideDown();
  	$('#item1').hide();
  	$('#item3').hide();
  })
  $('#vente-div').on('mouseover', function() {
  	$('#item3').slideDown();
  	$('#item1').hide();
  	$('#item2').hide();
  })
});

