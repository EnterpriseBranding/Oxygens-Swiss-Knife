<?php 

/*================================
=            Clean up            =
================================*/

function twy_cleenup_functions_frontend(){
	if(get_option('twy_swiss_knife_cleenup_emoji')){
		remove_action(  'wp_head', 'print_emoji_detection_script', 7);	// Removes WP Emoji
		remove_action(  'wp_print_styles', 'print_emoji_styles');
		remove_action(  'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action(  'admin_print_styles', 'print_emoji_styles' );
	}
	if(get_option('twy_swiss_knife_cleenup_feed_links')){
		remove_action( 	'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
		remove_action( 	'wp_head', 'start_post_rel_link', 10, 0 ); // start link
		remove_action( 	'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
		remove_action(	'wp_head', 'wlwmanifest_link');	// Windows Live Writer Manifest Link
		remove_action(	'wp_head', 'wp_shortlink_wp_head');	// WordPress Page/Post Shortlinks
		remove_action(	'wp_head', 'rsd_link');	// Remove Weblog Client Link
		remove_action( 	'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
		remove_action( 	'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
		remove_action( 	'wp_head', 'index_rel_link' ); // index link
		remove_action(	'wp_head', 'rel_canonical');
	}
	if(get_option('twy_swiss_knife_cleenup_wp_generator')){
		remove_action(  'wp_head', 'wp_generator');	// Removes WP version number from header
	}
	if(get_option('twy_swiss_knife_cleenup_rest_api')){
		remove_action(	'wp_head', 'rest_output_link_wp_head', 10);	// Disable REST API link tag
		remove_action(	'template_redirect', 'rest_output_link_header', 11, 0);	// Disable REST API link in HTTP headers		
	}
	if(get_option('twy_swiss_knife_cleenup_oembed_links')){
		remove_action(	'wp_head', 'wp_oembed_add_discovery_links', 10);	// Disable oEmbed Discovery Links
	}
	if(get_option('twy_swiss_knife_cleenup_dns_prefetch')){
		add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
		// DNS Prefetch
		function remove_dns_prefetch( $hints, $relation_type ) {
			if ( 'dns-prefetch' === $relation_type ) {
				return array_diff( wp_dependencies_unique_hosts(), $hints );
			}
			return $hints;
		}
	}
	
}
add_action('init','twy_cleenup_functions_frontend');