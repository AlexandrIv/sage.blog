<?php

/**
 * Plugin Name: WooCommerce Ajax add to cart
 * Plugin URI: https://quadmenu.com/add-to-cart-with-woocommerce-and-ajax-step-by-step/
 * Description: Ajax add to cart for WooCommerce Single products
 * Version: 1.0.2
 * Author: WooCommerce Ajax add to cart
 * Author URI: http://www.quadmenu.com
 */
if (!defined('ABSPATH')) {
    die('-1');
}

if (!class_exists('WooCommerce_Ajax_add_to_cart')) :

    class WooCommerce_Ajax_add_to_cart {

        function __construct() {
            add_action('wp_enqueue_scripts', array($this, 'enqueue'), 99);
            add_action('wp_ajax_woocommerce_ajax_add_to_cart', array($this, 'ajax_add_to_cart'));
            add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', array($this, 'ajax_add_to_cart'));
        }

        function enqueue() {
            if (function_exists('is_product') && is_product()) {
                wp_enqueue_script('woocommerce-ajax-add-to-cart', plugin_dir_url(__FILE__) . 'assets/ajax-add-to-cart.js', array('jquery'), '', true);
            }
        }

        function ajax_add_to_cart() {

            $product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
            $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
            $variation_id = absint($_POST['variation_id']);
            $passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
            $product_status = get_post_status($product_id);

            if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {

                do_action('woocommerce_ajax_added_to_cart', $product_id);

                if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
                    wc_add_to_cart_message(array($product_id => $quantity), true);
                }

                WC_AJAX :: get_refreshed_fragments();
            } else {

                $data = array(
                    'error' => true,
                    'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));

                echo wp_send_json($data);
            }

            wp_die();
        }

    }

    new WooCommerce_Ajax_add_to_cart();

    endif; // End if class_exists check
