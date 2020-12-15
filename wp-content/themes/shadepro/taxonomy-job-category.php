<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shadepro
 */

get_header();

global $shadeproObj;

$shadeproObj->shadepro_breadcrumb_bridge();

?>
<div class="content-block career-page">
    <div class="container">
        <div class="row career-content-row">
            <div class="col-12">
                <?php
                // If Redux Framework Active
                get_template_part('template-parts/contents/content-job');

                $shadeproObj->pagination();
                ?>
            </div>
        </div>

    </div>
</div>

<?php

get_footer();
