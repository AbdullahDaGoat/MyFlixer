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
		<h2><?php echo __('General', 'myflixer'); ?></h2>
	</div>
	<div class="admin-box">
		<form action="" method="post" enctype="multipart/form-data">
		<p>
			<label for="admin_license"><?php echo __('License', 'myflixer'); ?> &nbsp;<span class="flashit valid">&#9679;</span></label>
			<span class="helptext"><?php echo __('Domain:', 'myflixer'); ?> <?php echo urlToDomain(home_url()); ?>
			<!--<br><?php echo __('Customer: ', 'myflixer'); ?><?php echo strrev(client); ?>-->
			<br><?php echo __('The license appears to be valid.<br>*You cannot share or sell this product and license, if you do, your license will be deactivated.', 'myflixer'); ?>
			</span>
			<input type="text" placeholder="<?php echo FMOVIES_LICENSE; ?>" name="admin_license" id="admin_license" value="<?php echo FMOVIES_LICENSE; ?>" readonly>
		</p>
		<p>
			<label for="admin_apikey"><?php echo __('API Key', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter TMDB API key, you can get it', 'myflixer'); ?>&nbsp;<a href="<?php echo esc_url( __( 'https://anon.to/?https://developers.themoviedb.org/3/getting-started/introduction', 'myflixer' ) ); ?>" target="_blank" rel="nofollow"><?php printf( __( 'here %s', 'myflixer' ),''); ?></a><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('7ac6de5ca5060c7504e05da7b218a30c', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('7ac6de5ca5060c7504e05da7b218a30c', 'myflixer'); ?>" name="admin_apikey" id="admin_apikey"  value="<?php echo stripslashes_deep(get_option('admin_apikey')); ?>">
		</p>
		<p>
			<label for="admin_apilanguage"><?php echo __('API Language', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter language for API, read more', 'myflixer'); ?>&nbsp;<a href="<?php echo esc_url( __( 'https://anon.to/?https://developers.themoviedb.org/3/getting-started/languages', 'myflixer' ) ); ?>" target="_blank" rel="nofollow"><?php printf( __( 'here %s', 'myflixer' ),''); ?></a><br><?php echo __('en-US, fr-FR, es-ES, it-IT, de-DE, pt-PT, pt-BR, nl-NL', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('en-US', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('en-US', 'myflixer'); ?>" name="admin_apilanguage" id="admin_apilanguage"  value="<?php echo stripslashes_deep(get_option('admin_apilanguage')); ?>">
		</p>
		<p><input type="submit" name="update_options" value="<?php echo __('Save settings', 'myflixer'); ?>" class="admin-button admin-button-color-1"></p>
		</form>
	</div>
</div>
<?php get_template_part('admin/footer'); ?>