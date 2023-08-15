import $ from 'jquery';
import './style.scss';
import HeaderSearch from './js/components/header-search';
import Carousel from './js/components/carousel';
import matchHeight from 'jquery-match-height';
import scrollTo from 'jquery.scrollto';
import Masonry from 'masonry-layout';
import imagesLoaded from 'imagesloaded';

$(() => {

  const headerSearch = new HeaderSearch();
  headerSearch.init();

  const carousel = new Carousel();
  carousel.init();

  // Match height
  $('.sub-navs').matchHeight('true');
  $('.fiveitem').matchHeight('true');
  $('.support-opt-wrap').matchHeight({target: $('.support-opt')});

  const $grid = $('.grid');

  if ($grid.length) {

    const gridMasonry = new Masonry('.grid', {
      // set itemSelector so .grid-sizer is not used in layout
      itemSelector: '.grid-item',
      // use element for option
      percentPosition: true,
      // columnWidth: '.grid-sizer'
    });

    // layout Masonry after each image loads
    imagesLoaded.makeJQueryPlugin( $ );
    $grid.imagesLoaded(function() {
      gridMasonry.layout();
    });
  	}
	
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

    
});

