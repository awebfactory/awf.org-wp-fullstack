<?php
/**
 * Plugin Name:       Awf Content Model
 * Description:       Add content model for this application based on CPTs optionally having custom post meta fields
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            AWebFactory
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       awf-content-types
 *
 * @package           awebfactory
 */

function awebfactory_content_model() {
  register_post_type(
    'project',
    array(
      'labels'       => array(
        'name'          => __( 'Projects', 'tutorial' ),
        'singular_name' => __( 'Project', 'tutorial' ),
      ),
      'public'       => true,
			'menu_icon'    => 'dashicons-schedule',
      'has_archive'  => true,
      'rewrite' => array('slug' => 'projects'), // Set desired slug
      'show_in_rest' => true,
      'supports'     => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
      ),
    )
  );

  $metafields = [ 'awebfactory_project_short_name', 'awebfactory_project_description', 'awebfactory_project_start_date', 'awebfactory_project_completion_date' ];

  foreach( $metafields as $metafield ){
    // Pass an empty string to register the meta key across all existing post types.
    register_post_meta( '', $metafield, array(
      'show_in_rest' => true,
      'type' => 'string',
      'single' => true,
      'sanitize_callback' => 'wp_kses_post',
      'auth_callback' => function() { 
        return current_user_can( 'edit_posts' );
      }
    ));
  }
}

add_action('init', 'awebfactory_content_model');