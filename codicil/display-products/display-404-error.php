<?php
function display_404_error() {
  ob_start(); ?>
  <html>
  <body>
    <div id="main">
      <div class="fof">
        <h2>No Products Found</h2>
      </div>
    </div>
  </body>
  </html>
  <?php
  return ob_get_clean();
}