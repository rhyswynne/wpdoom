<?php

/**
 * Enqueuing JS DOS
 *
 * @return void
 */
function wp_doom_enqueue_jsdos() {
    wp_enqueue_style( 'js-dos', WPDOOM_PLUGIN_URL . '/inc/css/js-dos.css' );
    wp_enqueue_script( 'js-dos-js', WPDOOM_PLUGIN_URL . '/inc/js/js-dos.js' );
    wp_enqueue_style( 'doom', WPDOOM_PLUGIN_URL . '/inc/css/doom.css' );
}
add_action('wp_enqueue_scripts','wp_doom_enqueue_jsdos');