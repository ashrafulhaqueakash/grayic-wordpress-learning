<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shadepro
 */

get_header();

// global $wp_query; print_r($wp_query);
// var_dump(get_query_var('job_location'));
global $shadeproObj;

$shadeproObj->shadepro_breadcrumb_bridge();

$shadepro = get_option('shadepro');
$grid = (isset($shadepro['blog_grid'])) ? $shadepro['blog_grid'] : 'one-column';

?>

<div class="content-block career-page">
    <div class="container">
        <div class="row career-content-row">
            <div class="col-12 col-mb-4">
                <?php
                // If Redux Framework Active
                get_template_part('template-parts/contents/content-job');

                ?>
            </div>
            <?php $shadeproObj->pagination(); ?>
        </div>

    </div>
</div>

<?php

get_footer();
