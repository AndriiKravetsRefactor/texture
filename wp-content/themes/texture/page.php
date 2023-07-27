<?php get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div><!-- #primary -->

<?php get_footer();
