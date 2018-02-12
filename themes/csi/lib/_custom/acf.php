<?php 

//Add Google API Key
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyDRGmRLD_c1Gk3gJmRZrpIh4lF5lNCMcwg');
}

add_action('acf/init', 'my_acf_init');


//Add Google Scripts
function hair_load_google_scripts() {
	
	wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDRGmRLD_c1Gk3gJmRZrpIh4lF5lNCMcwg',null,null,true);  
	wp_enqueue_script('googlemaps');

}

add_action( 'wp_enqueue_scripts', 'hair_load_google_scripts' );


//
// ACF OPTIONS PAGES
// 
if( function_exists('acf_add_options_page') ) {
 
	$option__contact_page = acf_add_options_page(array(
		'page_title' 	=> 'Contacts',
		'menu_title' 	=> 'Contacts',
		'menu_slug' 	=> 'theme-contact',
		'capability' 	=> 'edit_posts',
		'position'		=> 22,
		'redirect' 		=> false,
		'icon_url'		=> 'dashicons-share'
	));
 


}