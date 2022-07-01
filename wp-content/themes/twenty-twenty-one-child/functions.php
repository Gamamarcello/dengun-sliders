<?php

add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
// Enqueue Slick styles and scripts
function themeprefix_slick_enqueue_scripts_styles() {
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/slick-slider/slick/slick.min.js', array( 'jquery' ), '1.8.1', true );
	wp_enqueue_script( 'swiper-js', get_stylesheet_directory_uri() . '/swiper-slider/swiper.bundle.min.js', array( 'jquery' ), '8.2.6', true );

	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/slick-slider/slick/slick.css', '1.8.1', 'all');
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri(). '/slick-slider/slick/slick-theme.css', '1.8.1', 'all');
	wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri(). '/swiper-slider/swiper.bundle.min.css', '8.2.6', 'all');
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

	wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css', 'all');
}

add_action('wp_footer','themepostfix_scripts');

function themepostfix_scripts() {
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/scripts.js');
}


// Slick Slider Shortcode
function slick_slider_shortcode () {
	ob_start();
	
	$title = get_field('title');

	if( have_rows('slides') ):
		echo '<div class="container"><h2 class="title">'.$title.'</h2></div>
			  <div class="slick">';

		while( have_rows('slides') ) : the_row();
			$subtitle = get_sub_field('subtitle');
			$description = get_sub_field('description');
			$link = get_sub_field('link');
			$linkText = get_sub_field('link_text');
			$image = get_sub_field('image');

		echo 	'<div class="slide">
					<div class="d-md-flex">
						<div class="col-md-6">
							<h3 class="slide-title">'.$subtitle.'</h3>
							<p class="slide-desc">'.$description.'</p>
							<a href="'.$link.'" title="'.$linkText.'">'.$linkText.'</a>
						</div>
						<div class="col-md-6">
							<img src="'.$image['url'].'" title="'.$image['title'].'">				
						</div>
					</div>
				</div>';

		endwhile;

		echo '</div>';

	endif;

	return ob_get_clean();
}
add_shortcode('slick_slide', 'slick_slider_shortcode');

// Swipe Slider Shortcode
function swiper_slider_shortcode () {
	ob_start();

	$title = get_field('title');
	if( have_rows('swiperslides') ):
		echo   '<h2 class="title">'.$title.'</h2>
				<div class="swiper">
				<div class="swiper-wrapper">';

		while( have_rows('swiperslides') ) : the_row();
			$subtitle = get_sub_field('subtitle');
			$description = get_sub_field('description');
			$link = get_sub_field('link');
			$linkText = get_sub_field('link_text');
			$image = get_sub_field('image');

		echo 	'<div class="swiper-slide">
					<div class="d-md-flex">
						<div class="col-md-6">
							<h3 class="slide-title">'.$subtitle.'</h3>
							<p class="slide-desc">'.$description.'</p>
							<a href="'.$link.'" title="'.$linkText.'">'.$linkText.'</a>
						</div>
						<div class="col-md-6">
							<img src="'.$image['url'].'" title="'.$image['title'].'">				
						</div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>';

		endwhile;

		echo   '</div></div>';

	endif;

	return ob_get_clean();
}
add_shortcode('swiper_slide', 'swiper_slider_shortcode');


// Vanilla Slider Shortcode
function vanilla_slider_shortcode () {
	ob_start();

	$title = get_field('title', 172);

	if( have_rows('vanillaslides', 172) ):
		echo   '<div class="container">
					<h2 class="title">'.$title.'</h2>
				<div class="slider">';

		while( have_rows('vanillaslides', 172) ) : the_row();
			$subtitle = get_sub_field('subtitle');
			$description = get_sub_field('description');
			$link = get_sub_field('link');
			$linkText = get_sub_field('link_text');
			$image = get_sub_field('image');

		echo 	'<div class="slider">
					<div class="slider-item fade">
						<div class="col-md-6">
							<h3 class="slide-title">'.$subtitle.'</h3>
							<p class="slide-desc">'.$description.'</p>
							<a href="'.$link.'" title="'.$linkText.'">'.$linkText.'</a>
						</div>
						<div class="col-md-6">
							<img src="'.$image['url'].'" title="'.$image['title'].'">				
						</div>
					</div>
				</div>';

		endwhile;

		echo   '<div class="slider-handle">
					<div class="slider-arrows">
						<a class="slider-arrow slider-arrow-prev">
							<span class="dashicons dashicons-arrow-left-alt2"></span>
						</a>
						<a class="slider-arrow slider-arrow-next">
							<span class="dashicons dashicons-arrow-right-alt2"></span>
						</a>
					</div>
				<div></div></div>';

	endif;

	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/vanilla.js');

	return ob_get_clean();
}

add_shortcode('vanilla_slide', 'vanilla_slider_shortcode');