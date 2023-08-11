<div class="row hm-news-feed">
			
			
							
							<?php if( have_rows('home_news_feed') ): while ( have_rows('home_news_feed') ) : the_row(); ?>
	
	
	<div class="col-lg-6 news-feed-col news-feed-wrap">
	
			<div class="feeditem text-left">
								
							<img class="guardian-icon <?php the_sub_field('guardian_logo'); ?>" src="<?php bloginfo('template_directory'); ?>/images/theguardian-icon.jpg" alt="the Guardian" />
								
							<div class="meta clearfix">

								<span class="date"><?php the_sub_field('date'); ?></span> | 
								<span class="author"><a href="https://www.theguardian.com/profile/peter-lewis-australia"><?php the_sub_field('author') ?></a></span>

							</div><!-- end meta -->
								
							<h3><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_title'); ?></a></h3>

							<div class="excerpthm"><p><?php the_sub_field('exerpt'); ?></p></div>
								
							<a href="<?php the_sub_field('link_url'); ?>">Read more <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
								
			</div><!-- END feeditem-->
										
		</div>
	
	
								
							<?php endwhile; else: endif; ?>

		
	
				<div class="col-12 text-center" style="margin-top: 2rem;">
					<a style="margin: 0 .5rem 1rem;" class="btn" href="https://www.theguardian.com/australia-news/essential-poll" class="btn btn-banner">The Guardian Analysis  <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
				</div>
	
</div>	
