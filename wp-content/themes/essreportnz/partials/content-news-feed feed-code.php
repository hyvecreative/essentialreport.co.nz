<div class="row hm-news-feed">
			
			<div class="col-sm-6 news-feed-col">
				<div class="news-feed-wrap">
						<div class="hm-news-wrap text-left" style="">
								<?php
										$my_query = new WP_Query("cat=57,10&showposts=2");
										while ($my_query->have_posts()) : $my_query->the_post();?>

									<div class="feeditem">
										
										<img class="guardian-icon" src="<?php bloginfo('template_directory'); ?>/images/theguardian-icon.jpg" alt="the Guardian" />

										<div class="meta clearfix">

											<span class="date"><?php the_time('M j, Y') ?></span>

										</div><!-- end meta -->

										<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>


										<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>


									</div><!-- END feeditem-->

								<?php endwhile;	?>


					</div>
				</div>
			</div>
	
			<div class="col-sm-6 news-feed-col">
				<div class="news-feed-wrap">
						<div class="hm-news-wrap text-left" style="">
								<?php
										$my_query = new WP_Query("cat=57,10&showposts=2&offset=2");
										while ($my_query->have_posts()) : $my_query->the_post();?>

									<div class="feeditem">
										
										<img class="guardian-icon" src="<?php bloginfo('template_directory'); ?>/images/theguardian-icon.jpg" alt="the Guardian" />


										<div class="meta clearfix">

											<span class="date"><?php the_time('M j, Y') ?></span>

										</div><!-- end meta -->

										<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>


										<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>


									</div><!-- END feeditem-->

								<?php endwhile;	?>


					</div>
				</div>
			</div>
				
		
	
				<div class="col-12">
					<div class="text-center" style="margin-bottom: 1rem;"><a href="/news/" class="btn btn-banner">All news</a></div>
				</div>
	
</div>	
