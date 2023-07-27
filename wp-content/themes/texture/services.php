<?php
/* Template Name: Services Inner Template */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="services-iwrap">
				<div class="service-left services-ileft show-image service-single-left">
					<div class="service-sticky-image">
						<div class="service-image" style="background-image: url('<?php the_field('sub_image'); ?>');">
                            <div class="featured-client">
                            	<div class="featured-client-title">Featured Client</div>
                                <?php the_field('featured_client'); ?>
                            </div>
                        </div>
					</div>
				</div>

				<div class="service-right services-iright service-single-right">
					<div class="services-container">
						<div class="services-content">
							<div class="services-link">
								<a href="/capabilities/">All Services</a>
							</div>
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
                            <div class="featured-services-wrapper">
                                <h3>Featured Services</h3>
                                <?php
                                if( have_rows('featured_services') ) {
                                ?>
                                    <?php while( have_rows('featured_services') ) : the_row(); ?>
                                        <div class="item">- <?php the_sub_field('service'); ?></div>
                                    <?php endwhile; ?>
                                <?php } ?>
                            </div>
						</div>
					</div>
				</div>
			</div>

			<div class="about-contact">
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