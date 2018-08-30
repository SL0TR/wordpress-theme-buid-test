
<?php 
// CONSTANTS
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/img');
define('JS', THEMEROOT . '/js');


// THEME SETUP
if ( !function_exists('sl0tr_theme_setup')) {
  function sl0tr_theme_setup() {
    // make the theme available
    $lang_dir = THEMEROOT . '/languages';
    load_theme_textdomain('sl0tr', $lang_dir);

    // Add support for automatic feed links
    add_theme_support('automatic-feed-links');

    // add supoort for post thumbnails
    add_theme_support('post-thumbnails');

    // Register nav menus
    register_nav_menus( array(
      'main-menu' => __('Main menu', 'sl0tr')
    ) );
  }
  add_action('after_setup_theme', 'sl0tr_theme_setup');
}
?>