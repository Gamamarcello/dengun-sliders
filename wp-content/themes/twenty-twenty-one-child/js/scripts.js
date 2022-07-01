jQuery(document).ready(function($){
	// Slick Slider
    $(".slick").slick({
    	slidesToShow: 1,
    	fade: true,
	});

	// Swiper Slider
	$(function () {
		const swiper = new Swiper('.swiper', {
			uniqueNavElements:true,
			crossFade:true,
			navigation: {
			  nextEl: '.swiper-button-next',
			  prevEl: '.swiper-button-prev',
			},
		});
	})
});