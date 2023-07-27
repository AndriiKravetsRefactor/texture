<?php
/* Template Name: Careers Template */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="contact-wrap">
				<div class="contact-inner">
					<div class="contact-left">
						<div class="clients-content-wrap">
							<div class="clients-content-scroll">
								<div class="career-content">
									<h1><?php the_field('heading'); ?></h1>
									<?php the_field('content'); ?>
								</div>

								<div class="career-jobs">
									<?php if( have_rows('job_openings') ):
									    while ( have_rows('job_openings') ) : the_row(); ?>
									        <div class="opening">
									        	<h3><a href="#"><?php the_sub_field('job_title'); ?></a></h3>
									        	<div class="opening-content">
									        		<?php the_sub_field('job_description'); ?>
									        		<div class="career-apply">
														<?php if (get_sub_field('apply_link')) : ?>
														<div class="csubmit external-link">
									        				<a class="external-link" href="<?php the_sub_field('apply_link'); ?>">Apply</a>
									        			</div>
														<?php else : ?>
														<div class="csubmit external-link" data-location="mailto:careers@texture.london?subject=<?php echo htmlspecialchars(urlencode(html_entity_decode('Careers - ' . get_sub_field('job_title'), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>">
									        				<a class="external-link" href="mailto:careers@texture.london?subject=<?php echo htmlspecialchars(urlencode(html_entity_decode('Careers - ' . get_sub_field('job_title'), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>">Apply</a>
									        			</div>
														<?php endif;  ?>
									        			
									        		</div>
									        	</div>
									        </div>
									    <?php endwhile;
									endif; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="contact-right">
						<div class="page-image" style="background-image: url('<?php the_field('page_image'); ?>');"></div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div><!-- #primary -->

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

<?php get_footer();
