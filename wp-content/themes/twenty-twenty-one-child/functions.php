<?php

add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
// Enqueue Slick styles and scripts
function themeprefix_slick_enqueue_scripts_styles() {
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick-slider/slick/slick.min.js', array( 'jquery' ), '1.8.1', true );
	wp_enqueue_script( 'swiper-js', get_stylesheet_directory_uri() . '/swiper-slider/swiper.bundle.min.js', array( 'jquery' ), '8.2.6', true );
	wp_enqueue_script( 'slick-init', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), true );

	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick-slider/slick/slick.css', '1.8.1', 'all');
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri(). '/slick-slider/slick/slick-theme.css', '1.8.1', 'all');
	wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri(). '/swiper-slider/swiper.bundle.min.css', '8.2.6', 'all');
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css', 'all');
}


// Slick Slider Shortcode
function slick_slider_shortcode () {

	if( have_rows('slides') ):
		echo '<div class="slick">';

		while( have_rows('slides') ) : the_row();
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			$link = get_sub_field('link');
			$linkText = get_sub_field('link_text');
			$image = get_sub_field('image');

		echo 	'<div class="slide d-md-flex">
					<div class="col-md-6">
						<h3 class="slide-title">'.$title.'</h3>
						<p class="slide-desc">'.$description.'</p>
						<a href="'.$link.'" title="'.$linkText.'">'.$linkText.'</a>
					</div>
					<div class="col-md-6">
						<img src="'.$image['url'].'" title="'.$image['title'].'">				
					</div>
				</div>';

		endwhile;

		echo '</div>';

	endif;
}
add_shortcode('slick_slide', 'slick_slider_shortcode');

// Swipe Slider Shortcode
function swiper_slider_shortcode () {

	if( have_rows('swiperslides') ):
		echo   '<div class="swiper">
				<div class="swiper-wrapper">';

		while( have_rows('swiperslides') ) : the_row();
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			$link = get_sub_field('link');
			$linkText = get_sub_field('link_text');
			$image = get_sub_field('image');

		echo 	'<div class="swiper-slide d-md-flex">
					<div class="col-md-6">
						<h3 class="slide-title">'.$title.'</h3>
						<p class="slide-desc">'.$description.'</p>
						<a href="'.$link.'" title="'.$linkText.'">'.$linkText.'</a>
					</div>
					<div class="col-md-6">
						<img src="'.$image['url'].'" title="'.$image['title'].'">				
					</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>';

		endwhile;

		echo   '</div></div>';

	endif;
}
add_shortcode('swiper_slide', 'swiper_slider_shortcode');