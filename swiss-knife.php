<?php
/*
	Plugin Name: Swiss Knife
	Plugin URI: http://markokrstic.com/
	Description: Include Scripts.
	Version: 0.2
	Author: Marko Krstic
	Author URI: http://markokrstic.com/
*/

include 'inc/form.php';
include 'inc/scripts.php';
include 'inc/cleenup.php';



/*======================================
=            Upload Support            =
======================================*/

function twy_cleenup_functions_upload_support(){
	
	if(get_option('twy_swiss_knife_svg_upload')){

		function add_svg_types_to_uploads($file_types){
		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );
		return $file_types;
		}
		add_action('upload_mimes', 'add_svg_types_to_uploads');
	
	}

	// if(get_option('twy_swiss_knife_woff_upload')){

	// 	function add_font_types_to_uploads($file_types){
	// 	$new_filetypes = array();
	// 	$new_file_types['eot']  = 'application/vnd.ms-fontobject';
	// 	$new_file_types['woff'] = 'application/font-woff'; 
	// 	$new_file_types['woff'] = 'image/woff+xml';
 //  		$new_file_types['otf']  = 'application/vnd.oasis.opendocument.formula-template';
 //  		$new_file_types['otf'] 	= 'application/font-sfnt';
	// 	$file_types = array_merge($file_types, $new_filetypes );
	// 	return $file_types;
	// 	}
	// 	add_action('upload_mimes', 'add_font_types_to_uploads');	
	// }

}
add_action('init','twy_cleenup_functions_upload_support');



// function add_file_types_to_uploads($file_types){
// $new_filetypes = array();
// $new_filetypes['svg'] = 'image/svg+xml';
// $file_types = array_merge($file_types, $new_filetypes );
// return $file_types;
// }
// add_action('upload_mimes', 'add_file_types_to_uploads');



	// 		$new_woff_upload['woff'] = 'image/woff+xml';

?>