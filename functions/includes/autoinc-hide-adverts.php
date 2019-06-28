<?php

function hide_update_noticee_to_all_but_admin_users()
{

	global $current_user;
	get_currentuserinfo();
	$email = (string) $current_user->user_email;
	if($email != 'edward@technicks.com') {
		remove_all_actions( 'admin_notices' );
	}

}
add_action( 'admin_head', 'hide_update_noticee_to_all_but_admin_users', 1 );