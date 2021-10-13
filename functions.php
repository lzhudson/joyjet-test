<?php 

function themeStyle() {
  wp_enqueue_style('theme-css', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/dist/js/script.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'themeStyle');

?>