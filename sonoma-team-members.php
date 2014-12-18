<?php

/**
 *
 * @since             1.0.0
 * @package           Sonoma_Testimonials
 *
 * @wordpress-plugin
 * Plugin Name:       Sonoma Testimonials
 * Plugin URI:        https://github.com/sonomamade/testimonials
 * Description:       A plugin that adds a testimonial custom post type
 * Version:           1.0.0
 * Author:            Michael Silva
 * Author URI:        http://michaelsilva.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sonoma-testimonials
 * Domain Path:       /languages
 */

/**
 * Register Testimonial Post Type
 */
if ( ! function_exists('sonoma_testimonial_post_type') ) {

// Register Custom Post Type
function sonoma_testimonial_post_type() {

	$labels = array(
		'name'                => 'Testimonials',
		'singular_name'       => 'Testimonial',
		'menu_name'           => 'Testimonials',
		'parent_item_colon'   => 'Parent Testimonial:',
		'all_items'           => 'All Testimonials',
		'view_item'           => 'View Testimonial',
		'add_new_item'        => 'Add New Testimonial',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Testimonial',
		'update_item'         => 'Update Testimonial',
		'search_items'        => 'Search Testimonials',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'testimonial',
		'description'         => 'A custom post type to enter and organize your client testimonials',
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-quote',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'testimonial', $args );

}

// Hook into the 'init' action
add_action( 'init', 'sonoma_testimonial_post_type', 0 );

}