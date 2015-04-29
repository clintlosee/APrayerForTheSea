<?php
/*
Template Name: Event Page
*/
?>

<?php
/**
 *
 * @package A'mar, A Prayer for the Sea
 */

get_header(); ?>

<div class="main">
    <?php if ( have_posts() ) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
    <div class="slide slide-img" id="slide1" data-slide="1" data-stellar-background-ratio=".3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 h1" data-stellar-ratio=".2">
            <h1><?php the_title() ?><br><span class="not-bold"><?php echo get_post_meta($post->ID, 'event', true)?></span></h1>
          </div>
        </div>
      </div>
    </div><!-- slide -->

    <div  class="slide slide-text" id="slide2" data-slide="2" data-stellar-background-ratio="1">
      <div class="container">
        <div class="row">
          <h2>An International Event</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="http://www.amar.dev/wp-content/themes/APrayerForTheSea/img/concert_amar_pichilemu.jpg" class="img-responsive" >
          </div>
          <div class="col-md-6">
            <?php
                if(function_exists( 'the_content_part')) {
                  the_content_part(1);
                } else {
                  the_content();
                }
            ?>
          </div>
        </div>
      </div>
    </div><!-- slide -->

    <div class="slide slide-img" id="slide3" data-slide="3" data-stellar-background-ratio="0.3"></div>

    <div class="slide slide-text" id="slide4" data-slide="4" data-stellar-background-ratio="1">
      <div class="container">
        <div class="row graphic-overlap">
          <h2>Crazy Surfers</h2>
          <div class="iframe">
            <iframe src="https://player.vimeo.com/video/108799588" frameborder="0" allowfullscreen="" data-aspectratio="0.5625" width="560" height="315"></iframe>
          </div>
        </div>
        <div class="row">

          <div class="col-md-6">
            <?php
                if(function_exists( 'the_content_part')) {
                  the_content_part(2);
                } else {
                  the_content();
                }
            ?>
          </div>

          <div class="col-md-6">
            <?php
                if(function_exists( 'the_content_part')) {
                  the_content_part(3);
                } else {
                  the_content();
                }
            ?>
          </div>
        </div>
      </div>
    </div><!-- slide -->

    <div class="slide slide-img" id="slide5" data-slide="5" data-stellar-background-ratio="0.3"></div>

    <div class="slide slide-text" id="slide6" data-slide="6" data-stellar-background-ratio="1">
      <div class="container">
        <div class="row graphic-overlap">
          <h2>Travel Chile</h2>
          <div class="iframe">
            <iframe src="https://player.vimeo.com/video/102315188" frameborder="0" allowfullscreen="" data-aspectratio="0.5625" width="560" height="315"></iframe>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <?php
                if(function_exists( 'the_content_part')) {
                  the_content_part(4);
                } else {
                  the_content();
                }
            ?>
          </div>
          <div class="col-md-6">
            <?php
                if(function_exists( 'the_content_part')) {
                  the_content_part(5);
                } else {
                  the_content();
                }
            ?>
          </div>
        </div>
        <div class="row sponsors">
          <div class="col-sm-4"><img src="http://www.amar.dev/wp-content/themes/APrayerForTheSea/img/logo1.png" class="img-responsive"></div>
          <div class="col-sm-4"><img src="http://www.amar.dev/wp-content/themes/APrayerForTheSea/img/logo2.png" class="img-responsive"></div>
          <div class="col-sm-4"><img src="http://www.amar.dev/wp-content/themes/APrayerForTheSea/img/uvu_digitalmedia_logo.png" class="img-responsive"></div>
        </div>
      </div>
    </div><!-- slide -->

    <div class="slide slide-img" id="slide-end" data-slide="7" data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="row">
          <div class="col-md-12 h1" data-stellar-ratio="1">
              <h1><?php the_title() ?><br><span class="not-bold"><?php echo get_post_meta($post->ID, 'event', true)?></span></h1>
          </div>
        </div>
      </div>
    </div><!-- slide -->
<?php endwhile; ?>
<?php endif; ?>
</div><!-- main -->

<?php get_footer('main'); ?>
