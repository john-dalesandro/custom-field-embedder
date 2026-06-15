<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Custom_Field_Embedder' ) ) {
    class Custom_Field_Embedder {
        public function __construct() {
            add_action( 'plugins_loaded', array( $this, 'load_textdomain_handler' ) );
            add_shortcode( 'custom_field_embedder', array( $this, 'shortcode' ) );
        }

        public function load_textdomain_handler() {
            load_plugin_textdomain( 'custom-field-embedder', false, trailingslashit( dirname( plugin_basename( CUSTOM_FIELD_EMBEDDER_FILE ) ) ) . 'languages/' );
        }

        public function shortcode( $atts = array() ) {
            $custom_field_value = '';

            $atts = wp_parse_args(
                array_change_key_case( (array) $atts, CASE_LOWER ),
                array( 'custom_field_name' => '' )
            );

            $custom_field_name = $atts['custom_field_name'];
            $post_id           = get_the_ID();

            if ( $custom_field_name && $post_id ) {
                $custom_field_value = get_post_meta( $post_id, $custom_field_name, true );
            }

            return $custom_field_value;
        }
    }
}

if ( class_exists( 'Custom_Field_Embedder' ) ) {
    $custom_field_embedder = new Custom_Field_Embedder();
}
