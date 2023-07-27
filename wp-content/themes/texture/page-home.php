<?php
/* Template Name: Home Template */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<div id="fullpage">
			<div id="home-header" class="section">
				<div class="home-left">
					<!-- <div class="slides-background"></div> -->
					<div class="slider wow fadeIn">	
						<?php if( have_rows('slides') ):
							while ( have_rows('slides') ) : the_row(); ?>
								<div class="slide-item" style="background-image: url('<?php the_sub_field('image'); ?>');" >
									<img src="<?php the_sub_field('image'); ?>" class="slide-item-img-mob">
									<div class="slider-content">
										<?php if (get_sub_field('heading') !="") { ?>
										<div class="featured-client">
											<div class="featured-client-title"><?php the_sub_field('heading'); ?></div>
											<?php the_sub_field('sub_heading'); ?>
										</div>
										<?php } ?>
									</div>
								</div>
							<?php endwhile;
						endif; ?>
					</div>
				</div>
				<div class="home-right">
					<div class="home-right-content">
						<div class="home-top-animate">
							<h1><?php the_field('heading_1'); ?></h1>
							<a href="<?php the_field('learn_more_link_1'); ?>"><span>learn more</span></a>
						</div>
					</div>
				</div>
				<div class="explore">
					<a href="#">
						<span class="explore-bg wow slideInUp" data-wow-duration="600ms"></span>
						<span class="explore-text wow fadeInDown" data-wow-delay="400ms">explore more</span>
						<span class="explore-icon-1 wow fadeInDown" data-wow-delay="400ms"></span>
						<span class="explore-icon-2 wow fadeInDown" data-wow-delay="400ms"></span>
					</a>
				</div>
				<div class="home-right-bg"></div>
				<div class="clear"></div>
			</div>
			<div id="about-us" class="section">
				<div class="home-wrap">
					<div class="home-left">
						<div class="home-left-inner">
							<h2><span><?php the_field('heading_2'); ?></span></h2>
							<div class="content-fade">
								<h6><span>About Us<span></span></span></h6>
								<?php the_field('content_2'); ?>
								<a href="<?php the_field('learn_more_link_2'); ?>" class="learn-more"><span>learn more</span></a>
							</div>
						</div>
					</div>
					<div class="home-right" style="background-image: url('<?php the_field('background_image_2'); ?>');">
						<img src="<?php the_field('image_2'); ?>" alt="<?php the_field('heading_2'); ?>" alt="Texture London" />
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div id="what-we-do" class="section">
				<div class="home-wrap">
					<?php $has_bg = get_field('background_image_3');
					if ($has_bg) { ?>
					<div class="home-left" style="background-image: url('<?php echo $has_bg; ?>');">
					<img src="<?php echo $has_bg; ?>" />
					<?php } else { ?>
					<div class="home-left">
					<?php } ?>
						<!-- <div class="home-left-inner">
							<h2><span><?php the_field('heading_3'); ?></span></h2>
							<div class="content-fade">
								<h6><span>What we do<span></span></span></h6>
								<?php the_field('content_3'); ?>
								<a href="<?php the_field('learn_more_link_3'); ?>" class="learn-more"><span>learn more</span></a>
							</div>
						</div> -->
					</div>
					<div class="home-right">
						<div class="wow fadeIn" data-wow-duration="2s">
							<h2 class="desktop-title"><?php the_field('heading_3'); ?></h2>
							<h3 class="mobile-title"><span><?php the_field('heading_3'); ?></span></h3>
							<?php the_field('content_3'); ?>
							<ul class="feature-accordion">
							<?php if( have_rows('what_we_do') ):
								$c = 1;
								while ( have_rows('what_we_do') ) : the_row(); ?>
									<li>
										<div class="toggle"><span>0<?php echo $c; ?></span><?php the_sub_field('title'); ?></div>
										<div class="feature-accordion-inner"><?php the_sub_field('content'); ?></div>
									</li>
								<?php $c++;
								endwhile;
							endif; ?>
							</ul>
							<a href="<?php the_field('learn_more_link_3'); ?>" class="learn-more white"><span>learn more</span></a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div id="clients" class="section">
				<div class="home-wrap">
					<div class="home-left">
						<h3><span>Recent Clients</span></h3>
						<ul>
							<?php if( have_rows('clients') ):
								$c = 1;
								$delay = 200;
								while ( have_rows('clients') ) : the_row();
									$post_object = get_sub_field('client');
									$post = $post_object;
									setup_postdata( $post ); ?>
							        <li class="wow fadeInUp" data-wow-delay="<?php echo $delay; ?>ms">
							        	<a href="#client-<?php echo $c; ?>" <?php if ($c == '1') { echo 'class="active"'; } ?>>
							        		<span></span>
							        		<img src="<?php the_field('logo'); ?>" alt="Texture London">
							        	</a>
							       	</li>
							    	<?php wp_reset_postdata();
							    	$c++;
							   		$delay = $delay + 100;
								endwhile;
							endif; ?>
						</ul>
						<a href="/clients/" class="learn-more"><span>learn more</span></a>
					</div>
					<div class="home-right">
						<?php if( have_rows('clients') ):
							$c = 1;
						    while ( have_rows('clients') ) : the_row();
						    	$post_object = get_sub_field('client');
								$post = $post_object;
								setup_postdata( $post );
								$postid = $post->ID; ?>
						        <div id="client-<?php echo $c; ?>" class="clients <?php if ($c == '1') { echo 'active'; } ?>" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
						        	<div class="client-content">
						        		<div class="client-wrap">
							        		<div class="client-left">
							        			<h4><?php the_title(); ?></h4>
							        			<p>
							        				<?php $cats = wp_get_post_terms($postid, 'client_category');
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
							        			<?php
							        			$external_link = get_post_meta($postid, 'external_link', true);
							        			if ($external_link) { ?>
							        				<a href="<?php echo $external_link; ?>" target="_blank"></a>
							        			<?php } else { ?>
							        				<a href="#"></a>
							        			<?php } ?>
							        		</div>
							        	</div>
						        	</div>
						        </div>
							    <?php wp_reset_postdata();
							    $c++;
							endwhile;
						endif; ?>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div id="map-section" class="section home2">
				<div class="map-section">
					
				</div>

				<div id="home-footer" class="site-footer">
					<div class="footer-wrap">
						<div class="footer-left wow fadeInDown" data-wow-delay="0">
							<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="220px" height="30px" viewBox="0 0 2487.000000 475.000000" preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,475.000000) scale(0.100000,-0.100000)" stroke="none">
										<path d="M360 3780 l0 -390 465 0 465 0 0 -1370 0 -1370 420 0 420 0 0 1370 0 1370 465 0 465 0 0 390 0 390 -1350 0 -1350 0 0 -390z"></path>
										<path d="M3620 2410 l0 -1760 1290 0 1290 0 0 385 0 385 -885 0 -885 0 0 300 0 300 540 0 540 0 0 385 0 385 -540 0 -540 0 2 308 3 307 883 3 882 2 0 380 0 380 -1290 0 -1290 0 0 -1760z"></path>
										<path d="M6866 4158 c5 -7 291 -402 637 -877 579 -795 629 -866 617 -885 -11 -18 -1235 -1698 -1263 -1733 -7 -10 93 -13 495 -13 l504 0 389 535 c213 294 391 532 395 530 4 -2 182 -243 396 -534 l389 -530 504 -1 503 0 -14 22 c-9 13 -296 406 -638 873 -343 468 -624 857 -624 867 -1 9 274 393 609 854 336 461 620 853 633 871 l23 33 -504 0 -503 0 -384 -525 c-212 -288 -389 -523 -395 -521 -5 1 -181 237 -390 524 l-380 522 -503 0 c-400 0 -502 -3 -496 -12z"></path>
										<path d="M10940 3780 l0 -390 465 0 465 0 0 -1370 0 -1370 420 0 420 0 0 1370 0 1370 465 0 465 0 0 390 0 390 -1350 0 -1350 0 0 -390z"></path>
										<path d="M14173 3008 c3 -1147 3 -1164 24 -1249 145 -585 524 -949 1122 -1076 118 -26 142 -27 386 -28 295 0 392 13 587 81 219 76 387 183 539 340 222 232 347 522 379 876 6 66 10 546 10 1166 l0 1052 -420 0 -419 0 -3 -1112 c-4 -1241 1 -1152 -74 -1316 -41 -90 -131 -187 -214 -231 -175 -93 -505 -106 -714 -27 -140 53 -230 135 -296 270 -80 163 -74 69 -78 1309 l-2 1107 -415 0 -416
										0 4 -1162z"></path>
										<path d="M17880 2410 l0 -1760 410 0 410 0 0 675 0 675 404 0 404 0 359 -672 358 -673 459 -3 c365 -2 457 0 453 10 -2 7 -181 341 -396 742 -215 401 -391 732 -391 736 0 3 42 33 93 65 215 138 372 352 431 586 41 164 41 396 1 555 -102 397 -434 687 -913 796 -96 22 -109 22 -1089 25 l-993 4 0 -1761z m1925 976 c131 -34 211 -90 252 -173 23 -49 27 -69 27 -143 0 -154 -57 -230 -214
										-283 -64 -21 -77 -22 -617 -25 l-553 -3 0 321 0 320 528 0 c407 0 538 -3 577 -14z"></path>
										<path d="M21760 2410 l0 -1760 1290 0 1290 0 0 385 0 385 -885 0 -885 0 0 300 0 300 540 0 540 0 0 385 0 385 -540 0 -540 0 2 308 3 307 883 3 882 2 0 380 0 380 -1290 0 -1290 0 0 -1760z"></path>
									</g>
								</svg>
							</a>
							<p>COPYRIGHT &copy; TEXTURE LONDON LTD. REGISTERED TRADEMARK.</p>
						</div>
						<div class="footer-middle wow fadeInDown" data-wow-delay="100ms">
							<h5>Get in Touch</h5>

							<div class="touch-wrap">
								<div class="touch-left">
									<p><?php the_field('address', 'option'); ?></p>
								</div>
								<div class="touch-right">
									<?php $phone = get_field('phone', 'option');
									$phone = str_replace(' ', '', $phone); ?>
									<p><span>T</span> <a href="tel:<?php echo $phone; ?>"><?php the_field('phone', 'option'); ?></a><br />
									<span>E</span> <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
								</div>
							</div>

							<h6>We’d love to know how we could help. Get in touch for a chat or to arrange a meeting.</h6>
						</div>
						<div class="footer-right wow fadeInDown" data-wow-delay="200ms">
							<h5>Follow us</h5>

							<div class="footer-social">
								<a href="<?php the_field('twitter', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Texture London" /></a>
								<a href="<?php the_field('facebook', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Texture London" /></a>
								<a href="<?php the_field('instagram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Texture London" /></a>
							</div>
						</div>

						<div class="footer-copyright">
							<p>COPYRIGHT &copy; TEXTURE LONDON LTD. REGISTERED TRADEMARK.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="about-contact home-mobile-footer">
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

<?php get_footer();