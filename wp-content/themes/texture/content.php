<?php
/* Template Name: Content Template */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="page-content">
				<?php the_content(); ?>
			</div>

			<div class="about-contact">
				<div class="about-bar"></div>
				<div class="inner">
					<h3><?php the_field('heading_3', 39); ?></h3>
					<p><?php the_field('content', 39); ?></p>

					<div class="contact">
                    <span class="contact-info">
                    	<span>T</span> <a onclick="return gtag_report_conversion('tel:<?php echo $phone; ?>');" href="tel:<?php echo $phone; ?>"><?php the_field('phone', 'option'); ?></a>
                    </span>
                    <span class="contact-sep">|</span>
                    <span class="contact-info">
                        <span>E</span> <a onclick="return gtag_report_conversion('mailto:<?php the_field('email', 'option'); ?>');" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                    </span>
                </div>
				</div>
			</div>
		<?php endwhile; ?>
	</div><!-- #primary -->

<?php get_footer();
