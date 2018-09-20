<?php 
/*
#==========================================
#content.php 
#
#The content template
#==========================================
*/
?>

<div id="hero-slider-<?php the_ID(); ?>" <?php post_class('header-slider'); ?> >
  <?php  if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumbnail">
      <?php the_post_thumbnail('full', array('class' => 'header-slider--img')) ?>
    </a>
    <?php
    // Display the tiutle in a link
      echo '<a href="' .get_the_permalink() . '"> <h3>' . get_the_title() . '</h3></a>';

      // get the post meta
      sl0tr_post_meta();

      the_content( __('Continue Reading', 'sl0tr') );
    ?>
  <?php endif; ?>
  

  <!-- <img src="./img/slider-img-1.png" alt="" class="header-slider--img">
  <img src="./img/slider-img-2.png" alt="" class="header-slider--img">
  <img src="./img/slider-img-3.png" alt="" class="header-slider--img"> -->
</div>