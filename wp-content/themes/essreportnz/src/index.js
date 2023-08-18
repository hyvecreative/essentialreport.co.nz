import $ from 'jquery';
import './style.scss';
import HeaderSearch from './js/components/header-search';
import scrollTo from 'jquery.scrollto';

$(() => {

  const headerSearch = new HeaderSearch();
  headerSearch.init();
	
	// Scrollto
	

    $('.btn-subscribe').on('click touchstart', function () {
        //optionally remove the 500 (which is time in milliseconds) of the
        //scrolling animation to remove the animation and make it instant

        $.scrollTo('.bar-chart', 800, {axis:'y'});

    });
	
	// Scroll to top
	
	$(function($){{$(window).scroll(function(){if($(window).scrollTop()>150)$('#scroll-to-top').addClass('displayed');else $('#scroll-to-top').removeClass('displayed');});$('#scroll-to-top').click(function(){$("html, body").animate({scrollTop:"0px"});return false;});}
	});
	
	// Activate animation on scroll 
	
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
	
	// Animation for nav hamburger
	

	const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});

    
});

