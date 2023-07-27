jQuery(document).ready(function() {
	jQuery('#search').focus(function() {
		jQuery(this).parent().addClass('focused');
	}).blur(function(){
		jQuery(this).parent().removeClass('focused');
	});
});