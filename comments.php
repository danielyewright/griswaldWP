<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package griswald
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields = apply_filters( 'comment_form_default_fields', array(
'author' => '<div class="form-group">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
'email'  => '<div class="form-group"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
    '<input id="email" class="form-control" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>'
) );

$comments_args = array(
    'fields' =>  $fields,
    'title_reply' => '<h2>Post a Comment</h2>',
    'label_submit' => 'Send Comment',
    'class_submit' => 'btn btn-primary',
    'comment_field'  => '<div class="form-group"><label for="email">' . __( 'Comment' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<textarea id="comment" class="form-control" name="comment" rows="10"' . $aria_req . '></textarea></div>',
    'comment_notes_after' => ''
);

comment_form($comments_args);
?>

<div class="divider"></div>

<div id="comments" class="comments-wrapper">

    <?php
	if ( have_comments() ) : ?>
		<h2>
			<?php
			    $comment_count = get_comments_number();
				printf(
					esc_html_e( 'Comments (' . $comment_count . ')', 'griswald' ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

        <?php
            wp_list_comments( array(
                'short_ping' => true,
                'callback'   => 'custom_comments_callback'
            ) );
        ?>

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'griswald' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().
	?>

</div><!-- #comments -->
