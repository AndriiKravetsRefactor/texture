jQuery(window).load(function() {
	var headerHeight = jQuery('.site-header').outerHeight();
	jQuery('.services-image').css('padding-top', headerHeight);
    //jQuery('.services-iright').css('padding-top', headerHeight);

    var me = jQuery('.services-content h1');
    me.html(me.html().replace(/^(\w+)/, '<span>$1</span>'));
});

jQuery(window).on('resize', function(){
    var headerHeight = jQuery('.site-header').outerHeight();
	jQuery('.services-image').css('padding-top', headerHeight);
    jQuery('.services-iright').css('padding-top', headerHeight);
});