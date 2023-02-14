<?php
function display_package_products($atts) {
// Extract shortcode attributes
 $atts = shortcode_atts([
  'type' => 'packaged-unit',
  'brand' => 'trane',
  'source' => '',
  'tier' => '',  // Add default value for 'tier' attribute
  ], $atts);
  $tier = isset($atts['tier']) ? $atts['tier'] : '';
// Set up query arguments
	  $query_args = [
		'post_type' => 'hvac-product',
		'posts_per_page' => 4,
		'orderby' => 'meta_value',
		'order' => 'ASC',
		'tax_query' => [
      [
       'taxonomy' => 'product_type',
       'field' => 'slug',
       'terms' => $atts['type'],
      ],
     [
        'taxonomy' => 'product_manufacturer',
       'field' => 'slug',
       'terms' => $atts['brand'],
     ],
    ],
    'meta_query' => [
    [
      'key' => 'hvac_product_featured',
       'value' => 'yes',
    ],
     [
      'key' => 'hvac_product_packaged_unit_type',
     'value' => $atts['source'],
    ],
   ],
  ];
// Run the query
$product_query = new WP_Query($query_args);

// Declare the $products array and output variable
$output = '<div class="product_column">';
$products = array();

if ($product_query->have_posts()) {
  while ($product_query->have_posts()) {
    $product_query->the_post();
    $title = get_the_title();
    $excerpt = get_the_excerpt();
    $price = 0;
    if ($tier == '1'){
      $price = get_field('hvac_product_price_1');}
    elseif ($tier == '2'){
      $price = get_field('hvac_product_price_2');}
    elseif ($tier == '3'){
      $price = get_field('hvac_product_price_3');}
    elseif ($tier == '4'){
      $price = get_field('hvac_product_price_4');}
    elseif ($tier == '5'){
      $price = get_field('hvac_product_price_5');}
    elseif ($tier == '6'){
       $price = get_field('hvac_product_price_6');}   
    // Push the product data into the $products array
    $products[] = [
        'title' => $title,
        'excerpt' => $excerpt,
        'price' => $price,
        'thumbnail' => get_the_post_thumbnail()
    ];
  }
  // Sort the products by price
  usort($products, function($a, $b) {
    return $a['price'] - $b['price'];
  });
  // Generate the output using the sorted $products array
  foreach($products as $product) {
      $output .= '<label>';
      $output .= '<div class="div-box-product">';
      $output .= $product['thumbnail'];        
      $output .= '<h2>' . $product['title'] . '</h2>';
      if (isset($product['price']) && !empty($product['price'])) {
          $output .= '<div class="price" style="font-weight:bold;">$' . $product['price'] . '</div>';
      } else {
          $output .= '<div class="price" style="font-weight:bold;">Price not available</div>';
      }
      $output .= '<p>' . $product['excerpt'] . '</p>';
      $output .= '<input type="radio" name="product" value="' . $product['title'] . '" onclick="updateProductTitle(\'' . $product['title'] . '\', \'' . $product['price'] . '\')"></input>';
      $output .= '</div>';
      $output .= '</label>';
  }
  $output .= '</div>';
}
 else {
//Enter 404 Div
	  $output .= '<div class="price" style="font-weight:bold;">';
		  $output .= '<a href="/"><img src="https://bxbknowshvac.com/wp-content/uploads/BxB-Media-gray-horizontal-logo.svg" alt="No Product"></a>';
		  $output .= '<h2><center>These are not the products you are looking for.</center></h2>';
// Exit 404 Div
  	$output .= '</div>';
}
wp_reset_postdata();

// Return the output
return $output;
  }