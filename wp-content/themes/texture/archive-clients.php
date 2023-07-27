<?php
/* Template Name: Client Template */

get_header(); ?>

	<div class="contact-wrap">
		<div class="contact-inner">
			<div class="contact-left">
				<div class="clients-content-wrap">
					<div class="clients-content-scroll">
						<div class="clients-content">
							<h1><?php echo get_the_title(238); ?></h1>
							<?php $client_content = new WP_Query( 'pagename=clients-content' );
		    				while ( $client_content->have_posts() ) : $client_content->the_post();
		        				the_content();
		    				endwhile;
		    				wp_reset_postdata(); ?>
		    			</div>

						<ul class="client-listing">
							<?php
							$args = array(
								'post_type' => 'clients',
								'posts_per_page' => -1
							);
							
							$clients = new WP_Query($args);

							if($clients->have_posts()) : 
								$c = 1;
								while($clients->have_posts()) : $clients->the_post(); ?>
									<li data-wow-delay="<?php echo $delay; ?>ms">
							        	<a href="#client-<?php echo $c; ?>" <?php if ($c == '1') { echo 'class="active"'; } ?>>
							        		<span></span>
							        		<img src="<?php the_field('logo'); ?>">
							        	</a>
							       	</li>
								<?php $c++;
								endwhile;
							endif;
							wp_reset_query(); ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="contact-right">
				<div class="clients-holder-sticky">
				<?php
				$args = array(
					'post_type' => 'clients',
					'posts_per_page' => -1
				);
				
				$clients = new WP_Query($args);

				if($clients->have_posts()) : 
					$c = 1;
					while($clients->have_posts()) : $clients->the_post(); ?>
						<div id="client-<?php echo $c; ?>" class="clients <?php if ($c == '1') { echo 'active'; } ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
				        	<div class="client-content">
				        		<div class="client-wrap">
					        		<div class="client-left">
					        			<h4><?php the_title(); ?></h4>
					        			<p>
					        				<?php $cats = wp_get_post_terms($post->ID, 'client_category');
					        				$numItems = count($cats);
											$i = 0;
					        				foreach ($cats as $cat) {
					        					$catname = $cat->name;
					        					if(++$i === $numItems) {
												    echo $catname;
												} else {
													echo $catname . ' / ';
												}
					        				} ?>
					        			</p>
					        		</div>
					        		<div class="client-right">
					        			<?php $external_link = get_post_meta(get_the_ID(), 'external_link', true);
					        			if ($external_link) { ?>
					        				<a href="<?php echo $external_link; ?>" target="_blank"></a>
					        			<?php } else { ?>
					        				<a href="#"></a>
					        			<?php } ?>
					        		</div>
					        	</div>
				        	</div>
				        </div>
					<?php $c++;
					endwhile;
				endif;
				wp_reset_query(); ?>
			</div>
			</div>
		</div>
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

<?php get_footer();
