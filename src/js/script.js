$(document).ready(function() {

  $("#owl-demo").owlCarousel({

    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    autoPlay: true


// "singleItem:true" is a shortcut for:
// items : 1, 
// itemsDesktop : false,
// itemsDesktopSmall : false,
// itemsTablet: false,
// itemsMobile : false

});

});
$(document).scroll(function() {
  if ($(this).scrollTop() > 561) {
    $("#alvo").addClass("menufixo");
    $("#alvo").addAtribut
  } else {
    $('#alvo').removeClass("menufixo");
  }
})
jQuery(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
   });
});