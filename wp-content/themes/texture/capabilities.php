<?php
/* Template Name: Services Template */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="service-padding">
				<div class="service-top">
					<div class="inner">
						<h1><span><?php the_field('heading_1'); ?></span></h1>
						<!--<h2><span><?php the_field('sub_heading_1'); ?></span></h2>-->
						<div class="services-bar"></div>
					</div>
				</div>
			</div>

			<div class="services first-services">
				<div class="inner">
					<?php if( have_rows('services_1') ):
						$c = 1;
					    while ( have_rows('services_1') ) : the_row();
        					if ($c % 2 == 0) { ?>
        						<div class="service-wrap image-right">
        							<div class="service-right wow fadeIn"">
        								<h2><?php the_sub_field('heading'); ?></h2>
        								<h4><?php the_sub_field('sub_heading'); ?></h4>
        								<?php the_sub_field('content'); ?>
        								<?php if (get_sub_field('button_link')!="") { ?>
        								<a href="<?php the_sub_field('button_link'); ?>" class="btn-service"><span><?php the_sub_field('button_text'); ?></span></a>
        								<?php } ?>
        							
        							</div>

        							<div class="service-left">
        								<div class="service-image scroll-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
        								<div class="image-effect"></div>
        							</div>
        						</div>
        					<?php } else { ?>
        						<div class="service-wrap">
        							<div class="service-left">
        								<div class="service-image scroll-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
        								<div class="image-effect"></div>
        							</div>

        							<div class="service-right wow fadeIn">
        								<h2><?php the_sub_field('heading'); ?></h2>
        								<h4><?php the_sub_field('sub_heading'); ?></h4>
        								<?php the_sub_field('content'); ?>
        								<?php if (get_sub_field('button_link')!="") { ?>
        								<a href="<?php the_sub_field('button_link'); ?>" class="btn-service"><span><?php the_sub_field('button_text'); ?></span></a>
        								<?php } ?>
        							</div>
        						</div>
        					<?php }
    						$c++;
    					endwhile;
					endif; ?>
				</div>
			</div>

			<div class="testimonial">
				<div class="inner wow fadeIn">
					<?php $attachment_id = get_field('logo');
					$size = 'thumbnail';
					$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
					<img src="<?php echo $image[0]; ?>" />
					<p><?php the_field('testimonial'); ?></p>
					<h3><?php the_field('name'); ?></h3>
					<h5><?php the_field('title'); ?></h5>
				</div>
			</div>

			<div class="services">
				<div class="inner">
					<?php if( have_rows('services_2') ):
						$c = 1;
					    while ( have_rows('services_2') ) : the_row();
        					if ($c % 2 == 0) { ?>
        						<div class="service-wrap image-right">
        							<div class="service-right wow fadeIn">
        								<h2><?php the_sub_field('heading'); ?></h2>
        								<h4><?php the_sub_field('sub_heading'); ?></h4>
        								<?php the_sub_field('content'); ?>
        								<?php if (get_sub_field('button_link')!="") { ?>
        								<a href="<?php the_sub_field('button_link'); ?>" class="btn-service"><span><?php the_sub_field('button_text'); ?></span></a>
        								<?php } ?>
        							</div>

        							<div class="service-left">
        								<div class="service-image scroll-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
        								<div class="image-effect"></div>
        							</div>
        						</div>
        					<?php } else { ?>
        						<div class="service-wrap">
        							<div class="service-left">
        								<div class="service-image scroll-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
        								<div class="image-effect"></div>
        							</div>

        							<div class="service-right wow fadeIn">
        								<h2><?php the_sub_field('heading'); ?></h2>
        								<h4><?php the_sub_field('sub_heading'); ?></h4>
        								<?php the_sub_field('content'); ?>
        								<?php if (get_sub_field('button_link')!="") { ?>
        								<a href="<?php the_sub_field('button_link'); ?>" class="btn-service"><span><?php the_sub_field('button_text'); ?></span></a>
        								<?php } ?>
        							</div>
        						</div>
        					<?php }
    						$c++;
    					endwhile;
					endif; ?>
				</div>
			</div>

			<div class="about-contact">
				<div class="about-bar"></div>
				<div class="inner wow fadeIn">
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