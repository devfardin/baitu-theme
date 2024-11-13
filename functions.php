<?php
define('BAITU_THEME_DIR', __DIR__);
define('BAITU_THEME_URL', get_stylesheet_directory_uri());

function baitu_theme_enqueue_style()
{
	wp_enqueue_style(
		'cf-style',
		BAITU_THEME_URL . '/assets/css/main.css',
		array(),
		filemtime(BAITU_THEME_DIR . '/assets/css/main.css')
	);
}
add_action("wp_enqueue_scripts", "baitu_theme_enqueue_style");

require_once(BAITU_THEME_DIR . '/includes/optimization.php');
require_once(BAITU_THEME_DIR . '/includes/setup.php');