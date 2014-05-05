$(function() {
	$('.jcarousel').jcarousel({
		wrap: 'both'
	});
	
	$('.jcarousel-prev').click(function() {
		$('.jcarousel').jcarousel('scroll', '-=1');
	});

	$('.jcarousel-next').click(function() {
		$('.jcarousel').jcarousel('scroll', '+=1');
	});
});
