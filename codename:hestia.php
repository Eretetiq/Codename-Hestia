<?php
/**
 * Plugin Name
 *
 * @package           Shortcode
 * @author            Blackwood
 * @copyright         BxBMedia
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Hestia: BxB Product Pull
 * Plugin URI:        https://github.com/badwolfvi/blackwood-a24-plugin
 * Description:       The plugin enables an HVAC website to pull products from a custom post type called "hvac-product" in WordPress, based on certain parameters such as product type, manufacturer, rating and price tier. 
 * Version:           25.0.10
 * Version Name:      Acheron
 * Requires at least: 5.7.28
 * Requires PHP:      6.1.9
 * Author:            Blackwood
 * Author URI:        https://bxbmedia.com
 * Text Domain:       Codename:Hestia
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
//Just for security measures
 if ( ! defined( 'ABSPATH' ) ) {
    die;
  }
  function hestia_enqueue_styles_and_scripts() {
    //CSS
    wp_enqueue_style( 'on-site-grid-styles', plugin_dir_url( __FILE__ ) . 'assets/css/on-site-grid.css' );
    wp_enqueue_style( 'snippet-grid-styles', plugin_dir_url( __FILE__ ) . 'assets/css/snippet-grid.css' );
    wp_enqueue_style( 'sac-styles', plugin_dir_url( __FILE__ ) . 'assets/css/sac.css' );
    //JavaScripts
    wp_enqueue_script( 'custom-column-select', plugin_dir_url( __FILE__ ) . '/assets/js/custom-column-select.js', array(), '1.0', true );
    wp_enqueue_script( 'button-overide', plugin_dir_url( __FILE__ ) . '/assets/js/button-overide.js', array(), '1.0', true );
    wp_enqueue_script( 'ajax-script', admin_url( 'admin-ajax.php' ), array( 'jquery' ) );
  }
add_action( 'wp_enqueue_scripts', 'hestia_enqueue_styles_and_scripts' );

// Main Function File
require_once( plugin_dir_path( __FILE__ ) . 'includes/display-products.php' );

// Main Function Modulized
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/default-brand.php' );
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/default-attributes.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/get-url-values.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/override-attributes.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/query-arguments.php');
require_once( plugin_dir_path( __FILE__ ) . 'codicil/display-products/product-query.php');

// Dashboard
require_once( plugin_dir_path( __FILE__ ) . 'dashboard/menu/dashboard.php' );

// Service Area Check
require_once( plugin_dir_path( __FILE__ ) . 'codicil/sac/sac-check.php' );
require_once( plugin_dir_path( __FILE__ ) . 'codicil/sac/sac-check-manual.php' );

add_shortcode('display-products', 'display_products');
add_shortcode( 'sac-check', 'sac_check' );
//add_shortcode( 'sac-check-manual', 'sac_check_manual' );

