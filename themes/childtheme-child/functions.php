<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

// Enqueue child theme styles
function child_wp_enqueue_scripts() {
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'child_wp_enqueue_scripts');
