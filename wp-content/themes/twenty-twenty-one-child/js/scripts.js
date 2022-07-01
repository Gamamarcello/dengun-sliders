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


// Vanilla Slider
const prev = document.querySelector('.slider-arrow-prev');
const next = document.querySelector('.slider-arrow-next');
const sliders = document.getElementsByClassName('slider-item');
let slideIndex = 0;

const showSlides = (n) => {
    
    if (n > sliders.length - 1 ){ n = 0, slideIndex = n }
    if ( n < 0 ){ n = sliders.length - 1; slideIndex = n}
    for (i = 0; i < sliders.length; i++){
        sliders[i].style.display = 'none';
    }

    sliders[n].style.display = 'flex';
}

showSlides(slideIndex)

prev.addEventListener('click', () => showSlides(--slideIndex));
next.addEventListener('click', () => showSlides(++slideIndex));
