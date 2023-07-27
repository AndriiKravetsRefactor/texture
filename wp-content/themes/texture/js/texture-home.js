function loaded() {
    setTimeout(function () {
        jQuery('#loader').addClass('loaded');
    }, 400);
}

function loaded2() {
    setTimeout(function () {
        jQuery('#loader').addClass('loaded2');
    }, 1000);

    setTimeout(function () {
        jQuery('#loader').addClass('loaded3');
    }, 1200);
}

function loaded3() {
    setTimeout(function () {
        jQuery('#loader').addClass('loaded4');
    }, 300);

    setTimeout(function () {
        jQuery('#loader').addClass('loaded5');
    }, 500);
}

jQuery(document).ready(function() {
    jQuery.when(loaded()).done(function() {
        loaded2();
    });

    var winWidth = jQuery(window).width();
    if (winWidth > 900) {
        jQuery('#fullpage').fullpage({
            scrollBar: true,
            css3: true,
            scrollingSpeed: 1000,
            onLeave: function(origin, destination, direction) {
                var targetDiv = destination["index"];
                if (targetDiv == 1) {
                    if (!jQuery('#about-us').hasClass('animate')) {
                        jQuery('#about-us').addClass('animate');
                    }
                }

                if (targetDiv == 2) {
                    if (!jQuery('#what-we-do').hasClass('animate')) {
                        jQuery('#what-we-do').addClass('animate');
                    }
                }

                if (targetDiv == 3) {
                    if (!jQuery('#clients').hasClass('animate')) {
                        jQuery('#clients').addClass('animate');
                    }
                }

                if (targetDiv == 4) {
                    if (!jQuery('#map-section').hasClass('animate')) {
                        jQuery('#map-section').addClass('animate');
                    }
                }
            }
        });
    } else {
        jQuery('#about-us .home-right').insertBefore( jQuery('#about-us .home-left') );
    }

    if (winWidth < 768) {
        var winHeight = jQuery(window).height();
        var winHeight = winHeight - 72;
        jQuery('#home-header').height(winHeight);

        var introHeight = jQuery('#home-header .home-right').height();
        var slideHeight = winHeight - introHeight;
        jQuery('#home-header .home-left').height(slideHeight);
    }

    jQuery('.wwd-slides ul').bxSlider({
    	pager: false,
    	minSlides: 3,
    	maxSlider: 3,
    	mode: 'vertical',
  		moveSlides: 1,
    });

    jQuery(".explore a").click(function(e) {
        e.preventDefault();

        jQuery.fn.fullpage.moveSectionDown();
    });

    jQuery("#clients ul li a").click(function(e) {
        e.preventDefault();

        var target = jQuery(this).attr('href');
        
        jQuery('#clients ul li a').removeClass('active');
		jQuery(this).addClass('active');

		jQuery('.clients').removeClass('active');
		jQuery(target).addClass('active');
    });

    jQuery(".home-top-animate a").click(function(e) {
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

    jQuery("#about-us .home-left a").click(function(e) {
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

    jQuery("#what-we-do .home-left a").click(function(e) {
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

    jQuery("#clients .home-left a.learn-more").click(function(e) {
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

jQuery(window).on('resize', function(){
    var winWidth = jQuery(window).width();
    if (winWidth < 768) {
        var winHeight = jQuery(window).height();
        var winHeight = winHeight - 72;
        jQuery('#home-header').height(winHeight);

        var introHeight = jQuery('#home-header .home-right').height();
        var slideHeight = winHeight - introHeight;
        jQuery('#home-header .home-left').height(slideHeight);
    }
});

jQuery(window).load(function() {
    jQuery.when(loaded2()).done(function() {
        loaded3();
    });

    setTimeout(function () {
        jQuery('#home-header').addClass('animate');
    }, 600);

    setTimeout(function () {
        jQuery('#home-header').addClass('animate2');
    }, 1800);

    var winWidth = jQuery(window).width();
    if (winWidth > 900) {
        setTimeout(function () {
            new WOW().init();
        }, 1800);
    }
});


jQuery('.home-left .slider').slick({
    dots: true,
    infinite: true,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 6000,
    pauseOnFocus: false,
    pauseOnHover: false
});

jQuery('.feature-accordion .toggle').click(function(e) {
  	e.preventDefault();
    let $this = jQuery(this);
  
    if ($this.next().hasClass('show')) {
        $this.removeClass('active');
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        jQuery('.feature-accordion .toggle').removeClass('active');
        $this.addClass('active');
        $this.parent().parent().find('li .feature-accordion-inner').removeClass('show');
        $this.parent().parent().find('li .feature-accordion-inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});