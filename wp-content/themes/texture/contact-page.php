<?php
/* Template Name: Contact Page Template */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="contact-wrap">
				<div class="contact-inner">
					<div class="contact-left">
						<h1><?php the_field('heading'); ?></h1>
						<p><?php the_field('content'); ?></p>

						<div class="touch-wrap">
							<div class="touch-left">
								<p><?php the_field('address', 'option'); ?></p>
							</div>
							<div class="touch-right">
								<p><span>T</span> <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a><br />
								<span>E</span> <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
							</div>
							<div class="clear"></div>
						</div>

						<?php
						/*
						<div class="footer-social">
							<h3>Follow Us</h3>
							<a href="<?php the_field('twitter', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/contact-twitter.png" /></a>
							<a href="<?php the_field('facebook', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/contact-facebook.png" /></a>
							<a href="<?php the_field('instagram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/contact-instagram.png" /></a>
						</div>
							*/
						?>
						
						<div class="contact-form">
							<?php echo do_shortcode('[everest_form id="672"]'); ?>
						</div>
					</div>
					<div class="contact-right">
						<div id="map"></div>
						<script type="text/javascript">
						function initMap() {
							var myLatLng = {lat: 51.5225691, lng: -0.0781742};

							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 16,
								center: myLatLng,
								streetViewControl: false,
								fullscreenControl: false,
								styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
							});

							var marker = new google.maps.Marker({
								position: myLatLng,
								map: map,
								icon: '/wp-content/themes/texture/images/pin.png',
							});
						}
						</script>
						<script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXYo2139aKbTFKteH2j3WaULdyZPsVUu0&callback=initMap"></script>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div><!-- #primary -->

<?php get_footer();
