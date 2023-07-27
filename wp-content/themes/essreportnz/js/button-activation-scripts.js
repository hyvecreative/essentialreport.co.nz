$(document).ready(function(){

  // displays first child

  jQuery('.chart-content .quest-show-1:first-child').addClass('active');

  // displays charts and hides others if active
	
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
  });
	
	
});

