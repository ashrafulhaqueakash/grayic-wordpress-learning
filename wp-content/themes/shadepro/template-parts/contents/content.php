<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shadepro
 */

global $shadeproObj;
$shadepro = get_option('shadepro');
$grid = (isset($shadepro['blog_grid'])) ? $shadepro['blog_grid'] : 'two-column';
switch ($grid) {
	case 'two-column':
		$limit	= 17;
		$title = wp_trim_words(get_the_title(), 11, '...');
		break;

	case 'one-column':
		$limit	= 30;
		$title = get_the_title();
		break;

	default:
		$limit	= 17;
		$title = wp_trim_words(get_the_title(), 11, '...');
		break;
}

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-post-item <?php echo esc_attr($grid) ?>">
		<div class="post-thumbnail-wrapper">
			<?php
			if (is_sticky()) {
				echo '<span class="sticky-text" >' . esc_html__('Sticky', 'shadepro') . '</span>';
			}
			?>
			<?php shadepro_post_thumbnail(); ?>
		</div>
		<div class="post-content">
			<div class="post-meta">
				<div class="post-date">
					<?php shadepro_posted_on() ?>
				</div>


			</div>
			<?php
			echo '<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">';
			echo esc_html($title);
			echo '</a></h2>';
			?>
			<?php echo '<p>' . esc_html($shadeproObj->postExcerpt($limit, get_the_excerpt())) . '</p>'; ?>

			<div class="post-read-more">
				<a href="<?php echo  esc_url(get_permalink()); ?>"><?php echo (isset($shadepro['continue_reading_title'])) ? $shadepro['continue_reading_title'] : esc_html__('Continue Reading', 'shadepro') ?></a>
			</div>
		</div>
	</div>

</div><!-- #post-<?php the_ID(); ?> -->