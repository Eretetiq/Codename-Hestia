<div class="wrap">
  <h1> Color Settings </h1>
  <p>Form and Pull Colors</p>
  <form method="post" action="options.php">
    <?php
    settings_fields( 'hestia-settings' );
    do_settings_sections( 'hestia-settings' );
    ?>
    <table class="form-table">
      <tr>
        <th scope="row"><?php _e( 'Column Colors', 'hestia' ); ?></th>
        <td>
          <label><?php _e( 'Hover Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-column-hover" value="<?php echo get_option('hestia-column-hover', '#f3d5a5'); ?>">
          <br>
          <label><?php _e( 'Selected Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-column-selected" value="<?php echo get_option('hestia-column-selected', '#ada290'); ?>">
        </td>
      </tr>
      <tr>
        <th scope="row"><?php _e( 'Price Colors', 'hestia' ); ?></th>
        <td>
          <label><?php _e( 'Background Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-price-bg" value="<?php echo get_option('hestia-price-bg', '#e6c693'); ?>">
          <br>
          <label><?php _e( 'Font Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-price-font" value="<?php echo get_option('hestia-price-font', '#fff'); ?>">
          <br>
          <label><?php _e( 'Background Hover Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-price-bg-hover" value="<?php echo get_option('hestia-price-bg-hover', '#fff'); ?>">
          <br>
          <label><?php _e( 'Font Hover Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-price-font-hover" value="<?php echo get_option('hestia-price-font-hover', '#e6c693'); ?>">
          <br>
          <label><?php _e( 'Background Selected Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-price-bg-selected" value="<?php echo get_option('hestia-price-bg-selected', '#e6c693'); ?>">
          <br>
          <label><?php _e( 'Font Selected Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-price-font-selected" value="<?php echo get_option('hestia-price-font-selected', '#fff'); ?>">
        </td>
      </tr>
      <tr>
        <th scope="row"><?php _e( 'Font and Cont Colors', 'hestia' ); ?></th>
        <td>
          <label><?php _e( 'Hover Color:', 'hestia' ); ?></label>
          <input type="color" name="hestia-font-hover" value="<?php echo get_option('hestia-font-hover', '#2e2e2e'); ?>">
          <br>
      <label><?php _e( 'Selected Color:', 'hestia' ); ?></label>
      <input type="color" name="hestia-font-selected" value="<?php echo get_option('hestia-font-selected', '#fff'); ?>">
      <br>
      <label><?php _e( 'Checked Color:', 'hestia' ); ?></label>
      <input type="color" name="hestia-font-checked" value="<?php echo get_option('hestia-font-checked', '#d6d6d6'); ?>">
    </td>
  </tr>
</table>
<?php submit_button(); ?>
  </form>
</div>