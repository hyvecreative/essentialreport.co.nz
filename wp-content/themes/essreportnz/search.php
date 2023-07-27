<?php get_header(); ?> <!-- end hero title -->

<div class="container-fluid latest-reports-hm"  style="padding: 0 0 3rem;">
<div id="reports-list" class="container page-simple">

<!-- begin row -->

<div class="row">
	
<div class="col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">


                <?php if (have_posts()) : ?>

                    <h1 class="archive-title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h1>




                    <?php while (have_posts()) : the_post(); ?>



                    <div class="feeditem"  style="margin-bottom: 1rem; padding-bottom: .5rem; border-bottom: 1px dotted #00aced;">  
                    <li style="list-style: none">
                    
                    <div class="feedcont">
                        
                        <div class="meta clearfix" style="margin-bottom: 0;">
                            <span class="date">Publish date: <?php the_time('M j, Y') ?></span>
							<?php 
								
								$u_time = get_the_time('U'); 
$u_modified_time = get_the_modified_time('U'); 
if ($u_modified_time >= $u_time + 86400) { 
echo "<span style=\"font-size: .85rem; color: #757575;\">| Last updated on "; 
the_modified_time('M j, Y'); 
echo "</span> "; } 
								?>
                        </div><!-- end meta -->
                    
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        
                        <div class="excerpthm"><p><?php the_excerpt(); ?></p></div>
					</div>
                    </li>
						
					
                
    				</div><!-- END feeditem-->


                    <?php endwhile; ?>

                    <div class="search-pagination" style="margin-top: 1rem;">

                        <?php if (function_exists("emm_paginate")) {

                    emm_paginate();

                } ?>

                    </div> <!-- end results-pagination-->


                    <section class="search">
                        <div class="">
                            <h3 class="search-head" style="margin-top: 1rem;">Search again</h3>
                            <form role="search" method="get" class="" action="<?php echo home_url( '/' ); ?>">
                                <label><span class="hide">Search</span>
                                    <input type="text" name="s" class="searchField" title="Search"  />
                                </label>
                                <input type="submit" name="submit" class="searchSubmitpage" title="Submit" value="Search" />
                            </form>

						</div>
                    </section> <!-- end search section -->

                    <?php else : ?>

                    <article id="post-not-found" class="hentry clearfix">


                        <header class="article-header">
                            <h3><span>Sorry, no results for:</span> <?php echo esc_attr(get_search_query()); ?></h3>
                        </header>
                        <section class="entry-content">
                            <p><?php _e("Try your search again.", "ndis"); ?></p>
                        </section>
                        <section class="search">
                            <div class="">
                                <p class="search-head">Search again</p>
                                <form role="search" method="get" class="" action="<?php echo home_url( '/' ); ?>">
                                    <label><span class="hide">Search</span>
                                        <input type="text" name="s" class="searchField" title="Search"  />
                                    </label>
                                    <input type="submit" name="submit" class="searchSubmitpage" title="Submit" value="Search" />
                                </form>

							</div>
                        </section> <!-- end search section -->
                        <footer class="article-footer">
                        </footer>
                    </article>

                <?php endif; ?><br>



</div> <!-- end col -->


</div> <!-- end row -->
</div> <!-- end container -->
</div> <!-- end container-fluid -->


<?php get_footer(); ?>
