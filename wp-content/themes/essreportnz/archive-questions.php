<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<!-- begin content -->


<div class="container">

<!-- begin row -->

<div class="row">
	
<div class="col-12 colLeft text-center">

            
              
<?php if ( is_home() ) { ?>

     <h1>News</h1>

<?php } else { ?>

	 <h1><?php single_cat_title(); ?></h1>

<?php } ?>

                  
<ul>		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="feeditem text-left">  
				
				<li style="list-style: none">
                
                <div class="feedcont">
					
					<div class="meta date-tab">
            			<span class="date"><?php the_time('M, Y') ?></span>
            		</div><!-- end meta -->
					
					<p class="category">Category
							<?php           
					$product_terms = wp_get_object_terms( $post->ID,  'essential_report' );
							if ( ! empty( $product_terms ) ) {
							if ( ! is_wp_error( $product_terms ) ) {
							foreach( $product_terms as $term ) {
							echo '<a class="' . $term->slug .'" href="' . get_term_link( $term->slug, 'essential_report' ) . '">' . esc_html( $term->name ) . '</a> '; 
							}

						}
							} ?> </p>

            		<p class="tag-display">Tags: <?php the_tags(' '); ?></p>
                
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					<div class="excerpthm"><?php the_excerpt(); ?></div>
					
					<a href="<?php the_permalink() ?>" class="btn">Learn more</a>
					
					<hr>

					

				</div>

              
                </li>
                
    </div><!-- END feeditem-->

					
<?php endwhile; ?>

				

				<?php else : ?>

				<p>Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>
<ul>
	
	<?php if (function_exists("emm_paginate")) {

					emm_paginate();

				} ?>
                
</div><!-- end col -->

        
</div><!-- end row -->
</div><!-- end container-->



<?php get_footer(); ?>