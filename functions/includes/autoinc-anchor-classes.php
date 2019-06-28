<?php
/*add_filter( 'tiny_mce_before_init', 'custom_mce_before_init' );
function custom_mce_before_init( $settings ) {
    $style_formats = array(
        array(
            'title' => 'Some Style',
            'selector' => 'a',
            'classes' => 'my-anchor-class',
        )
    );
    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
}*/

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
// Define the style_formats array
    $style_formats = array(
// Each array child is a format with it's own settings
        array(
            'title' => 'Make Link a Button',
            'selector' => 'a',
            'classes' => 'round-button'
        )
    );
// Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );