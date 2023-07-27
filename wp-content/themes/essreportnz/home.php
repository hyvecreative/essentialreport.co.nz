<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<div class="container-fluid" style="position: relative;">
	
	<?php if (is_home() && get_option('page_for_posts') ) {
    $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); 
    $featured_image = $img[0];
	} ?>
	 
<div class="row hm-feature-page page-default" style="background-image:url(<?php echo (($feat_image[0]))?>); background-size: cover; background-position: <?php the_field('image_vert_position', get_option('page_for_posts')) ?> center;"></div>
<div class="row">
<div class="col feature-text page-text text-center">
<h1 class="<?php the_field('h1_large'); ?>">News</h1>
</div>
</div>
</div>

<!-- begin content -->

<div class="container-fluid page-simple-wrap join-wrap">
<div id="content" class="container page-simple">

<!-- begin row -->

<div class="row">
	
<div class="col-sm-12 col-md-8 offset-md-2 text-center">

            
              
<?php if ( is_home() ) { ?>

     <h1>The latest from CPActive</h1>

<?php } else { ?>

	 <h1><?php single_cat_title(); ?></h1>

<?php } ?>

                  
<ul style="padding-left: 0;">		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="feeditem text-left">  
				
					<li style="list-style: none">

						<div class="row">
								<div class="col-12 itemContent">

								<div class="meta date-tab">
									<span class="date"><?php the_time('M, Y') ?></span>
								</div><!-- end meta -->

								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

								<div class="excerpthm"><?php the_excerpt(); ?></div>

								<a href="<?php the_permalink() ?>" class="btn">Read more</a>
								</div>

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
</div><!-- end container-fluid-->
	
	<div class="container-fluid sign-up-wrap join-wrap" style="background: #288537; color: #fff;">
	<div id="content" class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 offset-md-2 sign-up-page text-center">
				<h2 class="h2-lozenge text-center"><i class="fas fa-chevron-right" aria-hidden="true"></i> <?php the_field('site_wide_form_title', 'option'); ?></h2>
				<p class="text-center"><?php the_field('site_wide_form_intro', 'option'); ?></p>
				<?php the_field('site_wide_form', 'option'); ?>
				<?php the_field('collection_statement', 'option'); ?>
			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>