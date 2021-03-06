<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<!-- powered by Wordpress deleted -->
						<div class="my-1 text-center">
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href="index.php/about" class="mx-2">About</a>
							<span class="text-white">-</span>
							<a href="index.php/contact" class="mx-2">Contact</a>
						</div>
						<div class="m-auto text-center my-2">
							<p class="d-inline text-white">All rights reserved © 2019 Les Petits Pas Verts - Blog lifestyle - </p>
							<a href="<?php echo esc_url( __( 'https://shedesign.dev') ); ?>" class="d-inline"><?php printf( __( 'MamzelNyf')); ?></a>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script async defer data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
</body>

</html>

