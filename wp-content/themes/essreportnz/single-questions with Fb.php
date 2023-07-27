<?php get_header(); ?>

<!-- begin content -->

<div class="container">

<!-- begin row -->
	
    <div class="row content" style="min-height: 900px">
	<div class="col-sm-12 col-md-8 offset-md-2 single-question">		
                
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		
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

					<div class="postItem itemContent">
						
						<h1><?php the_title(); ?></h1>
						
						<div class="titlemeta">
                        <div class="metadate"><?php the_time('j M Y') ?></div>
						</div>
						
						<div class="question-content">

						<?php the_content(__('Continue reading &raquo;')); ?>
						
						</div>

						
						<div class="question-charts charts-buttons" style="overflow: hidden;"> 
									
									
								<?php $active = 1; ?>
								<?php $active2 = 1; ?>
									
								<?php if( have_rows('question_charts') ): while ( have_rows('question_charts') ) : the_row(); ?>
										
                  <div class="btn btn-question" data-q="<?php echo $active; $active++; ?>"><?php the_sub_field('button_text'); ?></div>

                  <?php endwhile; else: endif; ?>
        
                  </div>  <!-- end question charts -->
								  
                  <div class="question-charts chart-content" style="padding: .5rem 0;"> 
        
                  <?php if( have_rows('question_charts') ): while ( have_rows('question_charts') ) : the_row(); ?>

                    <div class="question-show quest-show" data-q="<?php echo $active2; $active2++; ?>">
                    
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
					  
					<div id="question-share" style="padding-left: 0.75rem;">								  
							
							<input type="text" value="<?php the_permalink() ?>" id="myInput" style="display: none">
							<div onclick="loadURL()" style="color: #038bbe; text-decoration: none; font-size: 14px; text-decoration: underline; cursor:pointer; display: inline-block; padding-right: .5rem;">Copy the direct link to this question</div>

							<script>
							function loadURL() {
							  /* Get the text field */
							  var copyText = document.getElementById("myInput");

							  /* Select the text field */
							  copyText.select();
							  copyText.setSelectionRange(0, 99999); /* For mobile devices */

							  /* Copy the text inside the text field */
							  navigator.clipboard.writeText(copyText.value);

							  /* Alert the copied text */
							  alert("The url has been copied to your clipboard: " + copyText.value);
							}
							</script>

							<?php
							$permalink = get_permalink();
							$find_h = '#^http(s)?://#';
							$find_w = '/^www\./';
							$replace = '';
							$output = preg_replace( $find_h, $replace, $permalink );
							$output = preg_replace( $find_w, $replace, $output );
							echo '<a href="https://www.facebook.com/sharer/sharer.php?u=' . $output . '" style="font-size: 14px; text-decoration: underline;">Share on facebook</a>';
							?>
	
						</div> <!-- end question share-->
        
                  </div>  <!-- end question charts -->	
						
				</div> <!-- Postitem -->

				<?php endwhile; ?>

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>				
				<?php endif; ?>
	
                
	</div>
			<!-- end col left -->
	
            
		</div><!-- end row -->
		</div><!-- end container-->


<script>

$(document).ready(function(){

      // Loop all questions, add active and set src
      $( ".chart-content .question-show:first-child" ).each(function( index ) {
        $(this).addClass('active');
        var iframeSrc = $(this).find('iframe').data('src'); // Get the src from the data attribute
        $(this).find('iframe').attr('src', iframeSrc); // Apply the src to iframe to trigger it to load
      });
          

});
	
$(document).ready(function(){

    // add active and set src
    var firstQues = $(e.target).find( ".chart-content .question-show:first-child" ); // Get the first ques elem in this set
    firstQues.addClass('active'); // Set it as active
    var iframeSrc = firstQues.find('iframe').data('src'); // Get the src from the data attribute 
    firstQues.find('iframe').attr('src', iframeSrc); // Apply the src to iframe to trigger it to load
	
});
	
$(document).ready(function(){


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




