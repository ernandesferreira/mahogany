<?php
//menu opções
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Conf. dos blocos da home',
		'menu_title'	=> 'Config. Home',
		'menu_slug' 	=> 'casaminha-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> get_stylesheet_directory_uri() . '/assets/images/icon/setting.png',
		'redirect'		=> false
	));	
}
add_filter('acf/options_page/settings', 'acf_page_settings');


add_filter('acf/settings/save_json', 'save_jsonAcf');
 
function save_jsonAcf( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/json_acf';
    
    
    // return
    return $path;
    
}



?>