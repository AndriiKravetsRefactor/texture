<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package texture
 */

?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="inner">
			<div class="footer-left">
				<p>COPYRIGHT &copy; PRETIGE PARTNERS LTD. REGISTERED TRADEMARK.</p>
			</div>
			
			<div class="footer-right">
				<?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
			</div>
			
			<div class="clear"></div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<div id="site-menu">
	<div class="site-menu-inner">
		<div class="site-menu-bg"></div>
		<div class="site-menu">
			<div class="menu-left">
				<div class="menu-image" style="background-image: url('<?php the_field('menu_image', 'option'); ?>');"></div>
				<div class="site-branding">
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
				</div><!-- .site-branding -->
			</div>

			<div class="menu-right">
				<div id="mobile-close">
					<a href="#">
						<small>Close Menu</small>
						<span></span>
					</a>
					<div class="clear"></div>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<?php 
					global $post;
					$postid = $post->ID;

					$menu_name = 'primary_menu';
		 
					if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
					    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
					    $menu_items = wp_get_nav_menu_items($menu->term_id);
					    $menu_list = '<ol id="menu-' . $menu_name . '">';
					 	
					 	$c = 1;
					    foreach ( (array) $menu_items as $key => $menu_item ) {
					        $title = $menu_item->title;
					        $url = $menu_item->url;
					        $page_id = $menu_item->object_id;
					        if ($page_id == $postid) {
					        	$menu_list .= '<li><a class="active" href="' . $url . '"><span>0' . $c . '</span><small>' . $title . '</small></a></li>';
					        } else {
					        	$menu_list .= '<li><a href="' . $url . '"><span>0' . $c . '</span><small>' . $title . '</small></a></li>';
					        }
					        $c++;
					    }
					    $menu_list .= '</ol>';

					    echo $menu_list;
					} ?>
				</nav><!-- #site-navigation -->

				<div class="menu-content animate-1">
					<div class="menu-col">
						<h5>Get in Touch</h5>
						<p><?php the_field('address', 'option'); ?></p>
					</div>

					<div class="menu-col animate-2">
						<h5>&nbsp;</h5>
						<?php $phone = get_field('phone', 'option');
						$phone = str_replace(' ', '', $phone); ?>
						<p><span>T</span> <a onclick="return gtag_report_conversion('tel:<?php echo $phone; ?>');" href="tel:<?php echo $phone; ?>"><?php the_field('phone', 'option'); ?></a><br />
						<span>E</span> <a onclick="return gtag_report_conversion('mailto:<?php the_field('email', 'option'); ?>');" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
					</div>

					<div class="menu-col last-col animate-2">
						<h5>Follow us</h5>
						<div class="footer-social">
							<a href="<?php the_field('twitter', 'option'); ?>" class="animate-3" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Texture London" /></a>
							<a href="<?php the_field('facebook', 'option'); ?>" class="animate-4" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Texture London" /></a>
							<a href="<?php the_field('instagram', 'option'); ?>" class="animate-5" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Texture London" /></a>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="site-transition"></div>

<?php wp_footer(); ?>


</body>
</html>
