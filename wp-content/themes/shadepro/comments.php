<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shadepro
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}

$shadepro_comment_count = get_comments_number();
?>

<div class="comment-form-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if (!comments_open()) :
				?>
					<p class="no-comments"><?php esc_html_e('Comments are closed.', 'shadepro'); ?></p>
				<?php
				else :

					$args = array(
						'title_reply' => __( 'Submit your response', 'shadepro' ),
						'comment_field' => '<p class="comment-form-comment">
									<label for="comment">' . esc_html__('Comment', 'shadepro') . '</label>
									<textarea id="comment" name="comment" aria-required="true" placeholder="' . esc_attr__('Write your comment', 'shadepro') . '"></textarea>
								</p>',
						'fields' => array(
							//Author field
							'author' => '<p class="comment-form-author">
								<label for="author">' . esc_html__('Your name', 'shadepro') . '</label>
								<input id="author" name="author" aria-required="true" placeholder="' . esc_attr__('John Doe', 'shadepro') . '" required="required" />
								</p>',
							//Email Field
							'email' => '<p class="comment-form-email">
								<label for="email">' . esc_html__('Email address', 'shadepro') . '</label>
								<input id="email" name="email" placeholder="' . esc_attr__('example@gmail.com', 'shadepro') . '" required="required" />
								</p>',
							//URL Field
							'url' => '',
						),

					);
					comment_form($args);
				endif;
				?>

			</div>
		</div>
	</div>
</div>

<?php if ($shadepro_comment_count != 0) : ?>
	<div id="comments" class="comments-area">

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php
					// You can start editing here -- including this comment!
					if (have_comments()) :
					?>
						<h2 class="comments-title">
							<?php

							if ('1' === $shadepro_comment_count) {
								printf(
									/* translators: 1: title. */
									esc_html__('01 Responses on this post', 'shadepro')
								);
							} else {
								printf(
									/* translators: 1: comment count number, 2: title. */
									esc_html(
										_nx(
											'%1$s Response on this post',
											'%1$s Responses on this post',
											$shadepro_comment_count,
											'Responses title',
											'shadepro'
										)
									),
									number_format_i18n($shadepro_comment_count), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'<span>' . esc_html(get_the_title()) . '</span>'
								);
							}
							?>
						</h2><!-- .comments-title -->

						<?php the_comments_navigation(); ?>

						<ol class="comment-list">
							<?php
							wp_list_comments(
								array(
									'style'      => 'ol',
									'short_ping' => true,
								)
							);
							?>
						</ol><!-- .comment-list -->

						<?php
						// the_comments_navigation();
						$cpage = get_query_var('cpage') ? get_query_var('cpage') : 1;

						if ($cpage > 1) : ?>
							<div class="shadepro-comment-loadmore-btn"><?php echo esc_html__('Load more comments', 'shadepro') ?> <i class="fa fa-caret-down"></i></div>
					<?php
							$cpage = get_query_var('cpage') ? get_query_var('cpage') : 1;
							wp_localize_script(
								'shadepro-main',
								'shadepro_comment_loadmore',
								array(
									'ajaxurl' => admin_url('admin-ajax.php'),
									'parent_post_id' => get_the_ID(),
									'cpage' => $cpage,
								)
							);

						endif;


					endif; // Check for have_comments().

					?>
				</div>
			</div>
		</div>

	</div><!-- #comments -->
<?php endif; ?>