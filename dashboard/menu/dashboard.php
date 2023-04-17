<?php
// Menu Entries

  // Load the Brand Options page
  function hestia_brand_options_page() {
    include('general-settings.php');
  }

    // Load the Brand Options page
    function hestia_zip_codes_page() {
      include('zip-codes.php');
    }

        // Load the 404 Messages options page
        function hestia_404_messages_page() {
          include('error-pages.php');
        }
  
  // Adds the menu pages
  function hestia_add_menu_pages() {
    add_menu_page(
      'BxB Conditional Pull Settings',
      'Hestia Settings',
      'manage_options',
      'hestia-settings',
      'hestia_brand_options_page'
    );

    add_submenu_page(
      'hestia-settings',
      'Zip Codes',
      'Zip Codes',
      'manage_options',
      'hestia-zip-code-options',
      'hestia_zip_codes_page'
    );

    add_submenu_page(
      'hestia-settings',
      '404 Messages',
      '404 Messages',
      'manage_options',
      'hestia-404-messages-options',
      'hestia_404_messages_page'
    );
  }
  
  add_action( 'admin_menu', 'hestia_add_menu_pages' );
  
  // Saves entries into WP Database
  function hestia_settings_init() {
      register_setting( 'hestia-settings', 'hestia-default-brand' ); // Add a new setting for the default brand
  }
  
  add_action( 'admin_init', 'hestia_settings_init' );
  
  // Retrieves Settings For Usage
  $hestia_setting_1 = get_option( 'hestia-default-brand' );
  ?>
