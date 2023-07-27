function imageEffect(element) {
    console.log(element);
    jQuery(element).addClass('start-effect');

    setTimeout(function () {
        jQuery(element).addClass('show-image');
    }, 800);

    setTimeout(function () {
        jQuery(element).addClass('end-effect');
    }, 900);
}

jQuery(window).load(function() {
	var headerHeight = jQuery('.site-header').outerHeight();
	jQuery('#page').css('padding-top', headerHeight);

    var aboutLeft = jQuery('.about-top-heading').outerHeight();
    jQuery('.about-top-right-bg').height(aboutLeft);
});

jQuery(window).on('resize', function(){
    var headerHeight = jQuery('.site-header').outerHeight();
    console.log(headerHeight);
	jQuery('#page').css('padding-top', headerHeight);
});

jQuery(window).load(function() {
    setTimeout(function () {
        jQuery('.about-top').addClass('animate');
        jQuery('.about-heading-left').addClass('animate');
    }, 300);

    jQuery('.about-top-right').waypoint(function() {
        imageEffect('.about-top-right');
    }, {offset:'70%'});

    jQuery('.about-bottom-left').waypoint(function() {
        imageEffect('.about-bottom-left');
    }, {offset:'80%'});

    setTimeout(function () {
        new WOW().init();
    }, 300);
});