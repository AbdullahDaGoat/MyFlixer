<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package myflixer
 *
 */

// cat movies
$category_movies = get_cat_ID( 'Movies' ); 
$category_link_movies = get_category_link( $category_movies );

?>

<div id="search" class="d-flex justify-content-center mt-4 mb-4">
	<div id="search-wrapper">
		<form id="autosearch" class="d-flex align-items-center" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="form" autocomplete="off"> 
			<a class="filter-btn btn btn-sm" href="<?php echo esc_url( home_url( '/filters/' ) ); ?>" role="button" aria-label="<?php echo textfilter; ?>"><i class="uil uil-filter"></i> <?php echo textfilter; ?></a> 
			<input aria-label="<?php echo search; ?>" name="s" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php echo search; ?>" name="s" required> 
			<button type="submit" aria-label="Submit"><span class="sr-only"><?php echo esc_html__( 'Submit', 'myflixer' ) ?></span>
			<i class="uil uil-search"></i></button>
		</form>
		<div class="search-suggest suggestions"></div>
	</div>
</div>

