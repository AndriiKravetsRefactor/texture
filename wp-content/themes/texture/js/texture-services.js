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
	jQuery('.service-padding').css('padding-top', headerHeight);

	jQuery('.service-right h2').each(function() {
		var me = jQuery(this);
     	me.html(me.html().replace(/^(\w+)/, '<span>$1</span>'));
	});

	var winWidth = jQuery(window).width();
    if (winWidth < 901) {
        jQuery('.service-wrap').each(function() {
        	jQuery(this).find('.service-left').insertBefore(jQuery(this).find('.service-right'));
		});
    }

    var winWidth = jQuery(window).width();
    if (winWidth < 768) {
        var imageHeight = winWidth*2/3;
        jQuery('.service-left').height(imageHeight);
    }
});

jQuery(window).on('resize', function(){
    var headerHeight = jQuery('.site-header').outerHeight();
	jQuery('.service-padding').css('padding-top', headerHeight);

    var winWidth = jQuery(window).width();
    if (winWidth < 768) {
        var imageHeight = winWidth*2/3;
        jQuery('.service-left').height(imageHeight);
    }
});

jQuery(window).load(function() {
    setTimeout(function () {
        jQuery('.service-top').addClass('animate');
    }, 200);

    setTimeout(function () {
        jQuery('.service-wrap').each(function() {
            var self = jQuery(this);

            jQuery(this).waypoint({
                handler: function(){
                    imageEffect(self);
                },
                offset: '80%'
            });
        });
    }, 800);

    setTimeout(function () {
        new WOW().init();
    }, 300);
});