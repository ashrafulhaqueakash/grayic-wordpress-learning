<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shadepro
 */
global $cs_styles;
$cs_styles = '';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="shadepro-cs-hero-area">
	    <div class="shadepro-cs-her-absolute-image">
            <?php shadepro_post_thumbnail(); ?>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="shadepro-cs-hero-content">
                        <?php shadepro_cpt_categories('case-study-category') ?>
                        <?php the_title( '<h1 class="shadepro-cs-title">', '</h1>' ); ?>
                        <?php if( have_rows('cs_metas') ): ?>
                        <div class="shadepro-cs-metas row">
                        <?php while ( have_rows('cs_metas') ) : the_row(); ?>
                            <div class="col-md-4">
                                <div class="shadepro-cs-meta">
                                    <span class="shadepro-cs-meta-title"><?php the_sub_field('meta_title') ?></span>
                                    <div class="shadepro-cs-meta-value">
                                        <?php 
                                            the_sub_field('meta_icon'); 
                                            echo wpautop( get_sub_field('meta_value'), true);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<div class="shadepro-cs-content-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="cs-content">
                    <?php
                        the_content(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shadepro' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                esc_html( get_the_title() )
                            )
                        );

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shadepro' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>

                    <?php if( have_rows('cs_result') ): $i=0;?>
                    <div class="cs-results row">
                    <?php while ( have_rows('cs_result') ) : the_row(); $i++;
                        $cs_style_function = 'cs_desc_color_'. $i;
                    ?>
                        <div class="col-md-4">
                            <div class="shadepro-cs-result">
                                <h3 class="shadepro-cs-result-title"><?php the_sub_field('title') ?></h3>
                                <span class="shadepro-cs-result-desription shadepro-cs-rdesc-<?php echo esc_attr($i); ?>">
                                    <?php 
                                         the_sub_field('description'); 
                                    ?>
                                </span>
                                <?php
                                    $cs_styles .= ".shadepro-cs-rdesc-{$i} {color: ".get_sub_field('description_color')."}";
                                ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
	</div><!-- .entry-content -->

    <?php
        wp_register_style( 'cs-inline-css', false );
        wp_enqueue_style( 'cs-inline-css' );
        wp_add_inline_style( 'cs-inline-css', $cs_styles );
    ?>
</article><!-- #post-<?php the_ID(); ?> -->
