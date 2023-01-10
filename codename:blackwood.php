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
 * Plugin Name:       (Codename: Blackwood) BxB Product Pull
 * Plugin URI:        https://github.com/badwolfvi/blackwood-a24-plugin
 * Description:       The plugin enables an HVAC website to pull products from a custom post type called "hvac-product" in WordPress, based on certain parameters such as product type, manufacturer, rating and price tier. 
 * Version:           13.2.0
 * Requires at least: 5.7.28
 * Requires PHP:      8.1.9
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
  //Calls CSS and Java
  function hestia_enqueue_styles_and_scripts() {
    wp_enqueue_style( 'hestia-grid-styles', plugin_dir_url( __FILE__ ) . 'assets/css/grid.css' );
    wp_enqueue_script( 'custom-column-select', plugin_dir_url( __FILE__ ) . '/assets/js/custom-column-select.js', array(), '1.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'hestia_enqueue_styles_and_scripts' );
//
require_once( 'display-package-products.php' );
require_once( 'display-split-products.php' );
require_once( 'display-furnace-products.php' );
//
add_shortcode('display-furnace-products', 'display_furnace_products');
add_shortcode('display-package-products', 'display_package_products');
add_shortcode('display-split-products', 'display_split_products');