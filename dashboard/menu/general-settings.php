<div class="wrap">
  <h1> BxB Conditional Pull Settings</h1>
  <form method="post" action="options.php">
    <?php
    settings_fields( 'hestia-settings' );
    do_settings_sections( 'hestia-settings' );
    ?>
    <table class="form-table">
      <tr>
        <th scope="row"><?php _e( 'Default Brand', 'hestia' ); ?></th>
        <td>
          <select name="hestia-default-brand">
            <option value="Amana"<?php selected( get_option( 'hestia-default-brand' ), 'Amana' ); ?>>Amana</option>
            <option value="American Standard"<?php selected( get_option( 'hestia-default-brand' ), 'American Standard' ); ?>>American Standard</option>
            <option value="Bryant"<?php selected( get_option( 'hestia-default-brand' ), 'Bryant' ); ?>>Bryant</option>
            <option value="Carrier"<?php selected( get_option( 'hestia-default-brand' ), 'Carrier' ); ?>>Carrier</option>
            <option value="Champion"<?php selected( get_option( 'hestia-default-brand' ), 'Champion' ); ?>>Champion</option>
            <option value="Coleman"<?php selected( get_option( 'hestia-default-brand' ), 'Coleman' ); ?>>Coleman</option>
            <option value="Comfortmaker"<?php selected( get_option( 'hestia-default-brand' ), 'Comfortmaker' ); ?>>Comfortmaker</option>
            <option value="Daikin"<?php selected( get_option( 'hestia-default-brand' ), 'Daikin' ); ?>>Daikin</option>
            <option value="Goodman"<?php selected( get_option( 'hestia-default-brand' ), 'Goodman' ); ?>>Goodman</option>
            <option value="Lennox"<?php selected( get_option( 'hestia-default-brand' ), 'Lennox' ); ?>>Lennox</option>
            <option value="Luxaire"<?php selected( get_option( 'hestia-default-brand' ), 'Luxaire' ); ?>>Luxaire</option>
            <option value="Rheem"<?php selected( get_option( 'hestia-default-brand' ), 'Rheem' ); ?>>Rheem</option>
            <option value="Ruud"<?php selected( get_option( 'hestia-default-brand' ), 'Ruud' ); ?>>Ruud</option>
            <option value="Trane"<?php selected( get_option( 'hestia-default-brand' ), 'Trane' ); ?>>Trane</option>
            <option value="YORK"<?php selected( get_option( 'hestia-default-brand' ), 'YORK' ); ?>>YORK</option>
            </select>
      <input type="hidden" name="hestia-settings-submit" value="1" />
    </td>
  </tr>
</table>
<?php submit_button(); ?>
</form>
</div>
