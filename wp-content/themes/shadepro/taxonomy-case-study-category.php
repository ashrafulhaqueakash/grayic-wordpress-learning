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
<div class="content-block case-study-page">
    <div class="container">
        <div class="row blog-content-row">

            <?php
            // If Redux Framework Active
            $shadeproObj->postMarkupGenerator('fullpage', 'three-column');
            
            ?>

        </div>

    </div>
</div>

<?php

get_footer();
