// Slick initialization
jQuery(document).ready(function($){
    $(".slick").slick({
    	slidesToShow: 1,
    	fade: true,
	});

	$(function () {
		const swiper = new Swiper('.swiper', {
			uniqueNavElements:true,
			crossFade:true;
			navigation: {
			  nextEl: '.swiper-button-next',
			  prevEl: '.swiper-button-prev',
			},
		});
	})
});