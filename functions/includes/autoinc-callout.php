<?php
add_shortcode('callout', 'sc_callout');

function sc_callout($atts, $content = null)
{
    $a = shortcode_atts(array(
        'width' => '',
        'heading' => '',
        'colour' => '',
        'url' => '',
        'quotes' => ''
    ), $atts);

    $width = '';
    $heading = '';
    $colour = '';
    $url = '';
    $quotes = '';

    $return = '';

    if (array_key_exists('width', $a)) {
        if ($a['width'] != '') {
            $width = $a['width'];
        };
    };

    if (array_key_exists('heading', $a)) {
        if ($a['heading'] != '') {
            $heading = $a['heading'];
        };
    };

    if (array_key_exists('colour', $a)) {
        if ($a['colour'] != '') {
            $colour = $a['colour'];
        }
    };

    if (array_key_exists('url', $a)) {
        if ($a['url'] != '') {
            $url = $a['url'];
        };
    };

    if (array_key_exists('quotes', $a)) {
        if ($a['quotes'] != '') {
            $quotes = $a['quotes'];
        };
    };

    $calloutID = uniqid('tshfc');

    if($width=='') {
        $width = '100%';
    } else {
        $width .= 'px';
    }

    if($quotes != '') {
        $quotes = ' quoted';
    }

    if (($url != '')) {
        if (strtolower($colour) == 'blue') {
            $return .= '<div class="blue-background callout linked" style="width: '.$width.';">';
            $return .= '<a class="white block text-center" href="'.$url.'">';
        } else {
            $return .= '<div class="light-green-background callout linked" style="width: '.$width.';">';
            $return .= '<a class="block text-center body-colour" href="'.$url.'">';
        }
        $return .= '<h3 class="semi-bold font-size-34'.$quotes.'">'.$heading.'</h3>';
        $return .= '<p>'.$content.'</p>';
        $return .= '</a></div>';

    } else {
        if (strtolower($colour) == 'blue') {
            $return .= '<div class="blue-background callout" style="width: '.$width.';">';
        } else {
            $return .= '<div class="light-green-background callout" style="width: '.$width.';">';
        }
        $return .= '<h3 class="semi-bold font-size-34'.$quotes.'>'.$heading.'</h3>';
        $return .= '<p>'.$content.'</p>';
        $return .= '</div>';
    }


    return $return;
}