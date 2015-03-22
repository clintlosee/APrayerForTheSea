<?php
/*
Template Name: Documentary Page
*/
?>

<?php
/**
 *
 * @package A'mar, A Prayer for the Sea
 */

get_header(); ?>

<div id="headerwrap">
    <div class="doc-video">
        <!-- <iframe src="https://www.youtube.com/embed/RwA3JAeST5E?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
        <iframe src="https://www.youtube.com/embed/RwA3JAeST5E?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">
        <div class="row">

        <section class="doc-info">

            <?php while ( have_posts() ) : the_post(); ?>

            <div class="row">
                <div class="col-md-9">
                    <h1><?php the_title() ?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <?php the_content() ?>
                </div>

            </div>



            <?php endwhile; // end of the loop. ?>
        </section>

        </div><!-- row -->
    </div> <!-- container -->
</div><!-- headerwrap -->


<?php get_footer('main'); ?>
