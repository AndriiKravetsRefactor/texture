<?php
/* Template Name: Client Template */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="contact-wrap">
				<div class="contact-inner">
					<div class="contact-left">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					<div class="contact-right">
						<div class="client-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div><!-- #primary -->

<?php get_footer();
