<?php
// Menu Entries
add_action( 'admin_menu', 'my_plugin_menu' );
function my_plugin_menu() {
    add_menu_page( 
        'BxB Conditional Pull', // page title
        'BxB Conditional Pull', // menu title
        'manage_options', // capability required to access the page
        'my-plugin-settings', 
        'my_plugin_settings_page',
        'dashicons-welcome-widgets-menus' // icon to display in the menu (you can use a URL or a Dashicon class)
    );
}


// Entry 1 Function
function my_plugin_settings_page() {
    // Check if the settings form has been submitted
    if (isset($_POST['my-plugin-settings-submit'])) {
      // Save the selected default brand to the WordPress database
      update_option( 'my-plugin-default-brand', $_POST['my-plugin-default-brand'] );
    }
    
    // Display the settings page
    ?>
    <div class="wrap">
      <h1>My Plugin Settings</h1>
      <form method="post" action="options.php">
        <?php
        settings_fields( 'my-plugin-settings' );
        do_settings_sections( 'my-plugin-settings' );
        ?>
        <table class="form-table">
          <tr>
            <th scope="row"><?php _e( 'Default Brand', 'my-plugin' ); ?></th>
            <td>
            <select name="my-plugin-default-brand">
  <option value="Amana"<?php selected( get_option( 'my-plugin-default-brand' ), 'Amana' ); ?>>Amana</option>
  <option value="American Standard"<?php selected( get_option( 'my-plugin-default-brand' ), 'American Standard' ); ?>>American Standard</option>
  <option value="Bryant"<?php selected( get_option( 'my-plugin-default-brand' ), 'Bryant' ); ?>>Bryant</option>
  <option value="Carrier"<?php selected( get_option( 'my-plugin-default-brand' ), 'Carrier' ); ?>>Carrier</option>
  <option value="Champion"<?php selected( get_option( 'my-plugin-default-brand' ), 'Champion' ); ?>>Champion</option>
  <option value="Coleman"<?php selected( get_option( 'my-plugin-default-brand' ), 'Coleman' ); ?>>Coleman</option>
  <option value="Comfortmaker"<?php selected( get_option( 'my-plugin-default-brand' ), 'Comfortmaker' ); ?>>Comfortmaker</option>
  <option value="Daikin"<?php selected( get_option( 'my-plugin-default-brand' ), 'Daikin' ); ?>>Daikin</option>
  <option value="Goodman"<?php selected( get_option( 'my-plugin-default-brand' ), 'Goodman' ); ?>>Goodman</option>
  <option value="Lennox"<?php selected( get_option( 'my-plugin-default-brand' ), 'Lennox' ); ?>>Lennox</option>
  <option value="Luxaire"<?php selected( get_option( 'my-plugin-default-brand' ), 'Luxaire' ); ?>>Luxaire</option>
  <option value="Rheem"<?php selected( get_option( 'my-plugin-default-brand' ), 'Rheem' ); ?>>Rheem</option>
  <option value="Ruud"<?php selected( get_option( 'my-plugin-default-brand' ), 'Ruud' ); ?>>Ruud</option>
  <option value="Trane"<?php selected( get_option( 'my-plugin-default-brand' ), 'Trane' ); ?>>Trane</option>
  <option value="YORK"<?php selected( get_option( 'my-plugin-default-brand' ), 'YORK' ); ?>>YORK</option>
</select>
              <input type="hidden" name="my-plugin-settings-submit" value="1" />
            </td>
          </tr>
        </table>
        <?php submit_button(); ?>
      </form>
    </div>
    <?php
  }
  
// Saves entries into WP Database
add_action( 'admin_init', 'my_plugin_settings_init' );
function my_plugin_settings_init() {
    register_setting( 'my-plugin-settings', 'my-plugin-default-brand' ); // Add a new setting for the default brand

}

// Retrieves Settings For Usage
$my_plugin_setting_1 = get_option( 'my-plugin-default-brand' );
