$(document).ready(function(){$("#owl-demo").owlCarousel({slideSpeed:300,paginationSpeed:400,singleItem:!0,autoPlay:!0})}),$(document).scroll(function(){$(this).scrollTop()>561?($("#alvo").addClass("menufixo"),$("#alvo").addAtribut):$("#alvo").removeClass("menufixo")}),jQuery(document).ready(function(o){o(".scroll").click(function(e){e.preventDefault(),o("html,body").animate({scrollTop:o(this.hash).offset().top},800)})});