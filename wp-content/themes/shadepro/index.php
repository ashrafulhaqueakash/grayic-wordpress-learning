<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shadepro
 */

get_header();

global $shadeproObj;

printf($shadeproObj->shadepro_breadcrumb_bridge());

$shadepro = get_option('shadepro');
$grid = (isset($shadepro['blog_grid'])) ? $shadepro['blog_grid'] : 'two-column';

?>

<div class="content-block">
	<div class="container">
		<div class="row blog-content-row">

				<?php
				// If Redux Framework Active
				if( class_exists('ReduxFrameworkPlugin') ) :
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
