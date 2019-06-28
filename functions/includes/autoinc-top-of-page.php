<?php
add_shortcode('top','sc_top');

function sc_top($atts, $content = null)
{
    $a = shortcode_atts(array(
        'align' => '',
    ), $atts);

    $align = '';

    if (array_key_exists('align', $a)) {
        if ($a['align'] != '') {
            $align = $a['align'];
        };
    };

    if($align=='left') {
        $align = 'text-left';
    } else {
        if($align=='right') {
            $align = 'text-right';
        } else {
            $align = 'text-center';
        }
    }

    if($content==null) {
        $content ='Return to top of page';
    }
    $code = '<div data-magellan class="'.$align.'" style="padding-top: 1em; padding-bottom: 1em;"><a href="#top-of-page" class="round-button direction-blue-up">'.$content.'</a></div>';
    return $code;
}