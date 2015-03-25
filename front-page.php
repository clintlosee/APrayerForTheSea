<?php
/*
Template Name: Front Page
*/
?>

<?php
/**
 *
 * @package A'mar, A Prayer for the Sea
 */

get_header(); ?>

<div class="container">

    <?php
      //putRevSlider( "homepage" );
    ?>

    <?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div id="home-video">
        <?php
          putRevSlider( get_post_meta($post->ID, 'slider', true) );
        ?>
      </div>

    <?php endwhile; ?>
    <?php endif; ?>

</div>



<?php get_footer('home'); ?>
