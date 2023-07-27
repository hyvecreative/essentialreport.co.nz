<div class="row hm-news-feed">
			
			<div class="col-sm-6 news-feed-col">
				<div class="news-feed-wrap">
						<div class="hm-news-wrap text-left" style="">
							
							<?php if( have_rows('home_news_feed') ): while ( have_rows('home_news_feed') ) : the_row(); ?>
							
							<div class="feeditem">
								
							<img class="guardian-icon <?php the_sub_field('guardian_logo'); ?>" src="<?php bloginfo('template_directory'); ?>/images/theguardian-icon.jpg" alt="the Guardian" />
								
							<div class="meta clearfix">

								<span class="date"><?php the_sub_field('date'); ?></span> | 
								<span class="author"><a href="https://www.theguardian.com/profile/peter-lewis-australia"><?php the_sub_field('author') ?></a></span>

							</div><!-- end meta -->
								
							<h3><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_title'); ?></a></h3>

							<div class="excerpthm"><p><?php the_sub_field('exerpt'); ?></p></div>
								
							<a href="<?php the_sub_field('tag_url'); ?>">Read more <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
								
							</div><!-- END feeditem-->
								
							<?php endwhile; else: endif; ?>

					</div>
				</div>
			</div>
	
			<div class="col-sm-6 news-feed-col">
				<div class="news-feed-wrap">
						<div class="hm-news-wrap text-left" style="">
								<?php if( have_rows('home_news_feed_2') ): while ( have_rows('home_news_feed_2') ) : the_row(); ?>
							
							<div class="feeditem">
								
							<img class="guardian-icon <?php the_sub_field('guardian_logo'); ?>" src="<?php bloginfo('template_directory'); ?>/images/theguardian-icon.jpg" alt="the Guardian" />
								
							<div class="meta clearfix">

								<span class="date"><?php the_sub_field('date'); ?></span> | 
								<span class="author"><a href="https://www.theguardian.com/profile/peter-lewis-australia"><?php the_sub_field('author') ?></a></span>

							</div><!-- end meta -->
								
							<h3><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_title'); ?></a></h3>

							<div class="excerpthm"><p><?php the_sub_field('exerpt'); ?></p></div>
								
							<a href="<?php the_sub_field('tag_url'); ?>">Read more <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
								
							</div><!-- END feeditem-->
								
							<?php endwhile; else: endif; ?>


					</div>
				</div>
			</div>
				
		
	
				<div class="col-12 text-center" style="margin-top: 2rem;">
					<a style="margin: 0 .5rem 1rem;" class="btn" href="https://www.theguardian.com/australia-news/essential-poll" class="btn btn-banner">The Guardian Analysis</a>
					<a style="margin: 0 .5rem 1rem;" class="btn" href="https://www.theguardian.com/profile/peter-lewis-australia" class="btn btn-banner">Peter Lewis Opinion Pieces</a>
				</div>
	
</div>	
