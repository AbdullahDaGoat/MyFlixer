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
		<h2><?php echo __('Translate', 'myflixer'); ?></h2>
	</div>
	<div class="admin-box">
		<form action="" method="post" enctype="multipart/form-data">
		<p>
			<label for="admin_textlatest"><?php echo __('Enter text for Latest', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Latest', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Latest', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Latest', 'myflixer'); ?>" name="admin_textlatest" id="admin_textlatest" value="<?php echo stripslashes_deep(get_option('admin_textlatest')); ?>">
		</p>
		<p>
			<label for="admin_txtrecently_updated"><?php echo __('Enter text for Recently Updated', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Recently Updated', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Recently Updated', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Recently Updated', 'myflixer'); ?>" name="admin_txtrecently_updated" id="admin_txtrecently_updated" value="<?php echo stripslashes_deep(get_option('admin_txtrecently_updated')); ?>">
		</p>
		<p>
			<label for="admin_textfilter"><?php echo __('Enter text for Filter', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Filter', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Filter', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Filter', 'myflixer'); ?>" name="admin_textfilter" id="admin_textfilter" value="<?php echo stripslashes_deep(get_option('admin_textfilter')); ?>">
		</p>
		<p>
			<label for="admin_textviewall"><?php echo __('Enter text for View more', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify View more', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('View more', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('View more', 'myflixer'); ?>" name="admin_textviewall" id="admin_textviewall" value="<?php echo stripslashes_deep(get_option('admin_textviewall')); ?>">
		</p>
		<p>
			<label for="admin_recommended"><?php echo __('Enter text for Recommended', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Recommended.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Recommended', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Recommended', 'myflixer'); ?>" name="admin_recommended" id="admin_recommended"  value="<?php echo stripslashes_deep(get_option('admin_recommended')); ?>">
		</p>
		<p>
			<label for="admin_txttrending"><?php echo __('Enter text for Trending', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Trending Now', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Trending Now', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Trending Now', 'myflixer'); ?>" name="admin_txttrending" id="admin_txttrending"  value="<?php echo stripslashes_deep(get_option('admin_txttrending')); ?>">
		</p>
		<p>
			<label for="admin_trending"><?php echo __('Enter text for Most Watched', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Most Watched.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Most Watched', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Most Watched', 'myflixer'); ?>" name="admin_trending" id="admin_trending"  value="<?php echo stripslashes_deep(get_option('admin_trending')); ?>">
		</p>
		<p>
			<label for="admin_txtmovies"><?php echo __('Enter text for Movies', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Movies on sidebar.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Movies', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Movies', 'myflixer'); ?>" name="admin_txtmovies" id="admin_txtmovies" value="<?php echo stripslashes_deep(get_option('admin_txtmovies')); ?>">
		</p>
		<p>
			<label for="admin_txtmoviesmini"><?php echo __('Enter text for Movie', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Movies.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Movie', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Movie', 'myflixer'); ?>" name="admin_txtmoviesmini" id="admin_txtmoviesmini" value="<?php echo stripslashes_deep(get_option('admin_txtmovies')); ?>">
		</p>
		<p>
			<label for="admin_tvseries"><?php echo __('Enter text for TV Series', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify TV Series.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('TV Series', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('TV Series', 'myflixer'); ?>" name="admin_tvseries" id="admin_tvseries" value="<?php echo stripslashes_deep(get_option('admin_tvseries')); ?>">
		</p>
		<p>
			<label for="admin_tvseriesmini"><?php echo __('Enter text for TV', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify TV.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('TV', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('TV', 'myflixer'); ?>" name="admin_tvseriesmini" id="admin_tvseriesmini" value="<?php echo stripslashes_deep(get_option('admin_tvseriesmini')); ?>">
		</p>
		<!--<p>
			<label for="admin_intheaters"><?php echo __('Enter text for In Theaters', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for In Theaters category on sidebar.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('In Theaters', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('In Theaters', 'myflixer'); ?>" name="admin_intheaters" id="admin_intheaters" value="<?php echo stripslashes_deep(get_option('admin_intheaters')); ?>">
		</p>-->
		<p>
			<label for="admin_top"><?php echo __('Enter text for Top IMDb', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Top IMDb page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Top IMDb', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Top IMDb', 'myflixer'); ?>" name="admin_top" id="admin_top" value="<?php echo stripslashes_deep(get_option('admin_top')); ?>">
		</p>
		<!--<p>
			<label for="admin_random"><?php echo __('Enter text for Random', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Random page on sidebar.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Random', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Random', 'myflixer'); ?>" name="admin_random" id="admin_random" value="<?php echo stripslashes_deep(get_option('admin_random')); ?>">
		</p>-->
		<p>
			<label for="admin_genre"><?php echo __('Enter text for Genre', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Genre.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Genre', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Genre', 'myflixer'); ?>" name="admin_genre" id="admin_genre" value="<?php echo stripslashes_deep(get_option('admin_genre')); ?>">
		</p>
		<p>
			<label for="admin_txtquality"><?php echo __('Enter text for Quality', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Quality.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Quality.', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Quality.', 'myflixer'); ?>" name="admin_txtquality" id="admin_txtquality"  value="<?php echo stripslashes_deep(get_option('admin_txtquality')); ?>">
		</p>
		<p>
			<label for="admin_year"><?php echo __('Enter text for Year', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Year.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Year', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Year', 'myflixer'); ?>" name="admin_year" id="admin_year" value="<?php echo stripslashes_deep(get_option('admin_year')); ?>">
		</p>
		<p>
			<label for="admin_country"><?php echo __('Enter text for Country', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Country.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Country', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Country', 'myflixer'); ?>" name="admin_country" id="admin_country"  value="<?php echo stripslashes_deep(get_option('admin_country')); ?>">
		</p>
		<p>
			<label for="admin_search"><?php echo __('Enter text for Search', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for search on menù dropdown.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Search...', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Search...', 'myflixer'); ?>" name="admin_search" id="admin_search"  value="<?php echo stripslashes_deep(get_option('admin_search')); ?>">
		</p>
		<p>
			<label for="admin_network"><?php echo __('Enter text for Network', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for network on tv show page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Network', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Network', 'myflixer'); ?>" name="admin_network" id="admin_network"  value="<?php echo stripslashes_deep(get_option('admin_network')); ?>">
		</p>
		<p>
			<label for="admin_creator"><?php echo __('Enter text for Creator', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Creator on tv show page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Creator', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Creator', 'myflixer'); ?>" name="admin_creator" id="admin_creator"  value="<?php echo stripslashes_deep(get_option('admin_creator')); ?>">
		</p>
		<p>
			<label for="admin_stars"><?php echo __('Enter text for Stars', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for stars on tv show page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Stars', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Stars', 'myflixer'); ?>" name="admin_stars" id="admin_stars"  value="<?php echo stripslashes_deep(get_option('admin_stars')); ?>">
		</p>
		<p>
			<label for="admin_season"><?php echo __('Enter text for Season', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Season on tv show page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Season', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Season', 'myflixer'); ?>" name="admin_season" id="admin_season" value="<?php echo stripslashes_deep(get_option('admin_season')); ?>">
		</p>
		<p>
			<label for="admin_seasons"><?php echo __('Enter text for Seasons', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Seasons on tv show page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Seasons', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Seasons', 'myflixer'); ?>" name="admin_seasons" id="admin_seasons" value="<?php echo stripslashes_deep(get_option('admin_seasons')); ?>">
		</p>
		<p>
			<label for="admin_episode"><?php echo __('Enter text for Episode', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Episode on tv show page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Episode', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Episode', 'myflixer'); ?>" name="admin_episode" id="admin_episode" value="<?php echo stripslashes_deep(get_option('admin_episode')); ?>">
		</p>
		<p>
			<label for="admin_episodes"><?php echo __('Enter text for Episodes', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Episodes on tv show page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Episodes', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Episodes', 'myflixer'); ?>" name="admin_episodes" id="admin_episodes" value="<?php echo stripslashes_deep(get_option('admin_episodes')); ?>">
		</p>
		<p>
			<label for="admin_director"><?php echo __('Enter text for Director', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Director on movies.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Director', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Director', 'myflixer'); ?>" name="admin_director" id="admin_director"  value="<?php echo stripslashes_deep(get_option('admin_director')); ?>">
		</p>
		<!--<p>
			<label for="admin_play"><?php echo __('Enter text for Play', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Play button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Play', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Play', 'myflixer'); ?>" name="admin_play" id="admin_play"  value="<?php echo stripslashes_deep(get_option('admin_play')); ?>">
		</p>-->
		<p>
			<label for="admin_share"><?php echo __('Enter text for Share', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Share button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Share', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Share', 'myflixer'); ?>" name="admin_share" id="admin_share"  value="<?php echo stripslashes_deep(get_option('admin_share')); ?>">
		</p>
		<p>
			<label for="admin_txtreport"><?php echo __('Enter text for Report', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Report button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Report', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Report', 'myflixer'); ?>" name="admin_txtreport" id="admin_txtreport"  value="<?php echo stripslashes_deep(get_option('admin_txtreport')); ?>">
		</p>
		<p>
			<label for="admin_trailer"><?php echo __('Enter text for Trailer', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Trailer.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Trailer', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Trailer', 'myflixer'); ?>" name="admin_trailer" id="admin_trailer"  value="<?php echo stripslashes_deep(get_option('admin_trailer')); ?>">
		</p>
		<p>
			<label for="admin_txtlight"><?php echo __('Enter text for Toggle light', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Toggle light button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Light', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Light', 'myflixer'); ?>" name="admin_txtlight" id="admin_txtlight"  value="<?php echo stripslashes_deep(get_option('admin_txtlight')); ?>">
		</p>
		<!--<p>
			<label for="admin_download"><?php echo __('Enter text for Download', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify download button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Download', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Download', 'myflixer'); ?>" name="admin_download" id="admin_download" value="<?php echo stripslashes_deep(get_option('admin_download')); ?>">
		</p>-->
		<p>
			<label for="admin_watch"><?php echo __('Enter text for Watch Now', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Watch Now Button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Watch Now', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Watch Now', 'myflixer'); ?>" name="admin_watch" id="admin_watch" value="<?php echo stripslashes_deep(get_option('admin_watch')); ?>">
		</p>
		<p>
			<label for="admin_advertise"><?php echo __('Enter text for Advertise', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Advertise Here banner', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('ADVERTISE HERE', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('ADVERTISE HERE', 'myflixer'); ?>" name="admin_advertise" id="admin_advertise"  value="<?php echo stripslashes_deep(get_option('admin_advertise')); ?>">
		</p>
		<!--<p>
			<label for="admin_textmultiserver"><?php echo __('Enter text for Multi Server', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Multi Server module.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Multi Server', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Multi Server', 'myflixer'); ?>" name="admin_textmultiserver" id="admin_textmultiserver"  value="<?php echo stripslashes_deep(get_option('admin_textmultiserver')); ?>">
		</p>-->
		<p>
			<label for="admin_txtcomments"><?php echo __('Enter text for Comments', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Enter text for Comments.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Comments', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Comments', 'myflixer'); ?>" name="admin_txtcomments" id="admin_txtcomments"  value="<?php echo stripslashes_deep(get_option('admin_txtcomments')); ?>">
		</p>
		<!--<p>
			<label for="admin_recently"><?php echo __('Enter text for Sort by', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Sort by option on sortby module.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Sort by', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Sort by', 'myflixer'); ?>" name="admin_recently" id="admin_recently"  value="<?php echo stripslashes_deep(get_option('admin_recently')); ?>">
		</p>-->
		<p>
			<label for="admin_mostrated"><?php echo __('Enter text for Rating', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Rating.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Rating', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Rating', 'myflixer'); ?>" name="admin_mostrated" id="admin_mostrated"  value="<?php echo stripslashes_deep(get_option('admin_mostrated')); ?>">
		</p>
		<p>
			<label for="admin_mostwatched"><?php echo __('Enter text for Views', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Views.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Views', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Views', 'myflixer'); ?>" name="admin_mostwatched" id="admin_mostwatched"  value="<?php echo stripslashes_deep(get_option('admin_mostwatched')); ?>">
		</p>
		<p>
			<label for="admin_language"><?php echo __('Enter text for Language', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Language.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Language', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Language', 'myflixer'); ?>" name="admin_language" id="admin_language"  value="<?php echo stripslashes_deep(get_option('admin_language')); ?>">
		</p>
		<p>
			<label for="admin_releasedate"><?php echo __('Enter text for Date', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Date option on sortby module.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Date', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Date', 'myflixer'); ?>" name="admin_releasedate" id="admin_releasedate"  value="<?php echo stripslashes_deep(get_option('admin_releasedate')); ?>">
		</p>
		<p>
			<label for="admin_titleato"><?php echo __('Enter text for Title', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Title on sortby module.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Title', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Title', 'myflixer'); ?>" name="admin_titleato" id="admin_titleato"  value="<?php echo stripslashes_deep(get_option('admin_titleato')); ?>">
		</p>
		<!--<p>
			<label for="admin_fullbio"><?php echo __('Enter text for Full Bio in person page.', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Full Bio in person page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Full Bio', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Full Bio', 'myflixer'); ?>" name="admin_fullbio" id="admin_fullbio"  value="<?php echo stripslashes_deep(get_option('admin_fullbio')); ?>">
		</p>-->
		<!--<p>
			<label for="admin_nobio"><?php echo __('Enter text for "No bio available for" in person page.', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Full Bio in person page.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('No bio available for', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('No bio available for', 'myflixer'); ?>" name="admin_nobio" id="admin_nobio"  value="<?php echo stripslashes_deep(get_option('admin_nobio')); ?>">
		</p>-->
		<!--<p>
			<label for="admin_testolike"><?php echo __('Enter text for Like', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify text for Like button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Like', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Like', 'myflixer'); ?>" name="admin_testolike" id="admin_testolike"  value="<?php echo stripslashes_deep(get_option('admin_testolike')); ?>">
		</p>-->
		<p>
			<label for="admin_textfavorites"><?php echo __('Enter text for Favorites', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify text for Favorites.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Favorites', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Favorites', 'myflixer'); ?>" name="admin_textfavorites" id="admin_textfavorites"  value="<?php echo stripslashes_deep(get_option('admin_textfavorites')); ?>">
		</p>
		<p>
			<label for="admin_related"><?php echo __('Enter text for related post', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify text for Related.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('You may also like', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('You may also like', 'myflixer'); ?>" name="admin_related" id="admin_related"  value="<?php echo stripslashes_deep(get_option('admin_related')); ?>">
		</p>
		<!--<p>
			<label for="admin_txtnoletter"><?php echo __('Enter text for no letter', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify text for nothing matched letter.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Sorry, but nothing matched this letter.', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Sorry, but nothing matched this letter.', 'myflixer'); ?>" name="admin_txtnoletter" id="admin_txtnoletter"  value="<?php echo stripslashes_deep(get_option('admin_txtnoletter')); ?>">
		</p>-->
		<p>
			<label for="admin_textautoembed"><?php echo __('Enter text for servers note', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify servers note', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('If current server doesn\'t work please try other servers below.', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('If current server doesn\'t work please try other servers below.', 'myflixer'); ?>" name="admin_textautoembed" id="admin_textautoembed"  value="<?php echo stripslashes_deep(get_option('admin_textautoembed')); ?>">
		</p>
		<p>
			<label for="admin_btn_more"><?php echo __('Enter text for read more button on home description', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify text more small button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('more', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('more', 'myflixer'); ?>" name="admin_btn_more" id="admin_btn_more"  value="<?php echo stripslashes_deep(get_option('admin_btn_more')); ?>">
		</p>
		<p>
			<label for="admin_btn_less"><?php echo __('Enter text for less button on home description', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify text less small button.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('less', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('less', 'myflixer'); ?>" name="admin_btn_less" id="admin_btn_less"  value="<?php echo stripslashes_deep(get_option('admin_btn_less')); ?>">
		</p>
		<p>
			<label for="admin_txttopsearch"><?php echo __('Enter text for Top search', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Top search.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Top search:', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Top search:', 'myflixer'); ?>" name="admin_txttopsearch" id="admin_txttopsearch" value="<?php echo stripslashes_deep(get_option('admin_txttopsearch')); ?>">
		</p>
		<p>
			<label for="admin_txtof"><?php echo __('Enter text for of', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify of.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('of', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('of', 'myflixer'); ?>" name="admin_txtof" id="admin_txtof" value="<?php echo stripslashes_deep(get_option('admin_txtof')); ?>">
		</p>
		<p>
			<label for="admin_txtreviews"><?php echo __('Enter text for reviews', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify reviews.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('reviews', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('reviews', 'myflixer'); ?>" name="admin_txtreviews" id="admin_txtreviews" value="<?php echo stripslashes_deep(get_option('admin_txtreviews')); ?>">
		</p>
		<p>
			<label for="admin_txtgotohomepage"><?php echo __('Enter text for Go to Homepage', 'myflixer'); ?></label>
			<span class="helptext"><?php echo __('Text that identify Go to Homepage.', 'myflixer'); ?><br><?php echo __('Default:', 'myflixer'); ?> <?php echo __('Go to Homepage', 'myflixer'); ?></span>
			<input type="text" placeholder="<?php echo __('Go to Homepage', 'myflixer'); ?>" name="admin_txtgotohomepage" id="admin_txtgotohomepage" value="<?php echo stripslashes_deep(get_option('admin_txtgotohomepage')); ?>">
		</p>
		<p><input type="submit" name="update_options" value="<?php echo __('Save settings', 'myflixer'); ?>" class="admin-button admin-button-color-1"></p>
		</form>
	</div>
</div>

<?php get_template_part('admin/footer'); ?>