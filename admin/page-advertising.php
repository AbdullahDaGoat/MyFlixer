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
		<h2><?php echo __('Advertising', 'myflixer'); ?></h2>
	</div>
	<div class="admin-box">
		<form action="" method="post" enctype="multipart/form-data">
		<label><?php echo __('Coming Soon', 'myflixer'); ?></label>
		<!--<p>
			<label><?php echo __('Activate Banners?', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Start earning money with our with responsive banners.', 'myflixer'); ?></span>
			<label class="radio" for="admin_sponsor_enable"><input type="radio" <?php if (get_option('admin_sponsor') == 1) { ?> checked="checked" <?php } ?> value="1" id="admin_sponsor_enable" name="admin_sponsor"><span class="mark"><?php echo __('Enable', 'myflixer'); ?></span></label>
			<label class="radio" for="admin_sponsor_disable"><input type="radio" <?php if (get_option('admin_sponsor') == 2) { ?> checked="checked" <?php } ?> value="2" id="admin_sponsor_disable" name="admin_sponsor"><span class="mark"><?php echo __('Disable', 'myflixer'); ?></span></label>
		</p>
		<p>
			<label for="admin_sponsor1"><?php echo __('Link for Banner 1', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Insert advertiser/referrer link for Banner 1', 'myflixer'); ?></span>
			<input type="text" name="admin_sponsor1" id="admin_sponsor1"  value="<?php echo stripslashes_deep(get_option('admin_sponsor1')); ?>">
		</p>
		<p>
			<label for="admin_button1"><?php echo __('Text for Banner 1', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify text for Banner 1.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('ADVERTISE HERE', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('ADVERTISE HERE', 'myflixer'); ?>" name="admin_button1" id="admin_button1"  value="<?php echo stripslashes_deep(get_option('admin_button1')); ?>">
		</p>
		<p>
			<label for="admin_sponsor2"><?php echo __('Link for Banner 2', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Insert advertiser/referrer link for Banner 2', 'myflixer'); ?></span>
			<input type="text" name="admin_sponsor2" id="admin_sponsor2"  value="<?php echo stripslashes_deep(get_option('admin_sponsor2')); ?>">
		</p>
		<p>
			<label for="admin_button2"><?php echo __('Text for Banner 2', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify text for Banner 2.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('ADVERTISING', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('ADVERTISING', 'myflixer'); ?>" name="admin_button2" id="admin_button2"  value="<?php echo stripslashes_deep(get_option('admin_button2')); ?>">
		</p>-->
		<!--<p>
			<label><?php echo __('Activate Fake Play Banner?', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Activate Banner.', 'myflixer'); ?></span>
			<label class="radio" for="admin_adbutton_enable"><input type="radio" <?php if (get_option('admin_adbutton') == 1) { ?> checked="checked" <?php } ?> value="1" id="admin_adbutton_enable" name="admin_adbutton"><span class="mark"><?php echo __('Enable', 'myflixer'); ?></span></label>
			<label class="radio" for="admin_adbutton_disable"><input type="radio" <?php if (get_option('admin_adbutton') == 2) { ?> checked="checked" <?php } ?> value="2" id="admin_adbutton_disable" name="admin_adbutton"><span class="mark"><?php echo __('Disable', 'myflixer'); ?></span></label>
		</p>
		<p>
			<label for="admin_monetize"><?php echo __('Insert fake player link', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Start earning money with our fake play buttons, insert yor publisher advertiser link.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('#', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('#', 'myflixer'); ?>" name="admin_monetize" id="admin_monetize"  value="<?php echo stripslashes_deep(get_option('admin_monetize')); ?>">
		</p>-->
		<p><input type="submit" name="update_options" value="<?php echo __('Save settings', 'myflixer'); ?>" class="admin-button admin-button-color-1"></p>
		</form>
	</div>
</div>

<?php get_template_part('admin/footer'); ?>