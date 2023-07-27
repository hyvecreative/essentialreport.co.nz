<?php
/*
Template Name: page-archives
*/
?>
<?php get_header(); ?>

<main>
<article>

<div class="container-fluid facts-info">	
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 col-md-8 offset-md-2"> 
				
				<h2>Essential Report Archives</h2>
				
				<?php 
					$args = array(  
						'post_type' => 'reports',
						'post_status' => 'publish',
						'posts_per_page' => 10, 
						'order_by' => 'title', 
						'order' => 'DESC',
					); 

				$loop = new WP_Query( $args ); 

				while ( $loop->have_posts() ) : $loop->the_post();

				the_title( '<p class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></p>' ); 
				?>

				<?php endwhile; ?>
				
			</div>
		</div>
	</div>
</div>

<!-- begin content -->

<div class="container-fluid page-simple-wrap">
	<div id="content" class="container page-simple">
		<div class="row">
			<div class="col-sm-12 col-md-8 offset-md-2">

			<?php if(get_field('echo_title')):?>
				<h1 class="page-header-title"><?php the_title(); ?></h1> 
			<?php else:?> 
			<?php endif;?> 
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no pages are available.'); ?></p>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
	
</article>
</main>

    
<?php get_footer(); ?>


