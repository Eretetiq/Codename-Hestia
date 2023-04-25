<?php
// This function sets default values for shortcode attributes
function set_default_attributes($atts, $default_brand) {
  // This code sets the default values for the shortcode attributes
  return shortcode_atts([
    'featured' => 'Yes', // Set the default value for the 'featured' attribute
    'Type' => '', // Set the default value for the 'Type' attribute
    'Brand' => $default_brand, // Use the selected default brand as the default value for the 'Brand' attribute
    'Rating' => '', // Set the default value for the 'Rating' attribute
    'Tier' => '', // Set the default value for the 'Tier' attribute
    'Split' => '', // Set the default value for the 'Split' attribute
    'SplitSource' => '', // Set the default value for the 'SplitSource' attribute
    'FurnaceSource' => '', // Set the default value for the 'FurnaceSource' attribute
    'PackagedSource' => '', // Set the default value for the 'PackagedSource' attribute
  ], $atts); // This code sets any attributes that are missing to their default values
}
