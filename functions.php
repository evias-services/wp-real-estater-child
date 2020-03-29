<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style('select2', get_template_directory_uri() . '/select2.min.css');
    wp_enqueue_script( 'select2-js', get_template_directory_uri() . '/select2.min.js' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/* WPCF Dashboard Widget */
function custom_dashboard_widget() {
	echo "<p>Dearest Client, Here&rsquo;s how to do that thing I told you about yesterday...</p>";
}
function add_custom_dashboard_widget() {
	wp_add_dashboard_widget('custom_dashboard_widget', 'How to Do Something in WordPress', 'custom_dashboard_widget');
}
add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');

?>