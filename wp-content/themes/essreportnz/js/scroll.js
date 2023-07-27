$(document).ready(function(){
	
  function check_from_top_de(){ // Create our function
    var scroll = $(window).scrollTop(); // Check scroll distance
    if (scroll >= 300) { // If it is equal or more than 300 - you can change this to what you want
      $("#figure").addClass("animate"); // Add custom class to body
    } else {
      $("#figure").removeClass("animate"); // When scrolled to the top, remove the class
    }
  }
  
  check_from_top_de(); // On load, run the function
  
  $(window).scroll(function() { // When scroll - run function
    check_from_top_de();
  });
  
jQuery('.scroll-down-arrow').on('click touchstart', function () {
   //optionally remove the 500 (which is time in milliseconds) of the
   //scrolling animation to remove the animation and make it instant
   
   jQuery.scrollTo('div.stats-panel', 800, {axis:'y'});
   
});

    jQuery('.btn-subscribe').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        jQuery.scrollTo('.bar-chart', 800, {axis:'y'});

    });

    jQuery('.petition-action').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        jQuery.scrollTo('.action-form', 1200, {axis:'y'});

    });
	
	jQuery('.sub-nav-3').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        jQuery.scrollTo('#projects', 1200, {axis:'y'});

    });
	
	jQuery('.sub-nav-4').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        jQuery.scrollTo('#research', 1200, {axis:'y'});

    });




/*   jQuery('.chart-content .quest-show-1:first-child').addClass('active');
	
	jQuery('.quest-1').on('click touchstart', function () {
    jQuery('.quest-show-1').toggleClass('active').slideDown();
    jQuery('.quest-show-2').removeClass('active').slideUp();
    jQuery('.quest-show-3').removeClass('active').slideUp();
    jQuery('.quest-show-4').removeClass('active').slideUp();
	});

  jQuery('.quest-2').on('click touchstart', function () {
    jQuery('.quest-show-1').removeClass('active').slideUp();
    jQuery('.quest-show-2').toggleClass('active').slideDown();
    jQuery('.quest-show-3').removeClass('active').slideUp();
    jQuery('.quest-show-4').removeClass('active').slideUp();
  });

  jQuery('.quest-3').on('click touchstart', function () {
    jQuery('.quest-show-1').removeClass('active').slideUp();
    jQuery('.quest-show-2').removeClass('active').slideUp();
    jQuery('.quest-show-3').toggleClass('active').slideDown();
    jQuery('.quest-show-4').removeClass('active').slideUp();
  });

  jQuery('.quest-4').on('click touchstart', function () {
    jQuery('.quest-show-1').removeClass('active').slideUp();
    jQuery('.quest-show-2').removeClass('active').slideUp();
    jQuery('.quest-show-3').removeClass('active').slideUp();
    jQuery('.quest-show-4').toggleClass('active').slideDown();
  }); */


jQuery(function($){{$(window).scroll(function(){if($(window).scrollTop()>150)$('#scroll-to-top').addClass('displayed');else $('#scroll-to-top').removeClass('displayed');});$('#scroll-to-top').click(function(){$("html, body").animate({scrollTop:"0px"});return false;});}

});
	

	
	
});

