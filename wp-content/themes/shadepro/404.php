<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package shadepro
 */

get_header();
?>

<div class="error-404 not-found">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-7">
				<img src="<?php echo esc_url( get_template_directory_uri() ). '/assets/img/404.png' ?>" alt="<?php echo esc_attr('404 page') ?>">
				<h1><?php echo esc_html__( '404 Error', 'shadepro' ) ?></h1>
				<p><?php echo esc_html__('Ops! It seems like the page you are looking for is not available! Please try again with another page or go back to home.', 'shadepro') ?></p>
				<a href="<?php echo esc_url(home_url()) ?>" class="shadepro-btn shadepro-bordered-btn"><?php echo esc_html__( 'Back to Home', 'shadepro' ) ?></a>
			</div>
		</div>
	</div>
</div><!-- .error-404 -->


<?php
get_footer();
