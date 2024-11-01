<?php
/*
Plugin Name: WPLoremPix
Description: WPLoremPix is a WordPress plugin that pulls in random placeholder images based on http://lorempixel.com Can be used in any page, post or text widget.
Version: 1.0
Author: Lee Rickler
Author URI: http://rickler.com
*/

function wplorempix_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'width' => '800',
        'height' => '800',
        'hue' => isset($atts['hue']),
        'genre' => 'abstract',
        'dummytext' => '',
        'picno' => isset($atts['picno']),
    ), $atts ) );
            if($hue){
        $hue = 'g/';
    } else {
        $hue = '';
    }
    if($picno){
        $picno = ''.esc_attr($picno).'/';
    } else {
        $picno = '';
    }
    $pands = '<div class="wplorempix">';
    $pands .= '<img src="http://lorempixel.com/';
    $pands .= esc_attr($hue) . '' . esc_attr($width) . '/' . esc_attr($height) . '/' . esc_attr($genre) . '/' .esc_attr($picno) . '' . esc_attr($dummytext) . '" />';
    $pands .= '</div>';
    return $pands;
}
add_shortcode('wplorempix', 'wplorempix_shortcode');

if ( !is_admin() ): 
    add_filter('widget_text', 'do_shortcode', 11);
endif;
?>