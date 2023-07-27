<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<!-- begin content -->

<div class="container-fluid latest-reports-hm"  style="padding-bottom: 3rem;">
<div id="content" class="container page-simple">

<!-- begin row -->

<div class="row">
	
<div class="col-sm-12 col-md-10 offset-md-1 text-center">

	 <h1><?php single_cat_title(); ?></h1>

	
</div>

	
<div class="col-sm-12 col-md-10 offset-md-1">
	
<div id="accordion" style="padding-left: 0;">
	
	<?php $count = 1; ?>
	<?php $count2 = 1; ?>
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="card" style="margin-bottom: .5rem;">
					
							
							
							<div class="card-header">
								<a class="collapsed card-link" data-toggle="collapse" href="#collapse-<?php echo $count; $count++; ?>"><?php the_title(); ?>
								<i class="fas fa-chevron-down" aria-hidden="true"></i> </a>
							</div>
					
							<div id="collapse-<?php echo $count2; $count2++; ?>" class="collapse" data-parent="#accordion">
							  	<div class="card-body">
									
									<p class="category">Category:
									<?php           
                $product_terms = wp_get_object_terms( $post->ID,  'question_categories' );
if ( ! empty( $product_terms ) ) {
	if ( ! is_wp_error( $product_terms ) ) {
			foreach( $product_terms as $term ) {
				echo '<a class="' . $term->slug .'" href="' . get_term_link( $term->slug, 'question_categories' ) . '">' . esc_html( $term->name ) . '</a> '; 
			}

	}
} ?> </p> 
								
								<div class="metadate"><?php the_time('j M Y') ?></div>

								<div class="excerpthm"><?php the_content(); ?></div>
									
									<div class="question-charts charts-buttons" style="overflow: hidden;"> 
									

										<?php $active = 1; ?>
										<?php $active2 = 1; ?>

										<?php if( have_rows('question_charts') ): while ( have_rows('question_charts') ) : the_row(); ?>

															<div class="btn btn-question quest-<?php echo $active; $active++; ?>" style="display: inline-block; float: left; margin-right: .5rem;"><?php the_sub_field('button_text'); ?></div>

										<?php endwhile; else: endif; ?>

										</div>  <!-- end question charts -->

										<div class="question-charts chart-content" style="padding: 1rem 0;"> 

										<?php if( have_rows('question_charts') ): while ( have_rows('question_charts') ) : the_row(); ?>

															<div class="question-show quest-show-<?php echo $active2; $active2++; ?>"><?php the_sub_field('question_content'); ?></div>

										<?php endwhile; else: endif; ?>
			
									</div>  <!-- end question charts -->

								</div>

							</div>
						</div>
                


					
<?php endwhile; ?>

				

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>
	
</div><!-- END accordian-->
	
	<?php if (function_exists("emm_paginate")) {

					emm_paginate();

				} ?>
                
</div><!-- end col -->

        
</div><!-- end row -->
</div><!-- end container-->
</div><!-- end container-fluid-->



<?php get_footer(); ?>