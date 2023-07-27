jQuery(window).load(function() {
	var headerHeight = jQuery('.site-header').outerHeight();
	jQuery('#page').css('padding-top', headerHeight);
});

jQuery(window).on('resize', function(){
    var headerHeight = jQuery('.site-header').outerHeight();
	jQuery('#page').css('padding-top', headerHeight);
});