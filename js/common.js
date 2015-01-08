$(document).ready(function() {
	$('[data-role="article-thum"]').slick({
		dots: false,
		autoplay: true,
		arrows: false,
		infinite: true,
		speed: 400,
		slidesToShow: 1,
		adaptiveHeight: true,
		responsive: true,
		slide: 'li'
	});

});