<?php
add_action( 'after_setup_theme', 'wp_kama_theme_setup' );
function wp_kama_theme_setup(){
	// Поддержка миниатюр
	add_theme_support( 'post-thumbnails' );
}

add_filter( 'excerpt_length', function(){
	return 38;
} );

add_filter('excerpt_more', function($more) {
	return '.....';
});



function foobar_func( $atts ){
	$atts = shortcode_atts( [
		'title' => 'Here you can see the CTA Text for something you’d like to promote',
		'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,',
	], $atts );

    return "<div class='subscribe'>
            <h3>{$atts['title']}</h3>
            <p>{$atts['text']}</p>
            <div class='button open_subscribe'>
                <a>subscribe</a>
            </div>
        </div>";

}
add_shortcode( 'subscribe', 'foobar_func' );