
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

// GET POST META
if ( !function_exists('sl0tr_post_meta') ) {
  function sl0tr_post_meta() {
    if (get_post_type() === 'post') {
      echo '<p class="post-meta">';
      _e('by', 'sl0tr');
      printf('<a href="%1$s" rel="author"> %2$s </a>', esc_url( get_author_posts_url( get_the_author_meta('ID'))), get_the_author() );
      _e('on', 'tuts');
      echo '<span>' . get_the_date(). '</span></p>';
    }
  }
}


// GET POST META
if ( !function_exists('sl0tr_numbered_pagination') ) {
  function sl0tr_numbered_pagination() {
    $args = array(
      'prev_next' => false,
      'type' => 'array'
    );

    echo '<div class="col-md-12"> ';
    $pagination = paginate_links( $args );
    print_r($pagination);
  }
}

// SCRIPTS
// GET POST META
if ( !function_exists('sl0tr_scripts') ) {
  function sl0tr_scripts() {
    // register scripts
    wp_register_script('bootstrap-js', THEMEROOT . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_register_script('main-js', THEMEROOT . '/js/main.js', false, false, true);

    // Load scripts
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('main-js');

    // Load Stylesheets
    wp_enqueue_style('bootstrap-css', THEMEROOT . '/css/bootstrap.min.css');
    wp_enqueue_style('main-css', THEMEROOT . '/css/main.css ');
  }

  add_action('wp_enqueue_scripts', 'sl0tr_scripts');
}
?>