<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="body">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myflixer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<div class="wrapper">
		<?php get_template_part( 'template-parts/header/header', 'content' ); ?>
		<main>
