$(function() {
	$('.jcarousel').jcarousel({
		wrap: 'both'
	});
	
	$('.jcarousel-prev').click(function(e) 
	{
		e.preventDefault();
		$('.jcarousel').jcarousel('scroll', '-=1');
	});

	$('.jcarousel-next').click(function(e) 
	{
		e.preventDefault();
		$('.jcarousel').jcarousel('scroll', '+=1');
	});
});
