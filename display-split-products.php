<?php
if ( ! defined( 'ABSPATH' ) ) {
  die;
}
function hestia_enqueue_styles_and_scripts() {
  wp_enqueue_style( 'hestia-grid-styles', plugin_dir_url( __FILE__ ) . 'assets/css/grid.css' );
  wp_enqueue_script( 'custom-column-select', plugin_dir_url( __FILE__ ) . '/assets/js/custom-column-select.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'hestia_enqueue_styles_and_scripts' );
function display_products($atts) {
// Extract shortcode attributes
  $atts = shortcode_atts([
    //'type' => 'split',
    'brand' => 'trane',
    'rating' => '',
    'tier' => '',  // Add default value for 'tier' attribute
  ], $atts);
   $tier = isset($atts['tier']) ? $atts['tier'] : '';
// Set up query arguments
	  $query_args = [
		'post_type' => 'hvac-product',
		'posts_per_page' => 4,
		'orderby' => 'meta_value',
		'order' => 'ASC',
		'meta_key' => 'hvac_product_price',
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
        'key' => 'hvac_featured_product',
        'value' => 'Yes',
      ],
      [
        'key' => 'hvac_product_rating',
        'value' => $atts['rating'],
      ],
      [
        'key' => 'hvac_product_split',
        'value' => 'Yes',
      ],
    ],
  ];
// Run the query
  $product_query = new WP_Query($query_args);
// Build the output
  $output = '<div class="product_column">';

  if ($product_query->have_posts()) {
  while ($product_query->have_posts()) {
    $product_query->the_post();
    $title = get_the_title();
    $excerpt = get_the_excerpt();
  	//$price = 0;
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
		$output .= '<label>';
				$output .= '<div class="div-box-product">';
					//$output .= get_the_post_thumbnail($post_id, 'medium');        
             $output .= get_the_post_thumbnail( null, 'medium');
					$output .= '<h2>' . $title . '</h2>';
// Check if $price is an empty string
                  if (isset($price) && !empty($price)) {
// Display the price
                    $output .= '<div class="price" style="font-weight:bold;">$' . $price . '</div>';
                  } else {
// Display a default value or message
                    $output .= '<div class="price" style="font-weight:bold;">Price not available</div>';
                  }
//$output .= '<div class="price" style="font-weight:bold;">$' . $price . '</div>'; 
					$output .= '<p>' . $excerpt . '</p>';
					$output .= '<input type="radio" name="product" value="' . $title . '" onclick="updateProductTitle(\'' . $title . '\', \'' . $price . '\')"></input>';
				$output .= '</div>';
		$output .= '</label>';
  }
  	$output .= '</div>';
} else {
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
add_shortcode('display-split-products', 'display_split_products');
//[display-split-products rating='80' tier='1'] - Metal Tiers 1-6
//[display-split-products rating='90' tier='1'] - PVC Tiers 1-6