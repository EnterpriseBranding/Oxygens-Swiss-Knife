<?php
/*
	Plugin Name: Swiss Knife
	Plugin URI: http://markokrstic.com/
	Description: Include Scripts.
	Version: 0.1
	Author: Marko Krstic
	Author URI: http://markokrstic.com/
*/
add_action('admin_menu','twy_add_swiss_knife_admin_page');
function twy_add_swiss_knife_admin_settings(){
	echo '<style>
		.twy_settings_label{
			font-size:15px;
		}
		.twy_settings_checkbox_field{
			border:1px rgba(30,140,190,0.8) solid !important;
		}
		.twy_settings_url_field{
			margin:10px 0px;
			width:450px;
			border:2px rgba(30,140,190,0.8) solid !important;
			padding:7px;
			border-radius:2px;
		}
		.twy_save_button{
			color:#fff;
			background-color:#173248;
			cursor:pointer;
			border:1px #173248 solid;
			padding:10px 20px;
			border-radius:2px;
		}
	</style>';
	echo '<div class="wrap">';
    if (!empty($_POST['twy_swiss_knife_save_settings']) && check_admin_referer('twy_swiss_knife_save_settings_nonce','twy_swiss_knife_save_settings_value')){
		$twy_swiss_knife_cleenup_emoji = $twy_swiss_knife_cleenup_feed_links = $twy_swiss_knife_cleenup_wp_generator = $twy_swiss_knife_cleenup_rest_api = $twy_swiss_knife_cleenup_oembed_links = $twy_swiss_knife_cleenup_dns_prefetch = "";
		$twy_swiss_knife_include_jquery = $twy_swiss_knife_include_gsap = $twy_swiss_knife_include_ps = $twy_swiss_knife_include_ss = $twy_swiss_knife_include_tree_js = "";

		if(isset($_POST['twy_swiss_knife_cleenup_emoji'])){
			$twy_swiss_knife_cleenup_emoji = sanitize_text_field($_POST['twy_swiss_knife_cleenup_emoji']);
		}
		if(isset($_POST['twy_swiss_knife_cleenup_feed_links'])){
			$twy_swiss_knife_cleenup_feed_links = sanitize_text_field($_POST['twy_swiss_knife_cleenup_feed_links']);
		}
		if(isset($_POST['twy_swiss_knife_cleenup_wp_generator'])){
			$twy_swiss_knife_cleenup_wp_generator = sanitize_text_field($_POST['twy_swiss_knife_cleenup_wp_generator']);
		}
		if(isset($_POST['twy_swiss_knife_cleenup_rest_api'])){
			$twy_swiss_knife_cleenup_rest_api = sanitize_text_field($_POST['twy_swiss_knife_cleenup_rest_api']);
		}
		if(isset($_POST['twy_swiss_knife_cleenup_oembed_links'])){
			$twy_swiss_knife_cleenup_oembed_links = sanitize_text_field($_POST['twy_swiss_knife_cleenup_oembed_links']);
		}
		if(isset($_POST['twy_swiss_knife_cleenup_dns_prefetch'])){
			$twy_swiss_knife_cleenup_dns_prefetch = sanitize_text_field($_POST['twy_swiss_knife_cleenup_dns_prefetch']);
		}
		
		if(isset($_POST['twy_swiss_knife_include_jquery'])){
			$twy_swiss_knife_include_jquery = sanitize_text_field($_POST['twy_swiss_knife_include_jquery']);
		}
		if(isset($_POST['twy_swiss_knife_include_gsap'])){
			$twy_swiss_knife_include_gsap = sanitize_text_field($_POST['twy_swiss_knife_include_gsap']);
		}
		if(isset($_POST['twy_swiss_knife_include_ps'])){
			$twy_swiss_knife_include_ps = sanitize_text_field($_POST['twy_swiss_knife_include_ps']);
		}
		if(isset($_POST['twy_swiss_knife_include_ss'])){
			$twy_swiss_knife_include_ss = sanitize_text_field($_POST['twy_swiss_knife_include_ss']);
		}
		if(isset($_POST['twy_swiss_knife_include_tree_js'])){
			$twy_swiss_knife_include_tree_js = sanitize_text_field($_POST['twy_swiss_knife_include_tree_js']);
		}
		
		update_option('twy_swiss_knife_cleenup_emoji', $twy_swiss_knife_cleenup_emoji);
		update_option('twy_swiss_knife_cleenup_feed_links', $twy_swiss_knife_cleenup_feed_links);
		update_option('twy_swiss_knife_cleenup_wp_generator', $twy_swiss_knife_cleenup_wp_generator);
		update_option('twy_swiss_knife_cleenup_rest_api', $twy_swiss_knife_cleenup_rest_api);
		update_option('twy_swiss_knife_cleenup_oembed_links', $twy_swiss_knife_cleenup_oembed_links);
		update_option('twy_swiss_knife_cleenup_dns_prefetch', $twy_swiss_knife_cleenup_dns_prefetch);
		
		update_option('twy_swiss_knife_include_jquery', $twy_swiss_knife_include_jquery);
		update_option('twy_swiss_knife_include_gsap', $twy_swiss_knife_include_gsap);
		update_option('twy_swiss_knife_include_ps', $twy_swiss_knife_include_ps);
		update_option('twy_swiss_knife_include_ss', $twy_swiss_knife_include_ss);
		update_option('twy_swiss_knife_include_tree_js', $twy_swiss_knife_include_tree_js);
		
        update_option('twy_swiss_knife_include_jquery_cdn',sanitize_text_field($_POST['twy_swiss_knife_include_jquery_cdn']));
        update_option('twy_swiss_knife_include_gsap_cdn',sanitize_text_field($_POST['twy_swiss_knife_include_gsap_cdn']));
        update_option('twy_swiss_knife_include_ps_cdn',sanitize_text_field($_POST['twy_swiss_knife_include_ps_cdn']));
        update_option('twy_swiss_knife_include_ss_cdn',sanitize_text_field($_POST['twy_swiss_knife_include_ss_cdn']));
        update_option('twy_swiss_knife_include_tree_js_cdn',sanitize_text_field($_POST['twy_swiss_knife_include_tree_js_cdn']));
	    echo '<div class="notice notice-success is-dismissible"><p>Settings Saved!</p></div>';
	}
	?>
	<form action="<?php echo str_replace('%7E', '~', $_SERVER['REQUEST_URI']); ?>" method="post">
	<?php wp_nonce_field('twy_swiss_knife_save_settings_nonce','twy_swiss_knife_save_settings_value'); ?>
	<h1>Wordpress Cleenup</h1><BR>
		<table width="99%" class="twy_otp_checkout_header">
			<tr>
				<td width="3%">
					<input type="checkbox" name="twy_swiss_knife_cleenup_emoji" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_cleenup_emoji" <?php if(get_option('twy_swiss_knife_cleenup_emoji')){echo 'checked';} ?>>
				</td>
				<td width="97%">
					<label class="twy_settings_label">Emoji</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_cleenup_feed_links" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_cleenup_feed_links" <?php if(get_option('twy_swiss_knife_cleenup_feed_links')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Feed Links</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_cleenup_wp_generator" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_cleenup_wp_generator" <?php if(get_option('twy_swiss_knife_cleenup_wp_generator')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">WP Generator</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_cleenup_rest_api" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_cleenup_rest_api" <?php if(get_option('twy_swiss_knife_cleenup_rest_api')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">REST API</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_cleenup_oembed_links" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_cleenup_oembed_links" <?php if(get_option('twy_swiss_knife_cleenup_oembed_links')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">oEmbed Discovery Links</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_cleenup_dns_prefetch" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_cleenup_dns_prefetch" <?php if(get_option('twy_swiss_knife_cleenup_dns_prefetch')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">DNS Prefetch</label>
				</td>
			</tr>
		</table><BR>
	<h1>Include Scripts</h1><BR>
		<table width="99%" class="twy_otp_checkout_header">
			<tr>
				<td width="3%">
					<input type="checkbox" name="twy_swiss_knife_include_jquery" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_jquery" <?php if(get_option('twy_swiss_knife_include_jquery')){echo 'checked';} ?>>
				</td>
				<td width="97%">
					<label class="twy_settings_label">Enable JQuery 1.11.1 or replace with CDN</label><BR>
					<input type="text" name="twy_swiss_knife_include_jquery_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_jquery_cdn" value="<?php echo get_option('twy_swiss_knife_include_jquery_cdn'); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_include_gsap" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_gsap" <?php if(get_option('twy_swiss_knife_include_gsap')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Enable Green Sock or replace with CDN</label><BR>
					<input type="text" name="twy_swiss_knife_include_gsap_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_gsap_cdn" value="<?php echo get_option('twy_swiss_knife_include_gsap_cdn'); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_include_ps" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_ps" <?php if(get_option('twy_swiss_knife_include_ps')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Enable Parallel Scrolling or replace with CDN</label><BR>
					<input type="text" name="twy_swiss_knife_include_ps_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_ps_cdn" value="<?php echo get_option('twy_swiss_knife_include_ps_cdn'); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_include_ss" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_ss" <?php if(get_option('twy_swiss_knife_include_ss')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Enable Smooth Scrolling or replace with CDN</label><BR>
					<input type="text" name="twy_swiss_knife_include_ss_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_ss_cdn" value="<?php echo get_option('twy_swiss_knife_include_ss_cdn'); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_include_tree_js" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_tree_js" <?php if(get_option('twy_swiss_knife_include_tree_js')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Enable TreeJS or replace with CDN</label><BR>
					<input type="text" name="twy_swiss_knife_include_tree_js_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_tree_js_cdn" value="<?php echo get_option('twy_swiss_knife_include_tree_js_cdn'); ?>">
				</td>
			</tr>
		</table><BR>
		<button type="submit" class="twy_save_button">Save Settings</button>
		<input type="hidden" name="twy_swiss_knife_save_settings" value="yes">
		</form>
		<?php
}
function twy_add_swiss_knife_admin_page(){
	add_options_page("Swiss Knife", "Swiss Knife", "administrator", "swiss-knife", "twy_add_swiss_knife_admin_settings");
}

function twy_include_scripts_frontend(){
	if(get_option('twy_swiss_knife_include_jquery')){
		if(get_option('twy_swiss_knife_include_jquery_cdn')){
			$script_url = get_option('twy_swiss_knife_include_jquery_cdn');
			wp_enqueue_script('twy_jquery', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_jquery', plugin_dir_url(__FILE__).'public/bower_components/jquery/dist/jquery.min.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_gsap')){
		if(get_option('twy_swiss_knife_include_gsap_cdn')){
			$script_url = get_option('twy_swiss_knife_include_gsap_cdn');
			wp_enqueue_script('twy_gsap', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_gsap', plugin_dir_url(__FILE__).'public/bower_components/gsap/src/minified/TweenMax.min.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_ps')){
		if(get_option('twy_swiss_knife_include_ps_cdn')){
			$script_url = get_option('twy_swiss_knife_include_ps_cdn');
			wp_enqueue_script('twy_ps', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_ps', plugin_dir_url(__FILE__).'public/bower_components/relax.js/dist/Relax.min.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_ss')){
		if(get_option('twy_swiss_knife_include_ss_cdn')){
			$script_url = get_option('twy_swiss_knife_include_ss_cdn');
			wp_enqueue_script('twy_ss', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_ss', plugin_dir_url(__FILE__).'public/bower_components/jquery-smoothwheel/src/jquery.smoothwheel.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_tree_js')){
		if(get_option('twy_swiss_knife_include_tree_js_cdn')){
			$script_url = get_option('twy_swiss_knife_include_tree_js_cdn');
			wp_enqueue_script('twy_tree_js', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_tree_js', plugin_dir_url(__FILE__).'public/bower_components/three.js/three.min.js', array(), null);
		}
	}
}
add_action('wp_footer','twy_include_scripts_frontend');

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
?>