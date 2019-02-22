<?php 

/*=======================================
=            Include Scripts            =
=======================================*/

function twy_include_scripts_frontend(){
	if(get_option('twy_swiss_knife_include_jquery')){
		if(get_option('twy_swiss_knife_include_jquery_cdn')){
			$script_url = get_option('twy_swiss_knife_include_jquery_cdn');
			wp_enqueue_script('twy_jquery', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_jquery', plugin_dir_url(__FILE__).'../public/bower_components/jquery/dist/jquery.min.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_gsap')){
		if(get_option('twy_swiss_knife_include_gsap_cdn')){
			$script_url = get_option('twy_swiss_knife_include_gsap_cdn');
			wp_enqueue_script('twy_gsap', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_gsap', plugin_dir_url(__FILE__).'../public/bower_components/gsap/src/minified/TweenMax.min.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_scrollmagic')){
		if(get_option('twy_swiss_knife_include_scrollmagic_cdn')){
			$script_url = get_option('twy_swiss_knife_include_scrollmagic_cdn');
			wp_enqueue_script('twy_scrollmagic', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_scrollmagic', plugin_dir_url(__FILE__).'../public/bower_components/scrollmagic/scrollmagic/minified/ScrollMagic.min.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_ps')){
		if(get_option('twy_swiss_knife_include_ps_cdn')){
			$script_url = get_option('twy_swiss_knife_include_ps_cdn');
			wp_enqueue_script('twy_ps', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_ps', plugin_dir_url(__FILE__).'../public/bower_components/relax.js/dist/Relax.min.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_ss')){
		if(get_option('twy_swiss_knife_include_ss_cdn')){
			$script_url = get_option('twy_swiss_knife_include_ss_cdn');
			wp_enqueue_script('twy_ss', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_ss', plugin_dir_url(__FILE__).'../public/bower_components/jquery-smoothwheel/src/jquery.smoothwheel.js', array(), null);
		}
	}
	if(get_option('twy_swiss_knife_include_tree_js')){
		if(get_option('twy_swiss_knife_include_tree_js_cdn')){
			$script_url = get_option('twy_swiss_knife_include_tree_js_cdn');
			wp_enqueue_script('twy_tree_js', $script_url, array(), null);
		}
		else{
			wp_enqueue_script('twy_tree_js', plugin_dir_url(__FILE__).'../public/bower_components/three.js/three.min.js', array(), null);
		}
	}
}
add_action('wp_footer','twy_include_scripts_frontend');