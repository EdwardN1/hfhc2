<?php
add_action('rest_api_init', function () {
    register_rest_route('hfhc/v1', 'header/', array(
        'methods' => 'GET',
        'callback' => 'get_via_api_header'
    ));
});
function get_via_api_header($request)
{

    ob_start();
    get_header();
    $header = ob_get_contents();
    ob_end_clean();

    if (empty($header)) {
        return new WP_Error('empty_header', 'there was no header', array('status' => 404));

    } else {
        header('Content-Type: text/html');
        echo $header;
        exit();
    }

    /*$response = new WP_REST_Response($header);
    $response->set_status(200);

    return $response;*/
}

add_action('rest_api_init', function () {
    register_rest_route('hfhc/v1', 'footer/', array(
        'methods' => 'GET',
        'callback' => 'get_via_api_footer'
    ));
});
function get_via_api_footer($request)
{

    ob_start();
    get_footer();
    $footer = ob_get_contents();
    ob_end_clean();

    if (empty($footer)) {
        return new WP_Error('empty_header', 'there was no footer', array('status' => 404));

    } else {
        header('Content-Type: text/html');
        echo $footer;
        exit();
    }

    /*$response = new WP_REST_Response($header);
    $response->set_status(200);

    return $response;*/
}