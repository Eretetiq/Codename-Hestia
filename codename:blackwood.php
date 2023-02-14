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
 * Plugin Name:       Blackwood BxB Product Pull
 * Plugin URI:        https://github.com/badwolfvi/blackwood-a24-plugin
 * Description:       The plugin enables an HVAC website to pull products from a custom post type called "hvac-product" in WordPress, based on certain parameters such as product type, manufacturer, rating and price tier. 
 * Version:           15.0.4
 * Requires at least: 5.7.28
 * Requires PHP:      6.1.9
 * Author:            Blackwood
 * Author URI:        https://bxbmedia.com
 * Text Domain:       blackwood-a24
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
//Just for security measures
 if ( ! defined( 'ABSPATH' ) ) {
    die;
  }
  function hestia_enqueue_styles_and_scripts() {
    wp_enqueue_style( 'general-grid-styles', plugin_dir_url( __FILE__ ) . 'assets/css/general-grid.css' );
    wp_enqueue_style( 'plugin-grid-styles', plugin_dir_url( __FILE__ ) . 'assets/css/wip-grid.css' );
    wp_enqueue_script( 'custom-column-select', plugin_dir_url( __FILE__ ) . '/assets/js/custom-column-select.js', array(), '1.0', true );
   
  }
  add_action( 'wp_enqueue_scripts', 'hestia_enqueue_styles_and_scripts' );

require_once( 'display-split-products.php' );
require_once( 'display-furnace-products.php' );
require_once( 'display-package-products.php' );

add_shortcode('display-furnace-products', 'display_furnace_products');
add_shortcode('display-split-products', 'display_split_products');
add_shortcode('display-package-products', 'display_package_products');


//[display-furnace-products rating='80' tier='1'] - Furnace Metal Tiers 1-6
//[display-furnace-products rating='90' tier='1'] - Furnace PVC Tiers 1-6
//[display-split-products rating='80' tier='1'] - Split Metal Tiers 1-6
//[display-split-products rating='90' tier='1'] - Split PVC Tiers 1-6
//[display-package-products source='Gas Electric' tier='1'] - Packaged Natural Gas Tiers 1-6
//[display-package-products source='Heat Pump' tier='1'] - Packaged Electric Tiers 1-6
 