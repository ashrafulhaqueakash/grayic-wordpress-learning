<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package shadepro
 */

get_header();
$shadepro = get_option('shadepro');
$use_custom_layout = get_post_meta(get_the_ID(), 'use_custom_page_layout', true);
$custom_page_layout = get_post_meta(get_the_ID(), 'select_custom_layout', true);
$layout = '';
if (!empty($custom_page_layout && $use_custom_layout)) {
	$layout = $custom_page_layout;
} elseif (isset($shadepro['single_page_layout'])) {
	$layout = $shadepro['single_page_layout'];
} else {
	$layout = 'right-sidebar';
}


while (have_posts()) : the_post();
?>
	<div class="content-block post-details-page">
		<div class="container">
			<div class="row">

				<?php if ('left-sidebar' == $layout) : ?>
					<div class="col-md-4"><?php get_sidebar(); ?></div>
				<?php endif; ?>
				<div class="col-md-8">
					<header class="entry-header">
						<?php
						the_title('<h1 class="entry-title">', '</h1>');


						if ('post' === get_post_type()) :
						?>
							<div class="entry-meta">
								<?php
								shadepro_posted_by();
								?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->
					<main id="primary" class="site-main">

						<?php


						get_template_part('template-parts/single/post');

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'shadepro') . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'shadepro') . '</span> <span class="nav-title">%title</span>',
							)
						);



						?>

					</main><!-- #main -->
				</div>
				<?php if ('right-sidebar' == $layout) : ?>
					<div class="col-md-4"><?php get_sidebar(); ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) :
		comments_template();
	endif;
	?>
<?php
endwhile; // End of the loop.

get_footer();
