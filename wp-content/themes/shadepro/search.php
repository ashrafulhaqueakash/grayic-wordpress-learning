<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package shadepro
 */

get_header();

global $shadeproObj;

$shadeproObj->shadepro_breadcrumb_bridge();

$shadepro = get_option('shadepro');
$grid = (isset($shadepro['blog_grid'])) ? $shadepro['blog_grid'] : 'one-column';

?>

<div class="content-block sp-80">
	<div class="container">
		<div class="row blog-content-row">

				<?php
				// If Redux Framework Active
				if (class_exists('ReduxFrameworkPlugin')):
					// var_dump($shadepro['blog_layout']);
					$shadeproObj->postMarkupGenerator($shadepro['blog_layout'], $grid);

				else: // If Redux Framework Is Not Active

					$shadeproObj->postMarkupGenerator(null, $grid);

				endif;

				?>
		</div>
	</div>
</div>


<?php
get_footer();
