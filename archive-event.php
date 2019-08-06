<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NocStudioX
 */

$eventVideo =  get_attached_media('video', 301);
 
get_header();
?>


<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>



	<div class="content-area parallaxVideo">
		<!--TODO: You must secure this reckless URL usage!!!! sanitize or escape the url or something, look it up yo -->
		<video autoplay muted loop>
		<source src="<?php echo get_site_url() . '/wp-content/uploads/2019/08/Curtains-320-1.mp4' ?>" type="video/mp4">
		<!-- <source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg"> -->
		</video>

		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                <h1 class="page-title">Events</h1>
				<?php
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
