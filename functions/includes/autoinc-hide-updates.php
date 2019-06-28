<?php

function remove_core_updates () {
	global $wp_version;
	return(object) array(
		'last_checked'=> time(),
		'version_checked'=> $wp_version,
		'updates' => array()
	);
}

function check_for_updates() {
	global $current_user;
	get_currentuserinfo();
	$email = (string) $current_user->user_email;
	if($email != 'edward@technicks.com') {
		add_filter('pre_site_transient_update_core','remove_core_updates');
		add_filter('pre_site_transient_update_plugins','remove_core_updates');
		add_filter('pre_site_transient_update_themes','remove_core_updates');

	}
}

add_action('init','check_for_updates');
