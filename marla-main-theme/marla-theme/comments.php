<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marla-mm
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<div id="comments" class="comments-area ">

	<?php
	// You can start editing here -- including this comment!
	if (have_comments()):
		?>
		<h2 class="comments-title fs-3 fw-bold"">
			<?php
			$pls_snu_comment_count = get_comments_number();
			if ('1' === $pls_snu_comment_count) {
				printf(
					/* translators: 1: title. */
					esc_html__('One thought on &ldquo;%1$s&rdquo;', 'marla-mm'),
					'<span>' . wp_kses_post(get_the_title()) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $pls_snu_comment_count, 'comments title', 'marla-mm')),
					number_format_i18n($pls_snu_comment_count), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post(get_the_title()) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class=" comment-list">
			<?php
			wp_list_comments(
				array(
					'style' => 'ol',
					'short_ping' => true,
				)
			);
			?>
			</ol>

			<?php
			the_comments_navigation();

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if (!comments_open()):
				?>
				<p class="no-comments">
					<?php esc_html_e('Comments are closed.', 'marla-mm'); ?>
				</p>
				<?php
			endif;

	endif; // Check for have_comments().?>

		<?php
		$required_text = ($req ? ' ' . sprintf(__('(required)', 'marla-mm')) : '');
		comment_form(
			array(
				'class_form' => 'bootstrap-5-comment-form',
				'comment_field' => '<div class="form-floating mb-3">' .
					'<textarea class="form-control" placeholder="' . esc_attr_x('Leave a comment here', 'comment form placeholder', 'marla-mm') . '" id="floatingTextarea2" name="comment" style="height: 200px;" aria-required="true"></textarea>' .
					'<label for="floatingTextarea2">' . _x('Comments', 'noun') . '</label>' .
					'</div>',
				'fields' => array(
					'author' =>
						'<div class="form-floating mb-3">' .
						'<input type="text" class="form-control" id="author" name="author" placeholder="' . esc_attr_x('Name', 'comment form placeholder', 'marla-mm') . '" />' .
						'<label for="author">' . _x('Name', 'noun') . '</label>' .
						'</div>',
					'email' =>
						'<div class="form-floating mb-3">' .
						'<input type="email" class="form-control" id="email" name="email" placeholder="' . esc_attr_x('Email', 'comment form placeholder', 'marla-mm') . '" />' .
						'<label for="email">' . _x('Email', 'noun') . '</label>' .
						'</div>',
					'url' =>
						'<div class="form-floating mb-3">' .
						'<input type="text" class="form-control" id="url" name="url" placeholder="' . esc_attr_x('Website', 'comment form placeholder', 'marla-mm') . '" />' .
						'<label for="url">' . _x('Website', 'noun') . '</label>' .
						'</div>',
				),
				'must_log_in' => '<p class="must-log-in">' .
					sprintf(
						/* translators: %s: login URL */
						__('You must be <a href="%s">logged in</a> to post a comment.', 'marla-mm'),
						wp_login_url(apply_filters('the_permalink', get_permalink()))
					) . '</p>',
				'logged_in_as' => '<p class="logged-in-as">' .
					sprintf(
						/* translators: 1: edit user link, 2: accessibility text, 3: user name, 4: logout link */
						__('<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>', 'marla-mm'),
						get_edit_user_link(),
						esc_attr(sprintf(__('Logged in as %s. Edit your profile.', 'marla-mm'), $user_identity)),
						$user_identity,
						wp_logout_url(apply_filters('the_permalink', get_permalink()))
					) . '</p>',
				'comment_notes_before' => '<p class="comment-notes">' .
					__('Your email address will not be published.', 'marla-mm') . $required_text .
					'</p>',
				'comment_notes_after' => '',
				'id_submit' => 'submit-comment',
				'class_submit' => 'btn btn-dark',
			)
		);
		?>
</div>