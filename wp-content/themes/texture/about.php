<?php
/* Template Name: About Template */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about-top">
				<div class="about-top-wrap">
					<div class="about-top-left">
						<div class="about-top-heading">
							<h1><span><?php the_field('heading_1'); ?></span></h1>
						</div>
						<div class="inner">
							<h6><span>About Us<span></span></span></h6>
						</div>
					</div>	

					<div class="about-top-right">
						<div class="about-top-right-bg"></div>
						<div class="about-top-image scroll-img" style="background-image: url('<?php the_field('image_1'); ?>');">
							<img src="<?php the_field('image_1'); ?>" alt="<?php the_field('heading_1'); ?>">
						</div>
						<div class="image-effect"></div>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<div class="about-middle">
				<div class="inner">
					<div class="about-heading-wrap">
						<div class="about-heading-left">
							<h2><span><?php the_field('heading_2'); ?></span></h2>
						</div>	

						<div class="about-heading-right">
							
						</div>

						<div class="clear"></div>
					</div>

					<div class="about-middle-wrap wow fadeIn" data-wow-delay="400ms">
						<div class="about-content-left">
							<?php the_field('left_content'); ?>
						</div>	

						<div class="about-content-right">
							<?php the_field('right_content'); ?>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			</div>

			<div class="about-bottom">
				<div class="inner">
					<div class="about-bottom-wrap">
						<div class="about-bottom-left">
							<img src="<?php the_field('image_2'); ?>" alt="<?php bloginfo('name'); ?>" />
							<div class="image-effect"></div>
						</div>	

						<div class="about-bottom-right">
							<div class="about-bottom-content">
								<h6 class="wow fadeIn"><span>Testimonial<span></span></span></h6>
								<p class="wow fadeIn"><?php the_field('testimonial'); ?></p>
								<h3 class="wow fadeIn"><?php the_field('title'); ?></h3>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			</div>

			<div class="about-contact">
				<div class="about-bar"></div>
				<div class="inner wow fadeIn">
					<h3><?php the_field('heading_3'); ?></h3>
					<p><?php the_field('content'); ?></p>

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
