<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/services-pic-privacy.jpg" alt="AMSRO" />
		<p><a href="/privacy/">Privacy</a></p>
	</div>
	<div class="ser-links">

		<?php
							$args = array (
								'post_type'              => 'page',
								'post_parent' 			 => 837,
								'posts_per_page'	 	 => '2',
								'offset'                 => '0',
								'order'                  => 'ASC',
								'orderby'                => 'date',
							);

							// The Query
							$query = new WP_Query( $args );

							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post(); 
		?>
							<div class="section-link">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fas fa-chevron-right"></i> <?php the_title(); ?></a>
							</div>

		<?php	
			}
			} else {
			}

			wp_reset_postdata();
		?>

	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/services-pic-advocacy.jpg" alt="AMSRO" />
		<p>Advocacy</p>
	</div>
	<div class="ser-links">
		<a href="">Link</a><br />
		<a href="">Link</a>
	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/services-pic-workplace.jpg" alt="AMSRO" />
		<p>Workplace</p>
	</div>
	<div class="ser-links">
		<a href="">Link</a><br />
		<a href="">Link</a>
	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/services-pic-quality.jpg" alt="AMSRO" />
		<p>Quality</p>
	</div>
	<div class="ser-links">
		<a href="">Link</a><br />
		<a href="">Link</a>
	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/temp-pic.jpg" alt="AMSRO" />
		<p>Benchmarking</p>
	</div>
	<div class="ser-links">
		<a href="">Link</a><br />
		<a href="">Link</a>
	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/services-pic-benefits.jpg" alt="AMSRO" />
		<p>Partners</p>
	</div>
	<div class="ser-links">
		<a href="">Link</a><br />
		<a href="">Link</a>
	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/temp-pic.jpg" alt="AMSRO" />
		<p>Training</p>
	</div>
	<div class="ser-links">
		<a href="">Link</a><br />
		<a href="">Link</a>
	</div>
	</div>
	</div> <!-- end col -->
	
	<div class="col-lg-3 col-md-4 col-xs-6">
	<div class="service-item">	
	<div class="ser-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/temp-pic.jpg" alt="AMSRO" />
		<p>Resources</p>
	</div>
	<div class="ser-links">
		<a href="">Link</a><br />
		<a href="">Link</a>
	</div>
	</div>
	</div> <!-- end col --><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>