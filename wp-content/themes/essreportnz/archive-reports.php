<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>

<div class="container-fluid" style="position: relative;">

	<div class="row hm-feature-page" style=" ">
		<div class="col search-header">

			<h1 class="">Essential Report archive</h1>

		</div>
	</div>

</div>
      
<div id="content" class="container-fluid latest-reports-hm">
<div class="container page-simple">
<div  class="row page-content single-page">
		  
        <!-- begin colLeft -->
	
<div class="col-sm-12 col-md-10 offset-md-1">

            		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	


				<div class="feeditem text-left">  
				
				<li style="list-style: none">
                
                <div class="feedcont">
					
					<div class="meta date-tab">
            			<span class="date"><?php the_time('M, Y') ?></span>
            		</div><!-- end meta -->
                
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					<a href="<?php the_permalink() ?>" class="btn">View Report</a>

					

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
</div>



<?php get_footer(); ?>