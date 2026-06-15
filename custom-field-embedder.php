<?php

/**
 * Plugin Name: Custom Field Embedder
 * Plugin URI: https://johndalesandro.com/projects/custom-field-embedder/
 * Description: Custom Field Embedder provides the capability to embed custom field values into pages and posts through a simple shortcode.
 * Version: 1.0.2
 * Author: John Dalesandro
 * Author URI: https://johndalesandro.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: custom-field-embedder
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'CUSTOM_FIELD_EMBEDDER_FILE' ) ) {
    define( 'CUSTOM_FIELD_EMBEDDER_FILE', __FILE__ );
}

if ( ! class_exists( 'Custom_Field_Embedder' ) ) {
    require_once trailingslashit( dirname( CUSTOM_FIELD_EMBEDDER_FILE ) ) . 'classes/class-custom-field-embedder.php';
}
