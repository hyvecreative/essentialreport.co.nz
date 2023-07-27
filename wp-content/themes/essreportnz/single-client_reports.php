<?php get_header(); ?>
	
<div class="container-fluid" style="position: relative;">

	<div class="row hm-feature-page" style=" ">
		<div class="col search-header">

			<h1 class="">Client Questions: <?php the_title(); ?><br />
				<span style="font-size: 1.75rem; font-weight: 400;">Questions commissioned and paid for by Essential clients</span></h1>

		</div>
	</div>

</div>
      
<div id="reports-list" class="container-fluid latest-reports-hm" style="padding: 0;">
<div class="container page-simple">
<div  class="row page-content single-page">
		  
        <!-- begin colLeft -->

        <div class="col-sm-12 col-lg-10 offset-lg-1">
						
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="postItem clearfix">
		
		<?php the_content(__('(more...)')); ?>
		
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
		
	</div>
			
			<div class="col-sm-12 text-center" style="margin-bottom: 1rem;">
				
							<button id="toggleAccordion" type="button" class="btn btn-orange">Open all questions <i class="fas fa-chevron-down" aria-hidden="true"></i></button>

						</div>
			
			<div class="question-feed">
				
				<?php
$featured_posts = get_field('client_report_questions');
				if( $featured_posts ): ?>
				
				<div id="accordion" class="" style="padding-left: 0;">
						
						<?php $count = 1; ?>
						<?php $count2 = 1; ?>
						
					<?php foreach( $featured_posts as $post ): 

						// Setup this post for WP functions (variable must be named $post).
						setup_postdata($post); ?>
					
						
						<div class="card report-list" style="margin-bottom: .5rem;">
							
							<div class="card-header">
								<a class="collapsed card-link" data-toggle="collapse" href="#collapse-<?php echo $count; $count++; ?>"><?php the_title(); ?>
								<i class="fas fa-chevron-down" aria-hidden="true"></i> </a>
							</div>
							
							<div id="collapse-<?php echo $count2; $count2++; ?>" class="collapse" data-_disabled_parent="#accordion"> <!-- Disabled data parent to prevent closing of others when one is shown  -->
							  <div class="card-body">
								  
								<div class="titlemeta clientmeta">
									<div class="clientname">Question commissioned by:<Span style="font-size: 1.1rem; font-weight: 600;"> <?php the_field('client_name'); ?></Span></div>
									<div class="metadate">Date published in the Essential Report: <Span style="font-size: 1.1rem; font-weight: 600;"><?php the_field('client_q_date_published'); ?></Span></div>
								</div>
						
								  
							<div class="cat-wrap">
								<span class="category">

                  <?php           
                  $product_terms = wp_get_object_terms( $post->ID,  'question_categories' );
                      if ( ! empty( $product_terms ) ) {
                      if ( ! is_wp_error( $product_terms ) ) {
                      foreach( $product_terms as $term ) {
                      echo '<a class="' . $term->slug .'" href="' . get_term_link( $term->slug, 'question_categories' ) . '">' . esc_html( $term->name ) . '</a> '; 
                      }

                    }
                  } ?>

					</span>
								  
					<span class="category tag-display"><?php the_tags(' '); ?></span>
								  </div>

								  <div class="question-content"><?php the_content(); ?></div>
								
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
						
					<?php endforeach; ?>
					</div>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
				
			</div>
			
			
			
	</div>
	
	
	<div class="col-md-offset-1 col-lg-offset-1 col-sm-12 col-md-4 col-lg-4">
              <div class="action-sb text-center">
              

              
</div>
</div> <!-- end col-->
              
</div> <!-- end row page-content -->
              
</div> <!-- end container-->
</div> <!-- end container-fluid -->

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

