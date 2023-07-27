jQuery(document).ready(function() {
    var winHeight = jQuery(window).height();
    jQuery('.clients-content-wrap').height(winHeight);
    
	jQuery('.opening h3 a').click(function(e) {
        e.preventDefault();

        if (jQuery(this).closest('.opening').hasClass('opened')) {
        	jQuery(this).closest('.opening').removeClass('opened');
        	jQuery(this).closest('.opening').find('.opening-content').slideUp('medium');
        } else {
        	jQuery(this).closest('.opening').addClass('opened');
        	jQuery(this).closest('.opening').find('.opening-content').slideDown('medium');
        }
    });
});

jQuery(window).on('resize', function(){
    var winHeight = jQuery(window).height();
    jQuery('.clients-content-wrap').height(winHeight);
});