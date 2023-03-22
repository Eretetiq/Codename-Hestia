<?php
function display_products($atts) {
  // Get the selected default brand from the WordPress database
  $default_brand = get_option( 'my-plugin-default-brand' );

  // Set the default value for the 'Brand' attribute to the selected default brand
  $atts = shortcode_atts([
    'featured' => 'yes',
    'Type' => '',
    'Brand' => $default_brand, // Use the selected default brand
    'Rating' => '',
    'Tier' => '',
    'Source' => '',
    'Split' => '',
  ], $atts);
  
  // Get the values from the URL
  $TypeValue = isset($_GET['Type']) ? $_GET['Type'] : '';
  $RatingValue = isset($_GET['Rating']) ? $_GET['Rating'] : '';
  $TierValue = isset($_GET['Tier']) ? $_GET['Tier'] : '';
  $SourceValue = isset($_GET['Source']) ? $_GET['Source'] : '';
  $SplitValue = isset($_GET['Split']) ? $_GET['Split'] : '';
// Override shortcode attributes with URL parameters, if present
if (isset($_GET['Brand']) && !empty($_GET['Brand'])) {
  $atts['Brand'] = $_GET['Brand'];
}
if (isset($_GET['Type']) && !empty($_GET['Type'])) {
  $atts['Type'] = $_GET['Type'];
}
if (isset($_GET['Rating']) && !empty($_GET['Rating'])) {
  $atts['Rating'] = $_GET['Rating'];
}
if (isset($_GET['Tier']) && !empty($_GET['Tier'])) {
  $atts['Tier'] = $_GET['Tier'];
}
if (isset($_GET['Source']) && !empty($_GET['Source'])) {
  $atts['Source'] = $_GET['Source'];
}
if (isset($_GET['Split']) && !empty($_GET['Split'])) {
  $atts['Split'] = $_GET['Split'];
}
// Set up query arguments
$query_args = [
  'post_type' => 'hvac-product',
  'posts_per_page' => 4,
  'orderby' => 'meta_value',
  'order' => 'ASC',
];

// Build the tax_query array based on the non-empty attributes and GET parameters
$tax_query = [];
if (!empty($atts['Type']) || !empty($TypeValue)) {
  $tax_query[] = [
      'taxonomy' => 'product_type',
      'field' => 'slug',
      'terms' => !empty($atts['Type']) ? $atts['Type'] : $TypeValue,
  ];
}
else {
  $output .= '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url(__FILE__) . 'assets/css/404.css">';
    ob_start();
    include '404-block.html'; // Capture the HTML output of 404-block.html
    $output .= ob_get_clean(); // Append the captured HTML output to the $output variable
    return $output;
}
if (!empty($atts['Brand'])) {
  $tax_query[] = [
      'taxonomy' => 'product_manufacturer',
      'field' => 'slug',
      'terms' => $atts['Brand'],
  ];
}
$query_args['tax_query'] = $tax_query;

// Build the meta_query array based on the non-empty attributes and GET parameters
$meta_query = [
  [
    'key' => 'hvac_product_featured',
    'value' => 'yes',
  ],

];
if (!empty($atts['Rating']) || !empty($RatingValue)) {
  $meta_query[] = [
      'key' => 'hvac_product_rating',
      'value' => !empty($atts['Rating']) ? $atts['Rating'] : $RatingValue,
  ];
}
if (!empty($atts['Tier'])) {
  $tier = $atts['Tier'];
}
if (!empty($atts['Source']) || !empty($SourceValue)) {
  $meta_query[] = [
      'key' => 'hvac_product_packaged_unit_type',
      'value' => !empty($atts['Source']) ? $atts['source'] : $SourceValue,
  ];
}
if (!empty($atts['Split']) || !empty($SplitValue)) {
  $meta_query[] = [
      'key' => 'hvac_product_split',
      'value' => !empty($atts['Split']) ? $atts['Split'] : $SplitValue,
  ];
}
if (!empty($meta_query)) {
  $query_args['meta_query'] = $meta_query;
}
//var_dump($atts); // Dump the values of the $atts variable
//var_dump($query_args); // Dump the values of the $query_args variable
  // Run the query
  $product_query = new WP_Query($query_args);
  // Declare the $products array and output variable
 $output .= '<div class="product_column">';
  $products = array();
  if ($product_query->have_posts()) {
    
    while ($product_query->have_posts()) {
      $product_query->the_post();
      $title = get_the_title();
      $excerpt = get_the_excerpt();
      $price = 0;
      if ($tier == '1') {
        $price = get_field('hvac_product_price_1');
      } elseif ($tier == '2') {
        $price = get_field('hvac_product_price_2');
      } elseif ($tier == '3') {
        $price = get_field('hvac_product_price_3');
      } elseif ($tier == '4') {
        $price = get_field('hvac_product_price_4');
      } elseif ($tier == '5') {
        $price = get_field('hvac_product_price_5');
      } elseif ($tier == '6') {
        $price = get_field('hvac_product_price_6');
      }
      // Push the product data into the $products array
      $products[] = [
        'title' => $title,
        'excerpt' => $excerpt,
        'price' => $price,
        'thumbnail' => get_the_post_thumbnail()
      ];
    }
    // Sort the products by price
    usort($products, function ($a, $b) {
      return $a['price'] - $b['price'];
    });
    // Generate the output using the sorted $products array
    foreach ($products as $product) {
      $output .= '<label>';
      $output .= '<div class="div-box-product">';
      $output .= $product['thumbnail'];
      $output .= '<h2>' . $product['title'] . '</h2>';
      if (isset($product['price']) && !empty($product['price'])) {
        $output .= '<div class="price" style="font-weight:bold;">$' . $product['price'] . '</div>';
      } else {
        $output .= '<div class="price-lost" style="font-weight:bold;">Price not available</div>';
      }
      $output .= '<p>' . $product['excerpt'] . '</p>';
      $output .= '<input type="radio" name="product" value="' . $product['title'] . '" onclick="updateProductTitle(\'' . $product['title'] . '\', \'' . $product['price'] . '\')"></input>';
      $output .= '</div>';
      $output .= '</label>';
    }
    $output .= '</div>';
  } else {
    $output .= '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url(__FILE__) . 'assets/css/404.css">';
    ob_start();
    include '404-block.html'; // Capture the HTML output of 404-block.html
    $output .= ob_get_clean(); // Append the captured HTML output to the $output variable
  }
  wp_reset_postdata();

  // Return the output
  return $output;
}