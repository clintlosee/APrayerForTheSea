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



	<footer class="footer-distributed container footer-main col-sm-12">

		<!-- Left Footer Box Content -->
		<div class="footer-left col-xs-12 col-md-4">
			<?php if (is_active_sidebar('left-footer-box')) : ?>
				<ul>
					<?php dynamic_sidebar('left-footer-box'); ?>
				</ul>
			<?php else : ?>
				<div class="site-info">
					<p>Copyright &copy; <?php echo date('Y'); ?> &middot; All Rights Reserved &middot; <a href="http://your website.com/" >A'mar Concerts</a></p>
				</div><!-- .site-info -->
			<?php endif ?>
		</div>

		<!-- Center Footer Box Content -->
		<div class="footer-center col-xs-12 col-md-4">
			<?php if (is_active_sidebar('center-footer-box')) : ?>
				<ul>
					<?php dynamic_sidebar('center-footer-box'); ?>
				</ul>
			<?php else : ?>
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Orem, Utah</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 801 1234567</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>
			<?php endif ?>
		</div>

		<!-- Right Footer Box Content -->
		<div class="footer-right col-xs-12 col-md-4 last">
			<?php if (is_active_sidebar('right-footer-box')) : ?>
				<ul>
					<?php dynamic_sidebar('right-footer-box'); ?>
				</ul>
			<?php else : ?>
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
			<?php endif ?>
		</div>

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
