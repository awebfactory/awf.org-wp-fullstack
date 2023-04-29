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
  register_post_type(
    'conversation',
    array(
      'labels'       => array(
        'name'          => __( 'Conversations', 'tutorial' ),
        'singular_name' => __( 'Conversation', 'tutorial' ),
      ),
      'public'       => true,
			'menu_icon'    => 'dashicons-format-chat',
      'has_archive'  => true,
      'rewrite' => array('slug' => 'conversations'), // Set desired slug
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
  /* See [How to Add Tags to Custom Post Type?](https://wordpress.stackexchange.com/questions/62260/how-to-add-tags-to-custom-post-type) */
  register_taxonomy('tag','conversation',array(
    'hierarchical' => false,
    'labels' => array(
      'name' => _x( 'Tags', 'taxonomy general name' ),
      'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Tags' ),
      'popular_items' => __( 'Popular Tags' ),
      'all_items' => __( 'All Tags' ),
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => __( 'Edit Tag' ), 
      'update_item' => __( 'Update Tag' ),
      'add_new_item' => __( 'Add New Tag' ),
      'new_item_name' => __( 'New Tag Name' ),
      'separate_items_with_commas' => __( 'Separate tags with commas' ),
      'add_or_remove_items' => __( 'Add or remove tags' ),
      'choose_from_most_used' => __( 'Choose from the most used tags' ),
      'menu_name' => __( 'Tags' )
    ),
    'show_ui' => true,
    'show_in_rest' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}

add_action('init', 'awebfactory_content_model');