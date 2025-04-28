<?php
/**
 * The template for displaying Comments.
 *
 * @package Kartnic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( post_password_required() ) {
	return;
}
?>
<div id="kartnic-comments">

	<?php if ( have_comments() ) : ?>
		<h2 class="kartnic-comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				printf( _x( 'One thought on “%s”', 'comments title', 'kartnic' ), get_the_title() );
			} else {
				printf(
					_nx(
						'%1$s thought on “%2$s”',
						'%1$s thoughts on “%2$s”',
						$comments_number,
						'comments title',
						'kartnic'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ol class="kartnic-comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol>

		<?php the_comments_navigation(); ?>

	<?php endif; ?>

	<?php
	if ( ! comments_open() ) :
		?>
		<p class="kartnic-no-comments"><?php esc_html_e( 'Comments are closed.', 'kartnic' ); ?></p>
		<?php
	endif;

	comment_form();
	?>

</div><!-- #kartnic-comments -->

<?php
function kartnic_comment_callback( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment-body">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, 48 ); ?>
				<?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>', 'kartnic' ), get_comment_author_link() ); ?>
			</div>
			<div class="comment-meta commentmetadata">
				<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
					<?php echo kartnic_human_readable_time( get_comment_time('Y-m-d H:i:s') ); ?>
				</a>
				<?php edit_comment_link( __( '(Edit)', 'kartnic' ), '  ', '' ); ?>
			</div>
			<div class="comment-content">
				<?php comment_text(); ?>
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div>
			</div>
		</div>
	</li>
<?php
}
?>
