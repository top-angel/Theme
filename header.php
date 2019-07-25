<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NocStudioX
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--We add some classes to facilitate the transition magic from this site https://codyhouse.co/gem/animated-page-transition/ -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nocstudiox' ); ?></a>

	<header id="masthead" class="site-header">
		<?php 
		//Pull in bootstrap header to display top menu from site
			get_template_part('template-parts/bootstrap', 'header');
		?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
