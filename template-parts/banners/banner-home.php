<?php
/**
 * Displays sponsors
 *
 * @package myflixer
 */

$myflixer_sponsor = get_option('admin_sponsor');
$color_style = get_option('admin_color_style');
if ($color_style == 'green') { 
$color = '2d323e';
} elseif ($color_style == 'blue') { 
$color = '2e7bcf';
} elseif ($color_style == 'black') { 
$color = '626060';
} elseif ($color_style == 'red') { 
$color = 'e50914';
} elseif ($color_style == 'purple') { 
$color = '5a2e98';
} elseif ($color_style == 'cherry') { 
$color = 'e1216d';
} elseif ($color_style == 'pink') { 
$color = 'e83e8c';
} elseif ($color_style == 'yellow') { 
$color = 'fcc409';
} elseif ($color_style == 'orange') { 
$color = 'fd7e14';
} elseif ($color_style == 'light') { 
$color = '3e8afa';
}else {
$color = '2d323e';
}
?>

<?php if ($myflixer_sponsor == 1) {  ?>
	<div class="mb-3 text-center">
		<script>
				(function () {
					if (Math.floor(Math.random() * 100) % 2) {
						var img = window.innerWidth <= 480 ? '<img src="https://placehold.jp/35/<?php echo $color; ?>/e9ecef/600x200.png?text=<?php echo button1; ?>" style="max-width: 100%;" />' : '<img src="https://placehold.jp/35/<?php echo $color; ?>/e9ecef/1920x120.png?text=<?php echo button1; ?>" style="max-width: 100%;" />';
						document.write('<a href="<?php echo sponsor1; ?>" target="_blank">' + img + "</a>");
						} else {
						var img = window.innerWidth <= 480 ? '<img src="https://placehold.jp/35/<?php echo $color; ?>/e9ecef/640x200.png?text=<?php echo button1; ?>" style="max-width: 100%;" />' : '<img src="https://placehold.jp/35/<?php echo $color; ?>/e9ecef/1920x120.png?text=<?php echo button1; ?>" style="max-width: 100%" />';
						document.write('<a href="<?php echo sponsor2; ?>" target="_blank">' + img + "</a>");
											}
				})();
			</script>
	</div>
<?php } ?>