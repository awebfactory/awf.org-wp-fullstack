<?php
/**
 * Plugin Name:       Awf Content Model Blocks
 * Description:       Custom blocks for editing and rendering in varioius ways a CPT and its fields stored as post meta.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            AWebFactory
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       awf-content-model-blocks
 *
 * @package           awebfactory
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function awebfactory_awf_content_model_blocks_block_init() {
  register_block_type( __DIR__ . '/build/blocks/meta-fields-editor' );
  register_block_type( __DIR__ . '/build/blocks/render-single-meta-field' );
}
add_action( 'init', 'awebfactory_awf_content_model_blocks_block_init' );
