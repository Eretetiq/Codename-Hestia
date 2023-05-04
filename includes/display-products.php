<?php
function display_products($atts) {
  $default_brand = get_default_brand();
  // Set the default value for the 'Brand' attribute to the selected default brand
  $atts = set_default_attributes($atts, $default_brand);
  // Get the $GET values from the URL
  $url_values = get_url_values();
  $TypeValue = $url_values['Type'];
  $RatingValue = $url_values['Rating'];
  $TierValue = $url_values['Tier'];
  $SourceValue = $url_values['Source'];
  $SplitValue = $url_values['Split'];
  $SplitSource = $url_values['SplitSource'];
  $FurnaceSource = $url_values['FurnaceSource'];
  $PackagedSource = $url_values['PackagedSource'];
  // Override shortcode attributes with URL parameters, if present
  $atts = override_attributes($atts, $url_values);

  // Check if either the "Type" or "Tier" value is empty
  if (empty($TypeValue) || empty($TierValue)) {
    // Call the display_404_error function and return the generated HTML output
    return display_404_error();
  } else {
    // Set up query arguments
    $query_args = setup_query_args($atts, $url_values);

    // Perform the product query
    $product_new_query = perform_product_query($query_args, $atts, $TierValue, $SplitValue, $TypeValue, $SplitSource, $PackagedSource);

    // Return the generated HTML output
    return $product_new_query;
  }
}