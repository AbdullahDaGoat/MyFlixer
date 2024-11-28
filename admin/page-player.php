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
		<h2><?php echo __('Player', 'myflixer'); ?></h2>
	</div>
	<div class="admin-box">
		<form action="" method="post" enctype="multipart/form-data">
		<p>
			<label><?php echo __('Activate Premium API?', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('By activating this option you will be able to use the', 'myflixer'); ?> <a href="<?php echo esc_url( __( wp_get_theme()->get( 'AuthorURI' )) ); ?>" target="_blank"><strong><?php printf( __( 'premium API %s', 'myflixer' ),''); ?></strong></a><br></span>
			<label class="radio" for="admin_premium_enable"><input type="radio" <?php if (get_option('admin_premium') == 1) { ?> checked="checked" <?php } ?> value="1" id="admin_premium_enable" name="admin_premium"><span class="mark"><?php echo __('Yes', 'myflixer'); ?></span></label>
			<label class="radio" for="admin_premium_disable"><input type="radio" <?php if (get_option('admin_premium') == 2) { ?> checked="checked" <?php } ?> value="2" id="admin_premium_disable" name="admin_premium"><span class="mark"><?php echo __('No', 'myflixer'); ?></span></label>
		</p>
		<p>
			<label for="admin_server_0_text"><?php echo __('Enter text for Server Premium', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Premium.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Premium', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Premium', 'myflixer'); ?>" name="admin_server_0_text" id="admin_server_0_text"  value="<?php echo stripslashes_deep(get_option('admin_server_0_text')); ?>">
		</p>
		<p>
			<label for="admin_server_1_text"><?php echo __('Enter text for Server VidSrc', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for VidSrc.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('VidSrc', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('VidSrc', 'myflixer'); ?>" name="admin_server_1_text" id="admin_server_1_text"  value="<?php echo stripslashes_deep(get_option('admin_server_1_text')); ?>">
		</p>
		<p>
			<label><?php echo __('Activate Server Filemoon?', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('By activating this option you will be able to use the Server Filemoon', 'myflixer'); ?><br></span>
			<label class="radio" for="admin_server_2_enable"><input type="radio" <?php if (get_option('admin_server_2') == 1) { ?> checked="checked" <?php } ?> value="1" id="admin_server_2_enable" name="admin_server_2"><span class="mark"><?php echo __('Yes', 'myflixer'); ?></span></label>
			<label class="radio" for="admin_server_2_disable"><input type="radio" <?php if (get_option('admin_server_2') == 2) { ?> checked="checked" <?php } ?> value="2" id="admin_server_2_disable" name="admin_server_2"><span class="mark"><?php echo __('No', 'myflixer'); ?></span></label>
		</p>
		<p>
			<label for="admin_server_2_text"><?php echo __('Enter text for Server Filemoon', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Filemoon.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Filemoon', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Filemoon', 'myflixer'); ?>" name="admin_server_2_text" id="admin_server_2_text"  value="<?php echo stripslashes_deep(get_option('admin_server_2_text')); ?>">
		</p>
		<p>
			<label><?php echo __('Activate Server VidPlay?', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('By activating this option you will be able to use the Server VidPlay', 'myflixer'); ?><br></span>
			<label class="radio" for="admin_server_3_enable"><input type="radio" <?php if (get_option('admin_server_3') == 1) { ?> checked="checked" <?php } ?> value="1" id="admin_server_3_enable" name="admin_server_3"><span class="mark"><?php echo __('Yes', 'myflixer'); ?></span></label>
			<label class="radio" for="admin_server_3_disable"><input type="radio" <?php if (get_option('admin_server_3') == 2) { ?> checked="checked" <?php } ?> value="2" id="admin_server_3_disable" name="admin_server_3"><span class="mark"><?php echo __('No', 'myflixer'); ?></span></label>
		</p>
		<p>
			<label for="admin_server_3_text"><?php echo __('Enter text for Server VidPlay', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for VidPlay.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('VidPlay', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('VidPlay', 'myflixer'); ?>" name="admin_server_3_text" id="admin_server_3_text"  value="<?php echo stripslashes_deep(get_option('admin_server_3_text')); ?>">
		</p>
		<p><input type="submit" name="update_options" value="<?php echo __('Save settings', 'myflixer'); ?>" class="admin-button admin-button-color-1"></p>
		</form>
	</div>
</div>
<script>
jQuery('input[name=admin_premium]').click(function(e) {
e.preventDefault();
alert('You cannot activate this feature!');
});
</script>
<?php get_template_part('admin/footer'); ?>