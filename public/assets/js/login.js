(function ($) {
	$(document).on('click', '#close-msg', function(e){
		e.preventDefault();
		$(this).parent('div').fadeOut(500);
	});
})( jQuery );