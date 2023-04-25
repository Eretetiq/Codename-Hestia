<!-- This is the HTML markup for the page -->
<div class="wrap">
  <h1>404 Pages</h1>
  <p>This is the 404 Pages page.</p>
</div>

<!-- This is the CSS code that is used to update the content of the page -->
<style>
#lfb_bootstraped .lfb_bootstraped #three-eleven:after {
  visibility: visible;
  position: absolute;
  top: 0;
  left: 0;
  content: "<?php echo get_option('custom_content', $newContent); ?>";
}
</style>

<!-- This is the HTML markup for the form that is used to update the content -->
<form method="post">

  <?php
  // This code retrieves the saved content from the database
  $content = get_option( 'custom_content', '' );

  // This code generates the WordPress WYSIWYG editor for the form
  wp_editor( $content, 'newContent', array(
    'textarea_name' => 'content',
    'media_buttons' => false,
    'textarea_rows' => 5,
  ) );
  ?>

  <!-- This button submits the form to save the changes -->
  <button type="submit" name="save_changes" class="button-primary">Save Changes</button>
</form>

<?php
if ( isset( $_POST['save_changes'] ) ) {
  // This code saves the updated content to the database
  $newContent = wp_kses_post( $_POST['content'] ); // Sanitize content
  update_option( 'custom_content', $newContent );

  // This code updates the CSS code with the new content using a JavaScript function
  echo '<script>
    var newContent = "' . $newContent . '";
    document.querySelector("#lfb_bootstraped.lfb_bootstraped #three-eleven:after").style.content = \'"\'+newContent+\'"\';
  </script>';
}
?>
