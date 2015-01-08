$(document).ready(function() {
	$('[data-role="article-thum"]').slick({
		dots: false,
		autoplay: true,
		arrows: false,
		infinite: true,
		speed: 600,
		slidesToShow: 1,
		adaptiveHeight: true,
		pauseOnHover: false,
		responsive: true,
		slide: 'li'
	});


if ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
	console.log("SP");
}
else {
	articleMeta();
}

	function articleMeta() {
		var $target = $('main[role=main] > article');

		$target.hover(function() {
			$(this).find('header').animate({
				top: '0'
			});
		}, function() {
			$(this).find('header').animate({
				top: '-200px'
			});
		});

	}


});