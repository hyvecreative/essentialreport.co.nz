<div class="row hm-news-feed text-center">
			
			<div class="col-md-6">
				<h2>CPActive News</h2>
				<div class="hm-news-wrap text-left" style="">
						<ul style="padding: 0;">
						<?php
								$my_query = new WP_Query("cat=4,8,9,10&showposts=2");
								while ($my_query->have_posts()) : $my_query->the_post();?>

							<div class="feeditem">
								
								<li style="list-style: none">

							<div class="feedcont">

								<div class="meta clearfix">
									
									<span class="date"><?php the_time('M j, Y') ?></span>
									
									<span class="cats">
										
										<?php echo "";

										$args = array( 
											'orderby'                  => 'name',
											'order'                    => 'ASC', 
											'public'                   => true,
										); 

										$categories = get_the_category( $args );

										foreach ( $categories as $category ) {
											 echo '<a href="' . get_category_link( $category ) . '">' . $category->name . '</a><br/>';
										} ?>
										
									</span>
						
								</div><!-- end meta -->

								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

								<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>

								</li>

							</div><!-- END feeditem-->

						<?php endwhile;	?>
							
						</ul>
					
						<div class="text-center" style="margin-bottom: 1rem;"><a href="/news/" class="btn hm-more">More news</a></div>
					
				</div>
			</div>
			<div class="col-md-6">
				<h2>Our champions</h2>
				<div class="hm-champs-wrap text-left" style="display: flex">
				
				
					<!-- custom post query --><br>
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php $loop = new WP_Query( array( 'post_type' => 'our-champions', 'paged' => $paged) ) ; ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="row feeditem" style="margin-right: 0; margin-left: 0;">  

								<!-- add thumbnail -->
					<div class="col-4 casethumb">

						<a href="<?php the_permalink() ?>">

								<?php if ( has_post_thumbnail( ) ) {
																the_post_thumbnail(array('thumbnail'));
																} else { ?>
																<img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" />
																<?php } ?>

						</a>
					</div><!-- end casethumb -->


					<div class="col-8 feedcont">	
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="excerpthm">
							<p style="margin-top: .5rem; margin-bottom: .5rem;"><?php the_excerpt(); ?></p>
						</div>
						<a href="<?php the_permalink() ?>" class="btn btn-feed">Learn more</a>
					</div><!-- end feedcont -->

			
			</div>

    <?php endwhile; wp_reset_query(); ?>
			

				
		
					
			</div>	
				
			<div class="text-center" style="margin-bottom: 1rem;"><a href="/our-champions/" class="btn hm-more">More events</a>

		</div>
				
	</div>
</div>	
