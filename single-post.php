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
        <video autoplay muted loop>
            <source src="<?php echo get_site_url() . '/wp-content/uploads/2019/08/Typewriter-Top-1334.mp4' ?>" type="video/mp4">
            <!-- <source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg"> -->
		</video>
		<main id="main" class="site-main">

        <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() . '-full' );


			the_post_navigation(array(
                'prev_text' => (get_previous_post_link()),
                'next_text' => (get_next_post_link())
            ));

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
