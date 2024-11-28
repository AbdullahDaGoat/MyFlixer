<?php


/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_template_part('admin/header'); ?>

<div class="admin-column">
	<?php if (isset($_POST["update_options"])) { ?>
		<?php
			foreach ($_POST as $key => $value) {
                if ($key != 'update_options') {
					update_option($key, esc_html($value));
				}
            }
		?>
		<div class="admin-box admin-updated"><?php echo __('Settings saved', 'myflixer'); ?></div>		
	<?php } ?>
	<div class="admin-box">
		<h2><?php echo __('Comments', 'myflixer'); ?></h2>
	</div>
	<div class="admin-box">
		<form action="" method="post" enctype="multipart/form-data">
		<p>
			<label><?php echo __('Activate DISQUS Comments?', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Activating this function will enable DISQUS comments', 'myflixer'); ?></span>
			<label class="radio" for="admin_comments_enable"><input type="radio" <?php if (get_option('admin_comments') == 1) { ?> checked="checked" <?php } ?> value="1" id="admin_comments_enable" name="admin_comments"><span class="mark"><?php echo __('Yes', 'myflixer'); ?></span></label>
			<label class="radio" for="admin_comments_disable"><input type="radio" <?php if (get_option('admin_comments') == 2) { ?> checked="checked" <?php } ?> value="2" id="admin_comments_disable" name="admin_comments"><span class="mark"><?php echo __('No', 'myflixer'); ?></span></label>
		</p>
		<p>
			<label for="admin_disqus"><?php echo __('DISQUS Shortname', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Your DISQUS Shortname identifier ID for comments you need to register a DISQUS account e setup your new website.', 'myflixer'); ?>  <a href="<?php echo esc_url( __( 'https://anon.to/?https://help.disqus.com/en/articles/1717111-what-s-a-shortname', 'myflixer' ) ); ?>" target="_blank" rel="nofollow"><strong><?php printf( __( 'more info %s', 'myflixer' ),''); ?></strong></a><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('movieapp-1', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('movieapp-1', 'myflixer'); ?>" name="admin_disqus" id="admin_disqus"  value="<?php echo stripslashes_deep(get_option('admin_disqus')); ?>">
		</p>

		<p><input type="submit" name="update_options" value="<?php echo __('Save settings', 'myflixer'); ?>" class="admin-button admin-button-color-1"></p>
		</form>
	</div>
</div>
<?php get_template_part('admin/footer'); ?>