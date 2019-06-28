<?php
// ******************* ACF Options Page ****************** //

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	));

	if ($current_user->user_email == 'edward@technicks.com') {
		acf_add_options_page(array(
			'page_title' => 'Master Page Settings',
			'menu_title' => 'Master Page Settings',
			'menu_slug' => 'master-page-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		));
	}


}
