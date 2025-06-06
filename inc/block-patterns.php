<?php

/**
 * Patterns Setup
 *
 * @package prolooks
 * @since 0.7
 */


/**
 * Remove core patterns.
 * @link https://developer.wordpress.org/themes/patterns/registering-patterns/#removing-core-patterns
 */
add_action('after_setup_theme', 'prolooks_remove_core_patterns');

function prolooks_remove_core_patterns()
{
    remove_theme_support('core-block-patterns');
}

/**
 * Disable remote patterns
 * @link https://developer.wordpress.org/themes/patterns/registering-patterns/#disabling-remote-patterns
 */
add_filter('should_load_remote_block_patterns', '__return_false');


/**
 * Register custom pattern categories
 * @link https://developer.wordpress.org/themes/patterns/registering-patterns/#registering-a-pattern-category
 */

 function prolooks_register_pattern_categories() {
    register_block_pattern_category(
        'Hero',
        array(
            'label'       => __( 'Hero', 'prolooks' ),
            'description' => __( 'Large eye-catching sections for above-the-fold content.', 'prolooks' ),
        )
    );
}
add_action( 'init', 'prolooks_register_pattern_categories' );

