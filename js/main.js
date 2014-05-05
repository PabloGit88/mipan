$(function() {
	$('.jcarousel').jcarousel({
		// Configuration goes here
	});
$('.jcarousel').jcarousel('scroll', '+=2');
	
	$('.jcarousel-prev').click(function() {
		$('.jcarousel').jcarousel('scroll', '-=1');
	});

	$('.jcarousel-next').click(function() {
		$('.jcarousel').jcarousel('scroll', '+=1');
	});
});
