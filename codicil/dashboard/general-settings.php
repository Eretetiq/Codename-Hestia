<?php
// This is the HTML markup for the settings page
?>
<div class="wrap">
  <h1> BxB Conditional Pull Settings</h1>
  <p>General Settings</p>
  <form method="post" action="options.php">
    <!-- This code adds the WordPress settings fields and sections -->
    <?php
    include(plugin_dir_path(__FILE__) . 'codicil/dashboard-modules/general-settings/brand-selection.php');
    // Call the function to render the brand settings
    render_brand_settings();
    ?>
  </form>
</div>
