<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myflixer
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$myflixer_comments = get_option('admin_comments'); 
if ($myflixer_comments == 1) { 

?>
<script>var comments = "<?php echo disqus; ?>";</script>
 <div class="section" id="comment">
              <div class="head">
                <div class="start">
                  <h2 class="title gardiently"><?php echo txtcomments; ?></h2>
                </div>
              </div>
	<div class="body">
		<div id="disqus_thread" style="min-height: 100px;">
			<div id="disqus_thread_loader"><?php echo esc_html__( 'Loading Comments', 'myflixer' ); ?></div>
		</div>
	</div>
</div><!-- #comments -->
<?php } else { ?>
<?php if ( post_password_required() ) { return; } ?>

 <div class="section" id="comment" class="mt-3">
	<?php if ( have_comments() ) { ?>
		<h4 class="comments-title"><?php comments_number(esc_html__('No Comments', 'myflixer'), esc_html__('1 Comment', 'myflixer'), '% ' . esc_html__('Comments', 'myflixer') ); ?></h4>
		<span class="title-line"></span>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'avatar_size' => 60, 'style' => 'ul', 'callback' => 'myflixer_comments', 'type' => 'all' ) ); ?>
		</ol>
		<?php the_comments_pagination( array( 'prev_text' => '<i class="bi bi-angle-left"></i> <span class="screen-reader-text">' . esc_html__( 'Previous', 'myflixer') . '</span>', 'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'myflixer') . '</span> <i class="bi bi-angle-right"></i>', ) ); ?>
	<?php } ?>
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'myflixer'); ?></p>
	<?php } ?>
	<?php comment_form(); ?>
</div><!-- #comments -->
<?php } ?>
