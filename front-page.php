<?php


/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NocStudioX
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="jumbotron" id="frontPageBannerBox">
				<h1 class="display-4">NOC STUDIO</h1>
				<h2>Express your authentic voice</h2>
			</div>
		<?php
		
			get_template_part( 'template-parts/content', 'home' );

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
