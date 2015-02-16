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

	<footer id="" class="site-footer footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'amar' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'amar' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'amar' ), 'Amar', '<a href="https://github.com/clintlosee/APrayerForTheSea" rel="designer">Clint Losee and Scott Gifford</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
