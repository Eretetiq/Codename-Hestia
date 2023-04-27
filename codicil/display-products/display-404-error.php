<?php
function display_404_error() {
  $output .= '<div id="main">';
    $output .= '<div class="fof">';
      $output .= '<h1>No Products Found</h1>';
    $output .= '</div>';
  $output .= '</div>';
  return $output;
}