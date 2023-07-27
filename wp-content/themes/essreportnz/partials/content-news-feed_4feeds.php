<div class="row hm-news-feed">
			
			<div class="col-sm-6 col-lg-3 news-feed-col">
				<div class="news-feed-wrap">
					<h4>Opinion pieces</h4>
						<div class="hm-news-wrap text-left" style="">
								<ul style="padding: 0;">
								<?php
										$my_query = new WP_Query("cat=57,10&showposts=2");
										while ($my_query->have_posts()) : $my_query->the_post();?>

									<div class="feeditem">

										<li style="list-style: none">

										<div class="meta clearfix">

											<span class="date"><?php the_time('M j, Y') ?></span>

										</div><!-- end meta -->

										<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>


										<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>

										</li>

									</div><!-- END feeditem-->

								<?php endwhile;	?>

								</ul>

								<div class="text-center" style="margin-bottom: 1rem;"><a href="/category/opinion-pieces/" class="btn hm-more hm-more-sm">More Opinion Pieces</a></div>

					</div>
				</div>
			</div>
				
			<div class="col-sm-6 col-lg-3 news-feed-col">
				<div class="news-feed-wrap">
				<h4>Media releases</h4>
				<div class="hm-news-wrap text-left">

					<ul style="padding: 0;">
								<?php
										$my_query = new WP_Query("cat=1&showposts=2");
										while ($my_query->have_posts()) : $my_query->the_post();?>

									<div class="feeditem">

										<li style="list-style: none">

										<div class="meta clearfix">

											<span class="date"><?php the_time('M j, Y') ?></span>

										</div><!-- end meta -->

										<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

										<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>

										</li>

									</div><!-- END feeditem-->

								<?php endwhile;	?>

								</ul>

				
					<div class="text-center" style="margin-bottom: 1rem;"><a href="/category/media-releases/" class="btn hm-more hm-more-sm">More Media Releases</a></div>

		</div>
		</div>
	</div>
	
	
			<div class="col-sm-6 col-lg-3 news-feed-col">
				
				<div class="news-feed-wrap">
				<h4>In the news</h4>
				<div class="hm-news-wrap text-left" style="">
						<ul style="padding: 0;">
						<?php
								$my_query = new WP_Query("cat=11,58&showposts=2");
								while ($my_query->have_posts()) : $my_query->the_post();?>

							<div class="feeditem">
								
								<li style="list-style: none">
								

								<div class="meta clearfix">
									
									<span class="date"><?php the_time('M j, Y') ?></span>

								</div><!-- end meta -->
								
								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>


								<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>

								</li>

							</div><!-- END feeditem-->

						<?php endwhile;	?>
							
						</ul>
					
						<div class="text-center" style="margin-bottom: 1rem;"><a href="/category/in-the-news/" class="btn hm-more hm-more-sm">More In the News</a></div>
					
				</div>
			</div>
			</div>
				
			<div class="col-sm-6 col-lg-3 news-feed-col">
				<div class="news-feed-wrap">
				<h4>Academic research</h4>
				<div class="hm-news-wrap text-left">
				
				
			<ul style="padding: 0;">
						<?php
								$my_query = new WP_Query("cat=12,59&showposts=2");
								while ($my_query->have_posts()) : $my_query->the_post();?>

							<div class="feeditem">
								
								<li style="list-style: none">

								<div class="meta clearfix">
									
									<span class="date"><?php the_time('M j, Y') ?></span>

								</div><!-- end meta -->

								<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

								<div class="excerpthm"><p><?php the_excerpt(); ?></p></div>

								</li>

							</div><!-- END feeditem-->

						<?php endwhile;	?>
							
						</ul>
			

					<div class="text-center" style="margin-bottom: 1rem;"><a href="/category/academic-research/" class="btn hm-more hm-more-sm">More Research</a></div>	
				

		</div>
		</div>
		</div>
	
				<div class="col-12">
					<div class="text-center" style="margin-bottom: 1rem;"><a href="/news/" class="btn btn-banner">All news</a></div>
				</div>
	
				</div>	
