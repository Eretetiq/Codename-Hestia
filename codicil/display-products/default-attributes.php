<?php
function set_default_attributes($atts, $default_brand) {
  return shortcode_atts([
    'featured' => 'Yes',
    'Type' => '',
    'Brand' => $default_brand, // Use the selected default brand
    'Rating' => '',
    'Tier' => '',
    'Split' => '',
    'SplitSource' => '',
    'FurnaceSource' => '',
    'PackagedSource' => '',
  ], $atts);
}
