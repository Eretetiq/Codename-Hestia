<?php
/**
 * Plugin Name
 *
 * @package           Shortcode
 * @author            SABlackwood
 * @copyright         BxBMedia
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       BxB - Product Selector
 * Plugin URI:        https://github.com/SABlackWood/Codename-Hestia
 * Development Link:  https://github.com/SABlackWood/Codename-Hestia/tree/Acheron
 * Description:       The plugin enables an HVAC website to pull products from a custom post type called "hvac-product" in WordPress, based on certain parameters such as product type, manufacturer, rating and price tier. 
 * Version:           25.1.14
 * Version Name:      Acheron
 * Requires at least: 5.7.28
 * Requires PHP:      6.1.9
 * Author:            SABlackwood
 * Author URI:        https://bxbmedia.com
 * Text Domain:       Codename:Hestia
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Codename:          Hestia
 * Dependencies:      WP Import Export, WP Cost Estimation & Payment Builder, ACF Pro
 */
//Just for security measures
 if ( ! defined( 'ABSPATH' ) ) {
    die;
  }
  function hestia_enqueue_styles_and_scripts() {
    //CSS
    wp_enqueue_style( 'display-products-styles', plugin_dir_url( __FILE__ ) . 'assets/css/display-products.css' );
    wp_enqueue_style( '404-styles', plugin_dir_url( __FILE__ ) . 'assets/css/404.css' );
    wp_enqueue_style( 'custum-messages', plugin_dir_url( __FILE__ ) . 'assets/css/custom-messages.css' );
    //JavaScripts
    wp_enqueue_script( 'custom-column-select', plugin_dir_url( __FILE__ ) . '/assets/js/custom-column-select.js', array(), '1.0', true );
    wp_enqueue_script( 'button-overide', plugin_dir_url( __FILE__ ) . '/assets/js/button-overide.js', array(), '1.0', true );
    //PHP
    wp_enqueue_script( 'ajax-script', admin_url( 'admin-ajax.php' ), array( 'jquery' ) );
  }
add_action( 'wp_enqueue_scripts', 'hestia_enqueue_styles_and_scripts' );
// Main Function File
require_once( plugin_dir_path( __FILE__ ) . 'includes/display-products.php' );
// Main Function Moduless
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/default-brand.php' );
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/default-attributes.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/get-url-values.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/override-attributes.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/query-arguments.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/product-query.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/display-404-error.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/display-selection-text.php');

// Dashboard Function Files
require_once( plugin_dir_path( __FILE__ ) . 'includes/menu-dashboard.php' );
// Dashboard Module Files
require_once( plugin_dir_path( __FILE__ ) . 'codicil/dashboard-modules/sac/sac-check.php' );
require_once( plugin_dir_path( __FILE__ ) . 'codicil/dashboard-modules/general-settings/brand-selection.php' );
// Shortcodes
add_shortcode('display-products', 'display_products'); // Main Function
add_shortcode( 'sac-check', 'sac_check' ); // Service Area Codes