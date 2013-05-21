<?php
function my_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.5.1.min.js', false, '1.5.1');
		wp_enqueue_script('jquery');

		wp_enqueue_script('superfish', get_bloginfo('template_url').'/js/superfish.js', array('jquery'), '1.4.8');
		wp_enqueue_script('loader', get_bloginfo('template_url').'/js/jquery.loader.js', array('jquery'), '1.0');
		wp_enqueue_script('cufon_yui', get_bloginfo('template_url').'/js/cufon-yui.js', array('jquery'), '1.09i');
		//wp_enqueue_script('PragmaticaCTT', get_bloginfo('template_url').'/js/PragmaticaCTT_400.font.js', array('jquery'), '1.0');
		//wp_enqueue_script('PragmaticaLightC', get_bloginfo('template_url').'/js/PragmaticaLightC_200.font.js', array('jquery'), '1.0');
		///wp_enqueue_script('Calibri_700.font', get_bloginfo('template_url').'/js/Calibri_700.font.js', array('jquery'), '1.0');
		//wp_enqueue_script('Calibri_400-Calibri_700.font', get_bloginfo('template_url').'/js/Calibri_400-Calibri_700.font.js', array('jquery'), '1.0');
		//wp_enqueue_script('cufon_replace', get_bloginfo('template_url').'/js/cufon-replace.js', array('jquery'), '1.0');
	}
}
add_action('init', 'my_script');
?>