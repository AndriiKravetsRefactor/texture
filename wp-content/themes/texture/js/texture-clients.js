jQuery(document).ready(function() {
    var winWidth = jQuery(window).width();
    if (winWidth < 767) {
        jQuery('.contact-right').insertBefore( jQuery('.contact-left') );
    }
});