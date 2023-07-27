


<!-- begin footer -->
<footer>

<div class="container-fluid ftwraptop">
<div class="container">
	<div class="row main-row">

            <div class="col-md-3 profile-ft">
				<div class="logo-ft">
					<?php 
								$image = get_field('footer-logo', 'option');
								if( !empty( $image ) ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<?php the_field('footer_authorisation_text', 'option'); ?>
				<?php the_field('footer_copyright', 'option'); ?>
			</div>

            <div class="col-md-4 col-lg-2 contact-us-ft">

			</div>
			
			<div class="col-md-3 col-lg-3 offset-lg-1 footer-nav">
			<h2>Site Map</h2>
				<div class="nav-ft">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_id' => 'topmenu', 'container_class' => 'menu-ft', 'items_wrap' => '<ul id="mymenu">%3$s</ul>' ) ); ?>
				</div>
			</div>
			
			<div class="col-md-2 col-lg-2 social-logos">
				<h2>SHARE</h2>
					<a href="<?php the_field('facebook_url', 'option'); ?>" class="fb-share" style="margin-right: 10px;"><i aria-hidden="true" class="fab fa-facebook-square fa-3x" title="Share on facebook"></i>
					<span class="sr-only">Share on facebook</span>
					</a>
				
					<a href="<?php the_field('twitter_url', 'option'); ?>" class="tw-share"><i aria-hidden="true" class="fab fa-twitter-square fa-3x" title="Share on twitter"></i>
					<span class="sr-only">Share on twitter</span></a>
			</div>
	</div> <!-- end row -->

</div> <!-- end container -->
</div><!-- end container-fluid -->

</footer><!-- end footer -->

</div><!-- end wrapper -->

<a id="scroll-to-top" title="Back To Top" class="scroll-to-top" href="#">
<span class=" " aria-hidden="true">
	<i class="fas fa-arrow-up"></i></span>
<span class="sr-only">Error:</span>
</a>

<?= wp_footer() ?> 

<script>
	const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});// JavaScript Document
</script>

<script>
		var path = document.querySelector('.stD');
		var length = path.getTotalLength();
		console.log(length);
</script>

</body>

</html>