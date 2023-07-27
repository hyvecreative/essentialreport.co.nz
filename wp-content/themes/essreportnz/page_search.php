<?php
/*
Template Name: page-search
*/
?>
<?php get_header(); ?>

<main>
<article>

<div class="container-fluid" style="position: relative;">

	<div class="row hm-feature-page" style=" ">
		<div class="col search-header">
			
			<div class="search-wrap">

			<h1 class=""><?php the_title(); ?> the Essential Report</h1>
				<div id="searchBox" class="clearfix">

											<form method="get" id="searchform" action="https://essentialreport.com.au/" >
												<label for="s">Search</label>
												<input type="text" value=" " onFocus="this.value=''" name="s" id="s" />
												<input type="submit" name="searchbutton" id="searchsubmit" class="searchsubmit" value="Search" />
											</form>

				</div><!-- END searchbox -->
				
			</div>

		</div>
	</div>

</div>

<!-- begin content -->
	
<div class="container-fluid latest-reports-hm">
	<div id="content" class="container page-simple">
		<div class="row" style="min-height: 100px; transition: all .3s ease-out;">
			
			<div class="col-sm-12 col-md-8 offset-md-2" style="margin-bottom: 2rem;">
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no pages are available.'); ?></p>
			<?php endif; ?>
			</div>
			
			<div class="col-sm-12 col-md-8 offset-md-2 search-page">
				
				
				<h2>Find topics</h2>
				
				<div class="tag-wrap">
					
					<div class="tag-block">

					<h3><a href="/question_categories/economy/">Economy</a></h3>

					<?php if( have_rows('tag_list_econ') ): while ( have_rows('tag_list_econ') ) : the_row(); ?>
					<a href="/tag/<?php the_sub_field('tag_url'); ?>"><?php the_sub_field('tag_name'); ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a><br />
					<?php endwhile; else: endif; ?>

					</div>

					<div class="tag-block">

					<h3><a href="/question_categories/environment-climate-change/">Environment and climate change</a></h3>

					<?php if( have_rows('tag_list_env') ): while ( have_rows('tag_list_env') ) : the_row(); ?>
					<a href="/tag/<?php the_sub_field('tag_url'); ?>"><?php the_sub_field('tag_name'); ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a><br />
					<?php endwhile; else: endif; ?>

					</div>
					
					<div class="tag-block" style="display: none;">

					<h3><a href="/question_categories/gender-equality/">Gender Equality</a></h3>

					<?php if( have_rows('tag_list_gender') ): while ( have_rows('tag_list_gender') ) : the_row(); ?>
					<a href="/tag/<?php the_sub_field('tag_url'); ?>"><?php the_sub_field('tag_name'); ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a><br />
					<?php endwhile; else: endif; ?>

					</div>
					
					<div class="tag-block">

					<h3><a href="/question_categories/international-relations/">International Relations</a></h3>

					<?php if( have_rows('tag_list_intl_rel') ): while ( have_rows('tag_list_intl_rel') ) : the_row(); ?>
					<a href="/tag/<?php the_sub_field('tag_url'); ?>"><?php the_sub_field('tag_name'); ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a><br />
					<?php endwhile; else: endif; ?>

					</div>


					<div class="tag-block">

					<h3><a href="/question_categories/politics/">Politics</a></h3>

					<?php if( have_rows('tag_list_fed_pol') ): while ( have_rows('tag_list_fed_pol') ) : the_row(); ?>
					<a href="/tag/<?php the_sub_field('tag_url'); ?>"><?php the_sub_field('tag_name'); ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a><br />
					<?php endwhile; else: endif; ?>

					</div>

					<div class="tag-block">

					<h3><a href="/question_categories/social-issues/">Social Issues</a></h3>

					<?php if( have_rows('tag_list_social') ): while ( have_rows('tag_list_social') ) : the_row(); ?>
					<a href="/tag/<?php the_sub_field('tag_url'); ?>"><?php the_sub_field('tag_name'); ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a><br />
					<?php endwhile; else: endif; ?>

					</div>

					<h3><a href="/question_categories/technology/">Technology</a></h3>

					<?php if( have_rows('tag_list_technology') ): while ( have_rows('tag_list_technology') ) : the_row(); ?>
					<a href="/tag/<?php the_sub_field('tag_url'); ?>"><?php the_sub_field('tag_name'); ?> <i class="fas fa-chevron-right" aria-hidden="true"></i></a><br />
					<?php endwhile; else: endif; ?>

					</div>
					
				</div>
				

			</div>
			
		</div>
	</div>
</div>
	
</article>
</main>
    
<?php get_footer(); ?>


