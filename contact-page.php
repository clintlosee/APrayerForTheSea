<?php
/*
Template Name: Contact Page
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

				<section class="col-md-3" id="contact" role="main">

					<div class="" id="contact-info">
						<h3>Contact Info</h3>

						<p>123 East 456 South<br />
						Murray, UT 84107<br />
						USA</p>

						<p>Phone: (801) 333-4321<br />
						Email: test@amar.com1<br />
						Web: amar.com1<br />
					</div><!-- End #contact-info -->


					<div class="" id="contact-form">
						<h3>Let&#8217;s keep in touch</h3>
					</div><!-- End #contact-form -->

				</section>

				<section class="col-md-9">
					<?php get_template_part( 'content', 'page' ); ?>
				</section>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
    </div><!-- end .container -->


<?php get_footer('main'); ?>
