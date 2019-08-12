<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NocStudioX
 */

$fbIcon = wp_get_attachment_image_src(291, full);

?>

	</div><!-- #content -->

	<footer id="nocStudioFooter"class="footer mt-auto py-3">
		<div class="container">
			<div class="site-info">
				
				<a href="<?php echo esc_url( __('http://adrian-rosales.io/', 'Adrian Rosales') )?>">
					
						<span><?php echo( esc_html__( 'Developed and Designed by Adrian Rosales'))?></span>
					
				</a>

				<h5>NOC Studio All Rights Reserved ⓒ <?php echo date("Y") ?></h5>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
