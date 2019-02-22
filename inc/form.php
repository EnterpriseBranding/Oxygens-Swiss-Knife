<?php 

add_action('admin_menu','twy_add_swiss_knife_admin_page');
function twy_add_swiss_knife_admin_settings(){
	echo '<style>
		.twy_settings_label{
			font-size:15px;
		}

		.twy_settings_url_field{
			margin:10px 0px;
			width:450px;
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
		td {
 		   vertical-align: top;
		}
	</style>';
	echo '<div class="wrap">';

	?>
	
	<h3>If this plugin saves you time and help you earn some money do a decent thing and buy me a coffee :)</h3>
	<a target="blank" href="https://www.paypal.me/markodesigner"><img src="https://github.com/krstivoja/Oxygens-Swiss-Knife/blob/master/koffee.png?raw=true" alt=""></a>
	<br><br>
	<hr>
	<br>

	<?php 
    if (!empty($_POST['twy_swiss_knife_save_settings']) && check_admin_referer('twy_swiss_knife_save_settings_nonce','twy_swiss_knife_save_settings_value')){
		

		$twy_swiss_knife_cleenup_emoji = $twy_swiss_knife_cleenup_feed_links = $twy_swiss_knife_cleenup_wp_generator = $twy_swiss_knife_cleenup_rest_api = $twy_swiss_knife_cleenup_oembed_links = $twy_swiss_knife_cleenup_dns_prefetch = "";

		
		$twy_swiss_knife_svg_upload = $twy_swiss_knife_woff_upload = "";

		
		$twy_swiss_knife_include_jquery = $twy_swiss_knife_include_gsap = $twy_swiss_knife_include_scrollmagic = $twy_swiss_knife_include_ps = $twy_swiss_knife_include_ss = $twy_swiss_knife_include_tree_js = "";

		

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


		update_option('twy_swiss_knife_cleenup_emoji', $twy_swiss_knife_cleenup_emoji);
		update_option('twy_swiss_knife_cleenup_feed_links', $twy_swiss_knife_cleenup_feed_links);
		update_option('twy_swiss_knife_cleenup_wp_generator', $twy_swiss_knife_cleenup_wp_generator);
		update_option('twy_swiss_knife_cleenup_rest_api', $twy_swiss_knife_cleenup_rest_api);
		update_option('twy_swiss_knife_cleenup_oembed_links', $twy_swiss_knife_cleenup_oembed_links);
		update_option('twy_swiss_knife_cleenup_dns_prefetch', $twy_swiss_knife_cleenup_dns_prefetch);


		if(isset($_POST['twy_swiss_knife_svg_upload'])){
			$twy_swiss_knife_svg_upload = sanitize_text_field($_POST['twy_swiss_knife_svg_upload']);
		}
		if(isset($_POST['twy_swiss_knife_woff_upload'])){
			$twy_swiss_knife_woff_upload = sanitize_text_field($_POST['twy_swiss_knife_woff_upload']);
		}

		update_option('twy_swiss_knife_svg_upload', $twy_swiss_knife_svg_upload);
		update_option('twy_swiss_knife_woff_upload', $twy_swiss_knife_woff_upload);




		
		if(isset($_POST['twy_swiss_knife_include_jquery'])){
			$twy_swiss_knife_include_jquery = sanitize_text_field($_POST['twy_swiss_knife_include_jquery']);
		}
		if(isset($_POST['twy_swiss_knife_include_gsap'])){
			$twy_swiss_knife_include_gsap = sanitize_text_field($_POST['twy_swiss_knife_include_gsap']);
		}

		if(isset($_POST['twy_swiss_knife_include_scrollmagic'])){
			$twy_swiss_knife_include_scrollmagic = sanitize_text_field($_POST['twy_swiss_knife_include_scrollmagic']);
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
		
		
		update_option('twy_swiss_knife_include_jquery', $twy_swiss_knife_include_jquery);
		update_option('twy_swiss_knife_include_gsap', $twy_swiss_knife_include_gsap);
		update_option('twy_swiss_knife_include_scrollmagic', $twy_swiss_knife_include_scrollmagic);
		update_option('twy_swiss_knife_include_ps', $twy_swiss_knife_include_ps);
		update_option('twy_swiss_knife_include_ss', $twy_swiss_knife_include_ss);
		update_option('twy_swiss_knife_include_tree_js', $twy_swiss_knife_include_tree_js);
		
        update_option('twy_swiss_knife_include_jquery_cdn',sanitize_text_field($_POST['twy_swiss_knife_include_jquery_cdn']));
        update_option('twy_swiss_knife_include_gsap_cdn',sanitize_text_field($_POST['twy_swiss_knife_include_gsap_cdn']));
        update_option('twy_swiss_knife_include_scrollmagic_cdn',sanitize_text_field($_POST['twy_swiss_knife_include_scrollmagic_cdn']));
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
				<td width="1.5%">
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
		</table><BR><BR>

		<h1>Enable Upload File Support</h1><BR>
		<table width="99%" class="twy_otp_checkout_header">
			<tr>
				<td width="1.5%">
					<input type="checkbox" name="twy_swiss_knife_svg_upload" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_svg_upload" <?php if(get_option('twy_swiss_knife_svg_upload')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">SVG</label>
				</td>
			</tr>
<!-- 			<tr>
				<td >
					<input type="checkbox" name="twy_swiss_knife_woff_upload" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_woff_upload" <?php if(get_option('twy_swiss_knife_woff_upload')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">WOFF</label>
				</td>
			</tr> -->
		</table><BR><BR>



	<h1>Include Scripts</h1><BR>
		<table width="99%" class="twy_otp_checkout_header">
			<tr>
				<td width="1.5%">
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
					<label class="twy_settings_label">Enable Green Sock or replace with CDN. <a target="blank" href="https://greensock.com/docs/TweenMax">View library ↗</a></label><BR>
					<input type="text" name="twy_swiss_knife_include_gsap_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_gsap_cdn" value="<?php echo get_option('twy_swiss_knife_include_gsap_cdn'); ?>">
				</td>
			</tr>

			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_include_scrollmagic" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_scrollmagic" <?php if(get_option('twy_swiss_knife_include_scrollmagic')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Enable Scroll Magic or replace with CDN. <a target="blank" href="https://github.com/janpaepke/ScrollMagic">View library ↗</a></label><BR>
					<input type="text" name="twy_swiss_knife_include_scrollmagic_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_scrollmagic_cdn" value="<?php echo get_option('twy_swiss_knife_include_scrollmagic_cdn'); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_include_ps" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_ps" <?php if(get_option('twy_swiss_knife_include_ps')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Enable Parallax Scrolling or replace with CDN. <a target="blank" href="https://github.com/dixonandmoe/rellax">View library ↗</a></label><BR>
					<input type="text" name="twy_swiss_knife_include_ps_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_ps_cdn" value="<?php echo get_option('twy_swiss_knife_include_ps_cdn'); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_include_ss" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_ss" <?php if(get_option('twy_swiss_knife_include_ss')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Enable Smooth Scrolling or replace with CDN. <a target="blank" href="https://github.com/htmldiz/smoothwheel">View library ↗</a></label><BR>
					<input type="text" name="twy_swiss_knife_include_ss_cdn" class="twy_settings_url_field" id="twy_swiss_knife_include_ss_cdn" value="<?php echo get_option('twy_swiss_knife_include_ss_cdn'); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="twy_swiss_knife_include_tree_js" class="twy_settings_checkbox_field" value="1" id="twy_swiss_knife_include_tree_js" <?php if(get_option('twy_swiss_knife_include_tree_js')){echo 'checked';} ?>>
				</td>
				<td>
					<label class="twy_settings_label">Enable TreeJS or replace with CDN. <a target="blank" href="https://github.com/jiyinyiyong/three.js">View library ↗</a></label><BR>
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