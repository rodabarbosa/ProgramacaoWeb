$(document).ready(function() {
		$('.piro_overlay,.piro_html').remove(); 
	
		$.piroBox_ext({
		piro_speed :700,
		bg_alpha : 0.6,
		piro_scroll : true,
		piro_drag :false,
		piro_nav_pos: 'bottom',
		close_all: '.piro_close,.piro_overlay'
	});
});