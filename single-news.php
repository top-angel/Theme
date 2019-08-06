<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NocStudioX
 */

get_header();
?>

	<div id="primary" class="content-area parallaxVideo">
		<main id="main" class="site-main">
        <video autoplay muted loop>
		<source src="<?php echo get_site_url() . '/wp-content/uploads/2019/08/New-Year-19739.mp4' ?>" type="video/mp4">
		<!-- <source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg"> -->
		</video>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() . '-full' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
