<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

<?php

    function format_comment($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment; ?>

        <li class="list-group-item" <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
					<div class="row-picture">
						<?php echo get_avatar($comment, 32); ?>
					</div>
					<div class="row-content">
						<div class="comment-intro">
							<?php printf(__('%s'), get_comment_author_link()) ?>
	            <span class="comment-time">(<?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?>)</span>
	          </div>


	          <?php if ($comment->comment_approved == '0') : ?>
	              <em><php _e('Your comment is awaiting moderation.') ?></em><br />
	          <?php endif; ?>

	          <?php comment_text(); ?>

	          <div class="reply">
	              <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	          </div>
					</div>
<?php
    } ?>

<div id="comments" class="comments-area panel panel-default">

	<?php
    // You can start editing here -- including this comment!
    if (have_comments()) : ?>
		<h2 class="comments-title panel-title">
			<?php
                printf(// WPCS: XSS OK.
                    esc_html(_nx('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'shillers')),
                    number_format_i18n(get_comments_number()),
                    '<span>'.get_the_title().'</span>'
                );
            ?>
		</h2>

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through??>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'shillers'); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'shillers')); ?></div>
				<div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'shillers')); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation.?>

		<ol class="comment-list list-group">
			<?php
                wp_list_comments(array(
                    'style' => 'ol',
                    'short_ping' => true,
                    'callback' => 'format_comment',
                ));
            ?>
		</ol><!-- .comment-list -->

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through??>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'shillers'); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'shillers')); ?></div>
				<div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'shillers')); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
        endif; // Check for comment navigation.

    endif; // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>

		<p class="no-comments"><?php esc_html_e('Comments are closed.', 'shillers'); ?></p>
	<?php
    endif;
		$fields = array(
			'author' => '<div class="form-group is-empty"><label for="author" class="col-xs-2 control-label">* Name</label><div class="col-xs-10"><input type="text" class="form-control" name="author" id="author" value="" size="30" maxlength="245" aria-required="true" required="required"></div></div>',
			'email' => '<div class="form-group is-empty"><label for="email" class="col-xs-2 control-label">* Email</label><div class="col-xs-10"><input type="email" class="form-control" id="email" name="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required"></div></div>',
			'url' => ''

		);
		$args = array(
			'class_form' => 'form-horizontal',
			'class_submit' => 'btn btn-primary btn-block withripple',
			'title_reply' => 'Leave a Comment',
			'comment_field' => ' <div class="form-group is-empty"><label for="comment" class="col-xs-2 control-label">* Comment</label><div class="col-xs-10"><textarea class="form-control" rows="3" name="comment" id="comment" maxlength="65525" required="true"></textarea></div></div>',
			'fields' => apply_filters('comment_form_default_fields', $fields)
		);
    comment_form($args);
    ?>

</div><!-- #comments -->
