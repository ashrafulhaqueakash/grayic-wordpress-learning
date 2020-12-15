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

$shadepro = get_option('shadepro');
$grid = (isset($shadepro['blog_grid'])) ? $shadepro['blog_grid'] : 'one-column';

?>
<div class="content-block case-study-page">
    <div class="container">
        <div class="row blog-content-row">
            <?php
            if( have_posts() ) :

                while( have_posts() ) : the_post();
    
                    get_template_part( 'template-parts/contents/content-case-study');
    
                endwhile;
    
            else:
                get_template_part('template-parts/contents/content-none');
            endif;
            
            
            ?>

        </div>

    </div>
</div>

<?php

get_footer();
