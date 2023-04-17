<div class="wrap">
  <h1>404 Pages</h1>
  <p>This is the 404 Pages page.</p>
</div>

<style>
#lfb_bootstraped .lfb_bootstraped #three-eleven:after {
  visibility: visible;
  position: absolute;
  top: 0;
  left: 0;
  content: "<?php echo get_option('custom_content', $newContent); ?>";
}

</style>

<form method="post">
  <?php
  $content = get_option( 'custom_content', '' ); // Get saved content
  wp_editor( $content, 'newContent', array(
    'textarea_name' => 'content',
    'media_buttons' => false,
    'textarea_rows' => 5,
  ) );
  ?>
  <button type="submit" name="save_changes" class="button-primary">Save Changes</button>
</form>

<?php
if ( isset( $_POST['save_changes'] ) ) {
  // Save content to the database
  $newContent = wp_kses_post( $_POST['content'] ); // Sanitize content
  update_option( 'custom_content', $newContent );
  // Update the CSS code with the new content using the JavaScript function
  echo '<script>
    var newContent = "' . $newContent . '";
    document.querySelector("#lfb_bootstraped.lfb_bootstraped #three-eleven:after").style.content = \'"\'+newContent+\'"\';
  </script>';
}
?>
