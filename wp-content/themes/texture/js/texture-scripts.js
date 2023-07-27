jQuery(document).ready(function() {
	jQuery('.main-navigation a').on('click', function(e){
// 		if (jQuery(this).attr('href') == 'https://texture.london/contact-us/') {
// 			e.preventDefault();
// 			gtag_report_conversion(document.location.href);
// 			document.location.href = jQuery(this).attr('href');
// 		}
	})
	
	jQuery("#mobile-slide a").click(function(e) {
        e.preventDefault();
        jQuery('#site-menu').addClass('masked');
        jQuery('body').addClass('menu-opened');

        setTimeout(function () {
			jQuery('.site-menu-bg').addClass('slideup');
		}, 400);

		setTimeout(function () {
			jQuery('body').addClass('menu-anim-1');
		}, 800);

		setTimeout(function () {
			jQuery('body').addClass('menu-anim-2');
		}, 1100);

		setTimeout(function () {
			jQuery('body').addClass('menu-anim-3');
		}, 1400);

		setTimeout(function () {
			jQuery('body').addClass('menu-anim-4');
		}, 1600);

		setTimeout(function () {
			jQuery('body').addClass('menu-anim-5');
		}, 1700);

		setTimeout(function () {
			jQuery('body').addClass('menu-anim-6');
		}, 1800);
    });

    jQuery("#mobile-close a").click(function(e) {
        e.preventDefault();

        jQuery('.site-menu-bg').removeClass('slideup');

        setTimeout(function () {
        	jQuery('body').removeClass('menu-anim-1');
			jQuery('body').removeClass('menu-anim-2');
			jQuery('body').removeClass('menu-anim-3');
			jQuery('body').removeClass('menu-anim-4');
			jQuery('body').removeClass('menu-anim-5');
			jQuery('body').removeClass('menu-anim-6');
		}, 300);

        setTimeout(function () {
        	jQuery('#site-menu').removeClass('masked');
			jQuery('body').removeClass('menu-opened');
		}, 400);
    });
	
	jQuery('.external-link').on('click', function(){
		window.location = jQuery(this).data('location');
	});

    jQuery(".content-area a").click(function(e) {
        e.preventDefault();
        var target = jQuery(this).attr('href');

//         if (target.indexOf("mailto") >= 0) {
		if (target.includes("mailto")) {
            window.location.href = target;
        } else {
            if (target != '#') {
                jQuery('.site-transition').addClass('swipe');
                jQuery('#loader').css('transition', 'none');

                setTimeout(function () {
                    jQuery('.site-transition').addClass('swipe-right');
                }, 400);

                setTimeout(function () {
                    window.location.href = target;
                }, 500);
            }
        }
    });

    jQuery(".footer-right a").click(function(e) {
        e.preventDefault();
        var target = jQuery(this).attr('href');
        jQuery('.site-transition').addClass('swipe');
        jQuery('#loader').css('transition', 'none');

        setTimeout(function () {
            jQuery('.site-transition').addClass('swipe-right');
        }, 400);

        setTimeout(function () {
            window.location.href = target;
        }, 500);
    });
});

jQuery(window).load(function() {
	jQuery('#loader').addClass('loaded4');

    setTimeout(function () {
        jQuery('#loader').addClass('loaded5');
    }, 700);

    setTimeout(function () {
        jQuery('#catapult-cookie-bar').addClass('show-cookie-bar');
    }, 5700);
});