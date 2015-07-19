<?php
/**
 * This file adds the Landing template.
 *
 * @author StudioPress
 * @package Enterprise Pro
 * @subpackage Customizations
 */

/*
Template Name: Landing
*/

// Add custom body class to the head
add_filter( 'body_class', 'custom_add_body_class' );

function custom_add_body_class( $classes ) {
   $classes[] = 'landing';
   return $classes;

}

// Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Remove site header elements
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header', 10 );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// Remove navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_footer', 'genesis_do_subnav', 7 );

// Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove sub-footer widgets
remove_action( 'genesis_before_footer', 'outreach_sub_footer', 5 );

// Remove site footer widgets
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

// Remove site footer elements
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Run the Genesis loop
genesis();
