<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shadepro
 */

if ( ! is_active_sidebar( 'shadepro_blog_sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'shadepro_blog_sidebar'); 
		
	?>

</aside><!-- #secondary -->
