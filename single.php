<?php 
/*
#==========================================
#single.php 
#
#The single post template file
#==========================================
*/
?>

<?php 
// load header
get_header();
?>

<div class="container-fluid text-center">
  <div class="jumbotron">
    <div class="header-slider">
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <div class="jumbotron">
            <div class="row">
              <div class="col-12">
                <h1><?php the_title(); ?> </h1>
              </div>
            </div>
          </div>
          <div class="jumbotron">
            <div class="row">
              <?php  if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('full', array('class' => 'img-responsive center-block+')) ?>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>

        <div class="single-post container-fluid">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <header>
                  <?php 
                    sl0tr_post_meta(); 
                  ?>
              </header>
              <?php the_content(); ?>
            </div>
          </div>
        </div>

        <?php else : ?>
          <?php _e('Oops, it seems there is nothing here.', 'sl0tr') ?>
        <?php endif ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>