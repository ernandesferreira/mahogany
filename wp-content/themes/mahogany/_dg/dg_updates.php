<?php

if(! current_user_can('administrator')){
	//remove update from menu
	function wpse_38111() {
		remove_submenu_page( 'index.php', 'update-core.php' );
		remove_submenu_page( 'index.php', 'wpsc-upgrades' );
	}
	add_action( 'admin_init', 'wpse_38111' );
	
	
	function hide_wp_update_nag() {
		remove_action( 'admin_notices', 'update_nag', 3 );
	}
	
	add_action('admin_menu','hide_wp_update_nag');
	
	
	//disable plugin update indicator
	function hide_plugin_update_indicator(){
		global $menu,$submenu;
		$menu[65][0] = 'Plugins';
		$submenu['index.php'][10][0] = 'Updates';
	}
	add_action('admin_menu', 'hide_plugin_update_indicator');
}
?>