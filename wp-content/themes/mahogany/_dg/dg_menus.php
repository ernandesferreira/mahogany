<?php

if(! current_user_can('administrator')){

	add_action( 'admin_menu', 'adjust_the_wp_menu', 999 );

	//Disable menus
	function adjust_the_wp_menu() {
		$page = remove_submenu_page( 'themes.php', 'widgets.php' );
		$page = remove_submenu_page( 'themes.php', 'nav-menus.php' );
		$page = remove_submenu_page( 'themes.php', 'theme-editor.php' );
		$page = remove_submenu_page( 'themes.php', 'themes.php' );

		remove_menu_page('upload.php');
		remove_menu_page('themes.php');
		remove_submenu_page( 'index.php', 'update-core.php' );
		remove_menu_page('edit.php?post_type=page');
		remove_menu_page('edit.php?post_type=pagpslide');
		remove_menu_page('edit.php?post_type=pagpdestaque');
		remove_menu_page('edit.php?post_type=link');
		remove_menu_page('edit.php?post_type=texto');

		remove_menu_page('edit.php');
		remove_menu_page('link-manager.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('plugins.php');
		remove_menu_page('tools.php');
		remove_menu_page('options-general.php');
		remove_menu_page('users.php');

		remove_menu_page('wpcf7');
	}

	//Remove menu items from WordPress admin bar
	function wps_admin_bar() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('about');
		$wp_admin_bar->remove_menu('wporg');
		$wp_admin_bar->remove_menu('documentation');
		$wp_admin_bar->remove_menu('support-forums');
		$wp_admin_bar->remove_menu('feedback');
		$wp_admin_bar->remove_menu('view-site');

		$wp_admin_bar->remove_menu('updates');

		$wp_admin_bar->remove_menu('comments');

		$wp_admin_bar->remove_menu('new-content');

	}
	add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );


	// Remove Help button
	add_filter( 'contextual_help', 'wpse50723_remove_help', 999, 3 );
	function wpse50723_remove_help($old_help, $screen_id, $screen){
		$screen->remove_help_tabs();
		return $old_help;
	}

	//Removo menu do woocommerce a força no CSS
	function custom_colors() {
	   echo "<style type='text/css'>
			   #toplevel_page_wpglobus_options{display:none!important;}
			 </style>";
	}

	add_action('admin_head', 'custom_colors');
}
?>
