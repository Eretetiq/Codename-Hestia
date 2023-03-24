<?php
function zip_form() {
  ob_start();
  ?>
  <div id="zip-form-wrapper">
    <form action="<?php echo plugin_dir_url(__FILE__) . 'includes/zip-validation-submit.php'; ?>" method="post">
      <label>Enter a 5-digit number:</label>
      <input maxlength="5" name="myfield" type="text" />
      <input type="submit" value="Submit" />
    </form>
    <div id="zip-validation-message"></div>
  </div>
  <?php
  return ob_get_clean();
}
add_shortcode( 'zip-form', 'zip_form' );