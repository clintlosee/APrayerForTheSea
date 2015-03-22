<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Amar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Google Open Sans Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'amar' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand site-title" href="#"><?php bloginfo( 'name' ); ?></a></h1>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<?php
						if (has_nav_menu('primary')) :
							wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav navbar-right' ) );
						endif;
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>

	</header><!-- #masthead -->


		<?php
		 if ( is_page('Home')) {
		// 	//layerslider(3, 'homepage'); //insert LayerSlider : number is ID of slider
		 	//putRevSlider( "homepage" );
		 }

		//Responsive Google Map on Contact Page
		if ( is_page('Contact')) {
			echo '<section>';
			echo '<div class="responsive-iframe-container">';
			echo '<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;aq=&amp;sll=39.499761,-111.547028&amp;sspn=6.492924,9.876709&amp;ie=UTF8&amp;hq=&amp;hnear=Murray,+Salt+Lake,+Utah&amp;t=m&amp;ll=40.671525,-111.886482&amp;spn=0.045569,0.072956&amp;z=13&iwloc=near&amp;output=embed"></iframe>';
			echo '</div>';
			echo '</section>';
			}
			?>


	<div id="content" class="">
