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
      update_option('my-plugin-default-brand', $_POST['my-plugin-default-brand']);
      
      // Save the column colors to the WordPress database
      update_option('my-plugin-column-hover', $_POST['my-plugin-column-hover']);
      update_option('my-plugin-column-selected', $_POST['my-plugin-column-selected']);
      
      // Save the price colors to the WordPress database
      update_option('my-plugin-price-bg', $_POST['my-plugin-price-bg']);
      update_option('my-plugin-price-font', $_POST['my-plugin-price-font']);
      update_option('my-plugin-price-bg-hover', $_POST['my-plugin-price-bg-hover']);
      update_option('my-plugin-price-font-hover', $_POST['my-plugin-price-font-hover']);
      update_option('my-plugin-price-bg-selected', $_POST['my-plugin-price-bg-selected']);
      update_option('my-plugin-price-font-selected', $_POST['my-plugin-price-font-selected']);
      
      // Save the font colors to the WordPress database
      update_option('my-plugin-font-hover', $_POST['my-plugin-font-hover']);
      update_option('my-plugin-font-selected', $_POST['my-plugin-font-selected']);
      update_option('my-plugin-font-checked', $_POST['my-plugin-font-checked']);
  }
    
    // Display the settings page
    ?>
    <div class="wrap">
      <h1> BxB Conditional Pull Settings</h1>
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
          <tr>
  <th scope="row"><?php _e( 'Column Colors', 'my-plugin' ); ?></th>
  <td>
    <label><?php _e( 'Hover Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-column-hover" value="<?php echo get_option('my-plugin-column-hover', '#f3d5a5'); ?>">
    <br>
    <label><?php _e( 'Selected Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-column-selected" value="<?php echo get_option('my-plugin-column-selected', '#ada290'); ?>">
  </td>
</tr>
<tr>
  <th scope="row"><?php _e( 'Price Colors', 'my-plugin' ); ?></th>
  <td>
    <label><?php _e( 'Background Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-price-bg" value="<?php echo get_option('my-plugin-price-bg', '#e6c693'); ?>">
    <br>
    <label><?php _e( 'Font Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-price-font" value="<?php echo get_option('my-plugin-price-font', '#fff'); ?>">
    <br>
    <label><?php _e( 'Background Hover Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-price-bg-hover" value="<?php echo get_option('my-plugin-price-bg-hover', '#fff'); ?>">
    <br>
    <label><?php _e( 'Font Hover Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-price-font-hover" value="<?php echo get_option('my-plugin-price-font-hover', '#e6c693'); ?>">
    <br>
    <label><?php _e( 'Background Selected Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-price-bg-selected" value="<?php echo get_option('my-plugin-price-bg-selected', '#e6c693'); ?>">
    <br>
    <label><?php _e( 'Font Selected Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-price-font-selected" value="<?php echo get_option('my-plugin-price-font-selected', '#fff'); ?>">
  </td>
</tr>
<tr>
  <th scope="row"><?php _e( 'Font and Cont Colors', 'my-plugin' ); ?></th>
  <td>
    <label><?php _e( 'Hover Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-font-hover" value="<?php echo get_option('my-plugin-font-hover', '#2e2e2e'); ?>">
    <br>
    <label><?php _e( 'Selected Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-font-selected" value="<?php echo get_option('my-plugin-font-selected', '#fff'); ?>">
    <br>
    <label><?php _e( 'Checked Color:', 'my-plugin' ); ?></label>
    <input type="color" name="my-plugin-font-checked" value="<?php echo get_option('my-plugin-font-checked', '#d6d6d6'); ?>">
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
