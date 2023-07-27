	<div class="row contact-wrap text-center">

		<div class="col-12">
		<h2 style="color: #fff; padding-bottom: .5rem;"><?php the_field('mship_title'); ?></h2>
		<p><?php the_field('mship_intro'); ?></p>
	</div>
	</div>

	<div class="row mship-benefit-items">
				<?php if( have_rows('mship_benefit_items') ): while ( have_rows('mship_benefit_items') ) : the_row(); ?>
						<div class="col-md-4" style="color: #fff;">
								
							<a href="<?php the_sub_field('mship_link_url'); ?>">
							<?php
			                $image = get_sub_field('mship_image');

			                ?>

			                <img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

                			<h3><a href="<?php the_sub_field('mship_link_url'); ?>"><?php the_sub_field('mship_subhead'); ?></a></h3>
							<p><?php the_sub_field('mship_text'); ?> <a href="<?php the_sub_field('mship_link_url'); ?>"> <?php the_sub_field('mship_link_text'); ?> <i class="fas fa-chevron-right"></i></a></p>
						</div>
			    <?php endwhile; else: endif; ?>
	</div>

	
	<div class="row mship-benefit-links">
	<div class="col-12 text-center">
	<a href="<?php the_field('mship_more_url'); ?>" class="btn hm-more"><?php the_field('mship_more_button_text'); ?></a> 
	<a href="<?php the_field('mship_apply_url'); ?>" class="btn hm-more"><?php the_field('mship_apprl_button_text'); ?></a>
	</div>
</div>