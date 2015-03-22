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

    <div class="container">
		<div class="content col-md-12" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<section class="col-md-8 col-md-offset-1">
					<?php get_template_part( 'content', 'page' ); ?>
				</section>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
    </div><!-- end .container -->


<?php get_footer('main'); ?>
