<?php 
/*
#==========================================
#index.php 
#
#The main Template file
#==========================================
*/
?>

<?php 
// load header
get_header();
?>

<div class="container-fluid text-center">
  <div class="jumbotron">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h1>
          <?php _e('Welcome Privileges with Choices') ?>
        </h1>
      </div>
      <div class="col-xl-4 offset-1 mt-3">
        <p>
          <?php _e('Sapphire is a pledge of special privileges, trust, exclusivity and loyalty from our side. Here we present a detailed description of the welcome offer that we bring to you. Just so that you know, the welcome offer is completely on us!') ?>
        </p>
      </div>
    </div>
    <div class="header-slider">
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part('content', get_post_format() ); ?>
        <?php endwhile; ?>

        <?php else : ?>
        <?php get_template_part('content', 'none'); ?>
        <?php endif ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>