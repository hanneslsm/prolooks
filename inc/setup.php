<?php

/**
 * Setup
 *
 * @package prolooks
 * @since 0.1.0
 * @link https://developer.wordpress.org/themes/block-themes/block-theme-setup/
 */



if (!function_exists('prolooks_setup')) :
	function prolooks_setup()
	{
		// Make theme available for translation.
		load_theme_textdomain('prolooks', get_template_directory() . '/languages');

		// Enqueue editor styles.
		add_editor_style('assets/css/editor-style.css');
	}
endif; // prolooks_setup
add_action('after_setup_theme', 'prolooks_setup');
