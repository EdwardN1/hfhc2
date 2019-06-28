<?php
function remove_menus(){
	global $current_user;
	get_currentuserinfo();
	$email = (string) $current_user->user_email;
	if($email != 'edward@technicks.com') {
		remove_submenu_page( 'index.php','update-core.php' );
		remove_menu_page('activity_log_page');
		remove_submenu_page('wpcf7','wpcf7-integration');
		remove_menu_page('themes.php');
		remove_menu_page('plugins.php');
		remove_menu_page('tools.php');
		remove_menu_page('options-general.php');
		remove_menu_page('geot-settings');
		remove_menu_page('recaptcha-options');
		remove_menu_page('Wordfence');
		remove_menu_page('flow-flow');
		add_menu_page( 'Menus', 'Menus', 'manage_options', 'nav-menus.php', '', 'dashicons-welcome-widgets-menus', 90 );
		add_menu_page( 'Redirection', 'Redirection', 'manage_options', 'tools.php?page=redirection.php', '', 'dashicons-redo', 90 );
	}
}

add_action( 'admin_init', 'remove_menus' );

/*
 * Code below groups Dashboard/Posts/Pages/Comments together at the top of the dashboard menu.
 * If you were to have a custom type that you want to add to the group use the following edit.php?post_type=YOURPOSTTYPENAME
 */
function my_menu_order( $menu_order ) {
	return array( 'index.php', 'edit.php', 'edit.php?post_type=page', 'edit-comments.php' ,'upload.php', 'nav-menus.php', 'edit-comments.php');
}

add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'my_menu_order' );