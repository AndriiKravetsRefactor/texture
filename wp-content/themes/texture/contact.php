<?php
/* Template Name: Contact Template */

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
								<p><span>T</span> <?php the_field('phone', 'option'); ?><br />
								<span>E</span> <?php the_field('email', 'option'); ?></p>
							</div>
							<div class="clear"></div>
						</div>

						<div class="footer-social">
							<h3>Follow Us</h3>
							<a href="<?php the_field('twitter', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /></a>
							<a href="<?php the_field('facebook', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /></a>
							<a href="<?php the_field('instagram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" /></a>
						</div>
					</div>
					<div class="contact-right">
						<div class="contact-outer">
							<div class="contact-form">
								<h2>Drop a few lines to us</h2>
								<?php echo do_shortcode('[everest_form id="672"]'); ?>
							</div>
							<div class="contact-map">
								<a href="#">View on Map</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div><!-- #primary -->

<?php get_footer();
