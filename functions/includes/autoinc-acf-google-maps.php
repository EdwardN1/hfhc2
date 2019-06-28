<?php
/*// *******************  ACF Google Maps function ****************** //*/


function ritz_acf_google_map_api($api)
{

	$api['key'] = 'AIzaSyBxPrxmkuPdY0biO5r7F7Y3gqrbTxa3nIk';

	return $api;

}

add_filter('acf/fields/google_map/api', 'ritz_acf_google_map_api');