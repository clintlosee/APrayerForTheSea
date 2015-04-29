<?php
/*
Template Name: About Page
*/
?>

<?php
/**
 *
 * @package A'mar, A Prayer for the Sea
 */

get_header(); ?>

<div class="about">
    <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
    <div class="slide slide-img-about" id="slide-about" data-slide="1" data-stellar-background-ratio=".3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 h1" data-stellar-ratio=".2">
          </div>
        </div>
      </div>
    </div><!-- slide -->

    <div class="about-slide content" id="content" data-slide="2" data-stellar-background-ratio="1">
      <div class="container">
        <div class="row">
            <h1><?php the_title() ?></h1>
        </div>
        <div class="row">
              <?php the_content();?>
          </div>
        </div>
      </div>
    </div><!-- slide -->

<?php endwhile; ?>
<?php endif; ?>
</div><!-- main -->

<?php get_footer('main'); ?>
