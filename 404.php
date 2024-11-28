<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package myflixer
 */

get_header();
?>
<style>
.error {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.error>h1 {
    font-size: 10rem;
    font-weight: 500;
    line-height: 8rem;
    color: #e9ecef;
}
.error {
    text-align: center;
}
</style>
<div class="error">
    <h1 class="mb-2"><?php echo esc_html__( '404', 'myflixer' ); ?></h1> 
    <span class="text-muted text-center"><?php echo esc_html__( 'Page not found.', 'myflixer' ); ?></span>
    <div> 
        <a class="btn-gardient btn btn-lg px-4 mt-3" href="<?php echo esc_url( home_url( '/home' ) ); ?>"><?php echo esc_html__( 'Back to home page', 'myflixer' ); ?></a>
    </div>
</div>
<?php get_footer(); ?>