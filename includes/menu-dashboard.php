<?php
// Menu Entries

// Load the General Options page
    function hestia_brand_options_page() {
      require_once( dirname( __FILE__ ) . '/../codicil/dashboard/general-settings.php' );
    }
// Load the Zip Codes Options page
    function hestia_zip_codes_page() {
      require_once( dirname( __FILE__ ) . '/../codicil/dashboard/zip-codes.php' );
    }
// Load the 404 Messages options page
    function hestia_404_messages_page() {
      require_once( dirname( __FILE__ ) . '/../codicil/dashboard/error-pages.php');
    }
// Adds the menu pages
// Main Page
function hestia_add_menu_pages() {
  add_menu_page(
    'BxB Conditional Pull Settings',
    'BxB Condtional Product View',
    'manage_options',
    'hestia-settings',
    'hestia_brand_options_page'
  );
// General Settings Page
  add_submenu_page(
    'hestia-settings',
    'General Settings',
    'General Settings',
    'manage_options',
    'hestia-settings',
    'hestia_brand_options_page'
  );
//  Zip Codes Page
    add_submenu_page(
      'hestia-settings',
      'Zip Codes',
      'Zip Codes',
      'manage_options',
      'hestia-zip-code-options',
      'hestia_zip_codes_page'
    );
// Custom Error Messgages Page
    add_submenu_page(
      'hestia-settings',
      '404 Messages',
      '404 Messages',
      'manage_options',
      'hestia-404-messages-options',
      'hestia_404_messages_page'
    );
  }
  // Adds Menu Entries to WP Dashboard
    add_action( 'admin_menu', 'hestia_add_menu_pages' );
  
  // Saves entries into WP Database
    function hestia_settings_init() {
        register_setting( 'hestia-settings', 'hestia-default-brand' ); // Add a new setting for the default brand
    }
  // Initializes the Menu in WP Dashboard
    add_action( 'admin_init', 'hestia_settings_init' );
  
  // Retrieves Settings For Usage
    $hestia_setting_1 = get_option( 'hestia-default-brand' );
    ?>
