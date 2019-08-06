<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NocStudioX
 */
$acfDate = get_field('date_posted');
$newsImg = wp_get_attachment_image_src(get_field('news_image', false, false), false);
?>

<article class="news-hub-article news-hub-article-full" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<script>
		console.log(<?php echo json_encode($post)?>);
		console.log(<?php echo json_encode(get_field('date_posted'))?>);
	</script>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		// if ( 'post' === get_post_type() ) :
		// 	?>
			<div class="entry-meta">
				<?php
				// apply_filters('nocstudiox_posted_on', $acfDate);

				nocstudiox_posted_on($acfDate);
				nocstudiox_posted_by();
				?>
			</div><!-- .entry-meta -->
		<!-- <?php; ?> -->
	</header><!-- .entry-header -->


	<div class="entry-content">
        <img class="news-hub-image" src="<?php echo $newsImg[0]; ?>" />
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nocstudiox' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );


		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nocstudiox' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nocstudiox_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
