<?php

function fylo_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:700|Raleway&display=swap');
  wp_enqueue_style('fylo_main_styles', get_stylesheet_uri());
}
 
add_action('wp_enqueue_scripts', 'fylo_files');
?>