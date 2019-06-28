<?php
/**
 * Created by PhpStorm.
 * User: Edward Nickerson
 * Date: 20/04/2019
 * Time: 11:11
 */
function remove_gravityforms_style() {
    global $post;
    $remove_gravity_forms_default_styling = get_field('remove_gravity_forms_default_styling');
    if($remove_gravity_forms_default_styling) {
        //wp_dequeue_style('gforms_css');
        add_filter('pre_option_rg_gforms_disable_css', '__return_true');
    }
}
//add_action('init', 'remove_gravityforms_style');
//add_filter('pre_option_rg_gforms_disable_css', '__return_true');

add_action( 'gform_enqueue_scripts', 'gform_dequeue_script_list' );
function gform_dequeue_script_list() {
    global $wp_styles;
    global $post;
    $remove_gravity_forms_default_styling = get_field('remove_gravity_forms_default_styling');
    if($remove_gravity_forms_default_styling) {
        if (isset($wp_styles->registered['gforms_datepicker_css'])) {
            unset($wp_styles->registered['gforms_datepicker_css']);
        }
        if (isset($wp_styles->registered['gforms_reset_css'])) {
            unset($wp_styles->registered['gforms_reset_css']);
        }
        if (isset($wp_styles->registered['gforms_formsmain_css'])) {
            unset($wp_styles->registered['gforms_formsmain_css']);
        }
        if (isset($wp_styles->registered['gforms_ready_class_css'])) {
            unset($wp_styles->registered['gforms_ready_class_css']);
        }
        if (isset($wp_styles->registered['gforms_browsers_css'])) {
            unset($wp_styles->registered['gforms_browsers_css']);
        }
        if (isset($wp_styles->registered['gforms_rtl_css'])) {
            unset($wp_styles->registered['gforms_rtl_css']);
        }
    }
}