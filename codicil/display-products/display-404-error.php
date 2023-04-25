<?php
function display_404_error() {
  $output = '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url( dirname( __FILE__ ) ) . 'assets/css/404.css">';
  ob_start();
  require_once( dirname( __FILE__ ) . '/../assets/html/404-product.html' );
  $output .= ob_get_clean(); // Append the captured HTML output to the $output variable
  return $output;
}
