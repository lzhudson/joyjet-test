<?php

function themeStyle() {
  wp_enqueue_style('theme-css', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/dist/js/script.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'themeStyle');
add_theme_support( 'post-thumbnails' );
function my_acf_add_local_field_groups() {
  remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'my_acf_add_local_field_groups');

?>
