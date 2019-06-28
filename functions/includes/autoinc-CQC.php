<?php
add_shortcode('cqc','sc_CQC');

function sc_CQC($atts, $content = null)
{
    /*$a = shortcode_atts(array(
        'width' => '',
        'heading' => '',
        'colour' => '',
        'url' => '',
        'quotes' => ''
    ), $atts);*/
    $code = get_field('cqc_code',option);
    return $code;
}