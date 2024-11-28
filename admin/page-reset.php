<?php

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_template_part('admin/header'); ?>

<div class="admin-column">
	<?php if (isset($_POST["update_options"])) { ?>
		<?php admin_options('update_option'); ?>
		<div class="admin-box admin-updated"><?php echo __('The Reset complete successfully', 'myflixer'); ?></div>		
	<?php } ?>
	<div class="admin-box">
		<h2><?php echo __('Reset', 'myflixer'); ?></h2>
	</div>
	<div class="admin-box">
		<form action="" method="post" enctype="multipart/form-data">
		<h3><?php echo __('Reset myflixer', 'myflixer'); ?></h3>
		<p><?php echo __('Restore theme options to default settings', 'myflixer'); ?></p>
		<hr>
		<p><input type="submit" name="update_options" value="<?php echo __('Reset settings', 'myflixer'); ?>" class="admin-button admin-button-color-1" onclick="answer = window.confirm('<?php echo __('Are you sure you want to reset all settings to the default values?', 'myflixer'); ?>'); return answer;"></p>
		</form>
	</div>
</div>

<?php get_template_part('admin/footer'); ?>