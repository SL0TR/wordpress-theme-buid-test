<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content=" <?php bloginfo('description') ?>">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> </title>
    <link href="https://fonts.googleapis.com/css?family=Jura:700,500|Roboto:300,400,700" rel="stylesheet">
    <?php 
    $favicon = IMAGES . '/icons/favicon.png';
    ?>
    <link rel="shortcut icon" href="<?php echo $favicon; ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <nav class="nav">
    <!-- <ul class="nav-top">
      <li><a href="#"><?php _e('Citygem Partners ', 'sl0tr'); ?> </a></li>
      <li><a href="#"><?php  _e('Citygem Centers', 'sl0tr'); ?>  </a></li>
      <li><a href="./contact-us.html">Contact Us</a></li>
      <a href="#" class="nav--city-gem">
        <img src="./img/city-gem.svg" alt="city-gem.svg">
        <li>citygem</li>
      </a>
    </ul>
    <ul class="nav-bottom">
      <a class="site--branding" href="<?php echo esc_url(home_url( '/' ) ); ?>">
        <img class="nav-bottom--logo" src="img/sapphire-logo.svg" alt="sapphire-logo.svg">
      </a>
      <li><a href="#">Experience Sapphire</a></li>
      <li><a href="#">About Sapphire</a></li>
      <li><a href="/welcome-offer.html">Welcome Offer</a></li>
      <a class="primary-btn" href="#" role="button">Become a Member</a>
    </ul> -->
    <?php 
      wp_nav_menu(array(
        'menu_class' => 'nav',
        'theme_location' => 'main-menu',
        'container' => false
      ))
    ?>
  </nav>
</body>
</html>