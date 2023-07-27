jQuery(document).ready(function() {
	var winHeight = jQuery(window).height();
	jQuery('.clients-content-wrap').height(winHeight);

    jQuery("ul.client-listing li a").click(function(e) {
        e.preventDefault();

        var target = jQuery(this).attr('href');
        
        jQuery('ul.client-listing li a').removeClass('active');
		jQuery(this).addClass('active');

		jQuery('.clients').removeClass('active');
		jQuery(target).addClass('active');
    });
});

jQuery(window).on('resize', function(){
    var winHeight = jQuery(window).height();
	jQuery('.clients-content-wrap').height(winHeight);
});