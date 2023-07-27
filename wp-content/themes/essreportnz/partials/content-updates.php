	<div class="col-sm-12 col-md-8 offset-md-2 text-center">
		<h2 class="ani animate__fadeInLeft"><?php the_field('updates_title', 'option'); ?></h2>
		<p><?php the_field('updates_intro', 'option'); ?></p>
		<div class="updates-form"><?php gravity_form( 6, false, false, false, '', true ); ?></div>
		<p class="small">By signing up you agree to receive emails. We promise not to spam you. <a href="/privacy-policy/" class="light-link">Read our privacy policy here.</a></p>
	</div>