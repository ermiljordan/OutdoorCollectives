<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package outdoorCollective
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/outdoorCollective.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/assets/outdoorCollective.png" sizes="16x16" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'odc' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' )); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="header-background">
				<div class="header container">
					<a href="<?php echo esc_url( home_url('/') ); ?>">
					<h1 class="site-title">Outdoor Collective</h1>
					</a>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</div><!-- #header -->	
			</div><!-- #header-background -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
<!-- Statcounter code for Zephyr Air Frame Tent https://www.zephyrairframetent.com on WordPress.org -->
	<script type="text/javascript">
var sc_project=11788111; 
var sc_invisible=1; 
var sc_security="8fe8cfe2"; 
</script>
<script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
<noscript><div class="statcounter"><a title="Web Analytics" href="http://statcounter.com/" target="_blank"><img class="statcounter" src="//c.statcounter.com/11788111/0/8fe8cfe2/1/" alt="Web Analytics"></a></div></noscript>
<!-- End of Statcounter Code -->
	<div id="content" class="site-content">
