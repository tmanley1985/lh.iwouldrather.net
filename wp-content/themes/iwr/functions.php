<?php
	function iwr_theme_styles(){

		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

		wp_enqueue_style( 'iwr', get_template_directory_uri() . '/css/iwr.css');

	}

		add_action( 'wp_enqueue_scripts', 'iwr_theme_styles');

?>