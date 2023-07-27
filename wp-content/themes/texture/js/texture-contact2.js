jQuery(document).ready(function() {
	var winWidth = jQuery(window).width();
    if (winWidth < 767) {
        jQuery('.contact-right').insertBefore( jQuery('.contact-left') );
    }

	jQuery('.wpcf7-form-control, .wpcf7-form-control-wrap input, .wpcf7-form-control-wrap textarea').focus(function() {
		jQuery(this).parent().addClass('focused');
	}).blur(function(){
		jQuery(this).parent().removeClass('focused');
	});
	
	jQuery(document).on('wpcf7mailsent', function(event){
		if ( '72' == event.detail.contactFormId ) {
        	gtag_report_conversion(document.location.href);
    	}
	});

	jQuery(document).on("submit", "#evf-form-672", function (e) {
        return gtag_report_conversion(document.location.href);
    });


});