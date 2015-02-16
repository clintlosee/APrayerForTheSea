<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Amar
 */
?>

	</div><!-- #content -->



	<footer class="footer-distributed row footer-main col-sm-12">
		<?php if (is_active_sidebar('left-footer-box')) : ?>
			<div class="footer-left col-sm-4">
				<ul>
					<?php dynamic_sidebar('left-footer-box'); ?>
				</ul>

				<div class="site-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'amar' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'amar' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'amar' ), 'Amar', '<a href="https://github.com/clintlosee/APrayerForTheSea" rel="designer">Clint Losee and Scott Gifford</a>' ); ?>
				</div><!-- .site-info -->
			</div>
		<?php endif ?>

		<?php if (is_active_sidebar('center-footer-box')) : ?>
			<div class="footer-center col-sm-4">
				<ul>
					<?php dynamic_sidebar('center-footer-box'); ?>
				</ul>

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>
			</div>
		<?php endif ?>

		<?php if (is_active_sidebar('right-footer-box')) : ?>
			<div class="footer-right col-sm-4">
				<ul>
					<?php dynamic_sidebar('right-footer-box'); ?>
				</ul>

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>
		<?php endif ?>

	</footer>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
