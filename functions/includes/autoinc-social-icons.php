<?php
add_shortcode('socialicons','sc_socialicons');

function sc_socialicons($atts, $content = null)
{
    /*$a = shortcode_atts(array(
        'width' => '',
        'heading' => '',
        'colour' => '',
        'url' => '',
        'quotes' => ''
    ), $atts);*/
    $code = '<span class="social-shortcode float-center"><a href="'.get_field('facebook', 'option').'" target="_blank" class="social-icon">';
    $code .= '<img src="'.get_template_directory_uri().'/assets/images/facebook_button.svg"></a>';
    $code .= '<a href="'.get_field('linkedin', 'option').'" target="_blank" class="social-icon">';
    $code .= '<img src="'.get_template_directory_uri().'/assets/images/linkedInicon.svg"></a>';
    $code .= '<a href="'.get_field('twitter', 'option').'" target="_blank" class="social-icon">';
    $code .= '<img src="'.get_template_directory_uri().'/assets/images/twittericon.svg"></a></span>';
    return $code;
}