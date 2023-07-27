<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<!-- begin content -->

<div class="container-fluid latest-reports-hm"  style="padding: 0 0 3rem;">
<div id="reports-list" class="container page-simple">

<!-- begin row -->

<div class="row">
	
<div class="col-12 text-center">

	<h3 style="padding-top: 3rem;">Essential Report topic</h3>       

	 <h1><?php single_cat_title(); ?></h1>
	
	</div>
	
<div class="col-12">

	<div id="accordion" style="padding-left: 0;">
		
		<?php $count = 1; ?>
		<?php $count2 = 1; ?>
		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="card report-list" style="margin-bottom: .5rem;">
					
							
							
							<div class="card-header">
								<a class="collapsed card-link" data-toggle="collapse" href="#collapse-<?php echo $count; $count++; ?>"><?php the_title(); ?>
								<i class="fas fa-chevron-down" aria-hidden="true"></i> </a>
							</div>
							
							<div id="collapse-<?php echo $count2; $count2++; ?>" class="collapse" data-_disabled_parent="#accordion"> <!-- Disabled data parent to prevent closing of others when one is shown  -->
							  <div class="card-body">
					
									<div class="meta date-tab">
										<span class="date"><?php the_time('M, Y') ?></span>
									</div><!-- end meta -->
								  
								   <div class="cat-wrap">
								  	<span class="category">

									  <?php           
									  $product_terms = wp_get_object_terms( $post->ID,  'question_categories' );
										  if ( ! empty( $product_terms ) ) {
										  if ( ! is_wp_error( $product_terms ) ) {
										  foreach( $product_terms as $term ) {
										  echo '<a class="' . $term->slug .'" href="' . get_term_link( $term->slug, 'question_categories' ) . '">' . esc_html( $term->name ) . '</a>, '; 
										  }

										}
									  } ?>

									</span>

									<span class="category tag-display"><?php the_tags(' '); ?></span>
								  
								   </div>
								  
								  <div class="question-content">

									<?php the_content(); ?>
									  
								  </div>
								  
								  	<div class="question-charts charts-buttons" style="overflow: hidden;"> 
									
									
								<?php $active = 1; ?>
								<?php $active2 = 1; ?>
									
								<?php if( have_rows('question_charts') ): while ( have_rows('question_charts') ) : the_row(); ?>
										
                  <div class="btn btn-question quest-<?php //echo $active; $active++; ?>" data-q="<?php echo $active; $active++; ?>"><?php the_sub_field('button_text'); ?></div>

                  <?php endwhile; else: endif; ?>
        
                  </div>  <!-- end question charts -->
								  
                  <div class="question-charts chart-content" style="padding: 1rem 0;"> 
        
                  <?php if( have_rows('question_charts') ): while ( have_rows('question_charts') ) : the_row(); ?>

                    <div class="question-show quest-show-<?php //echo $active2; $active2++; ?>" data-q="<?php echo $active2; $active2++; ?>">
                    
                    <?php //the_sub_field('question_content'); ?>

                    <?php

                    // get iframe HTML
                    $iframe = get_sub_field('question_content');
                    // use preg_match to find iframe src
                    preg_match('/src="(.+?)"/', $iframe, $matches);
                    $src = $matches[1];

                    // add extra params to iframe src
                    $params = array(
                      // NA
                    );

                    $new_src = add_query_arg($params, $src);

                    $iframe = str_replace($src, $new_src, $iframe);

                    // add extra attributes to iframe html
                    $attributes = 'loading="lazy"';
                    // use preg_replace to change iframe src to data-src
                    $iframe = preg_replace('~<iframe[^>]*\K(?=src)~i','data-',$iframe);
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                    // echo $iframe
                    echo $iframe;

                    ?>
                  
                    </div>

                  <?php endwhile; else: endif; ?>
        
                  </div>  <!-- end question charts -->
								  
								  
							  </div>

							</div>
						</div>
                
    			

					
<?php endwhile; ?>

	</div><!-- accordian-->			

				<?php else : ?>

				<p class="text-center">Sorry, no current content uses this tag.</p>

				<?php endif; ?>
	
	
	<?php if (function_exists("emm_paginate")) {

					emm_paginate();

				} ?>
                
</div><!-- end col -->

        
</div><!-- end row -->
</div><!-- end container-->
</div><!-- end container-fluid -->

<script>

$(document).ready(function(){

  
  /* Open All Accordions */

  $("#toggleAccordion").on('click', function(){
    if ($(this).data("closedAll")) {
      $('#accordion .collapse').collapse('show'); // Show All using bootstrap collapse method
      $('#toggleAccordion').html('Close all questions <i class="fas fa-chevron-up" aria-hidden="true"></i>'); // Change button text

      // Loop all questions, add active and set src
      $( ".chart-content .question-show:first-child" ).each(function( index ) {
        $(this).addClass('active');
        var iframeSrc = $(this).find('iframe').data('src'); // Get the src from the data attribute
        $(this).find('iframe').attr('src', iframeSrc); // Apply the src to iframe to trigger it to load
      });
          
    }
    else {
      $('#accordion .collapse').collapse('hide'); // Hide All using bootstrap collapse method
      $('#toggleAccordion').html('Open all questions <i class="fas fa-chevron-down" aria-hidden="true"></i>'); // Change button text
    }

    // save last state
    $(this).data("closedAll", !$(this).data("closedAll")); 
  });

  // init with all closed
  $("#toggleAccordion").data("closedAll", true);


  
  /* Open Single Accordion */

  // Handled by Bootstrap Collapse component, Callback required to set 1st question active and set iframe src
  $('#accordion').on('show.bs.collapse', function (e) {

    console.log(e.target);

    // add active and set src
    var firstQues = $(e.target).find( ".chart-content .question-show:first-child" ); // Get the first ques elem in this set
    firstQues.addClass('active'); // Set it as active
    var iframeSrc = firstQues.find('iframe').data('src'); // Get the src from the data attribute 
    firstQues.find('iframe').attr('src', iframeSrc); // Apply the src to iframe to trigger it to load

  })


	/* Toggle Individual Questions */

  jQuery('.btn-question').on('click', function () {

    var quesNum = $(this).data('q'); // Get the ques number we are opening
    //console.log('Q# = ' + quesNum);
    var quesThis = $(this).parent('.charts-buttons').next('.chart-content').children('.question-show[data-q="' + quesNum + '"]'); // Get the ques elem for this ques num
    var quesAll = $(this).parent('.charts-buttons').next('.chart-content').children('.question-show'); // Get all ques elems in this set

    quesAll.removeClass('active'); // Close all sibling questions
    quesThis.addClass('active'); // Activate this question

    var iframeSrc = quesThis.find('iframe').data('src'); // Get the src from the data attribute
    quesThis.find('iframe').attr('src', iframeSrc); // Apply the src to iframe to trigger it to load
    
  });

});


</script>

<style>

body .question-show.active {
    max-height: 2000px;
    opacity: 1;
    transition: opacity 300ms ease-in-out 700ms, max-height 0s linear 300ms;
}

body .question-show {
    display: block;
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    transition: opacity 300ms ease-in-out 0s, max-height 0s linear 300ms;
}

</style>

<?php get_footer(); ?>