$(document).ready(function(){
	var figure = $('figure');

	figure.click(function(){
		$(this).toggleClass('isEnlarged');
	});


	// SCROLL ON CLICK
	// --------------------------------------------------------------------------
	$('.menu li a').click(function(){
		var headerHeight = 40;

		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top - headerHeight
		}, 500);
		return false;
	});


});