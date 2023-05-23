<?php
function perform_product_query($query_args, $atts, $TierValue, $SplitValue, $TypeValue, $SplitSource, $PackagedSource) {
  $output = '';
  // Run the query
  $product_query = new WP_Query($query_args);            
  $output .= display_selection_text();

  // Declare the $products array and output variable
  $output .= '<div class="product_column">';
  $products = array();
  if ($product_query->have_posts()) {
    while ($product_query->have_posts()) {
      $product_query->the_post();
      $title = get_the_title();

      // Add text to the title based on $_GET variables
      if ($TypeValue == 'Air Conditioner') {
        if ($SplitSource == 'Natural Gas') {
          $title .= ' + Gas Furnace';
        } elseif ($SplitSource == 'Electric') {
          $title .= ' + Air Handling Unit';
        }
      } elseif ($TypeValue == 'Heat Pump') {
        if ($SplitSource == 'Natural Gas') {
          $title .= ' + Gas Furnace';
        } elseif ($SplitSource == 'Electric') {
          $title .= ' + Air Handling Unit';
        }
      } elseif ($TypeValue == 'Packaged Unit') {
        if ($PackagedSource == 'Natural Gas') {
          $title .= ' + Gas Heat';
        } elseif ($PackagedSource == 'Electric') {
          $title .= ' + Electric Heat';
        }
      }
    
      $excerpt = get_the_excerpt();
      $price = 0;
      if ($TierValue == '1') {
        $price = get_field('hvac_product_price_1');
      } elseif ($TierValue == '2') {
        $price = get_field('hvac_product_price_2');
      } elseif ($TierValue == '3') {
        $price = get_field('hvac_product_price_3');
      } elseif ($TierValue == '4') {
        $price = get_field('hvac_product_price_4');
      } elseif ($TierValue == '5') {
        $price = get_field('hvac_product_price_5');
      } elseif ($TierValue == '6') {
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
        $formatted_price = number_format($product['price'], 0); // Format the price with two decimal places and commas
        $output .= '<div class="price" style="font-weight:bold;">$' . $formatted_price . '</div>';
      } else {
        $output .= '<div class="price-lost" style="font-weight:bold;">Price not available</div>';
      }
      $output .= '<p>' . $product['excerpt'] . '</p>';                                                
      $output .= '<input type="radio" name="product" value="' . $product['title'] . '" onclick="updateProductTitle(\'' . $product['title'] . '\', \'' . $product['price'] . '\')"></input>';
      $output .= '</div>';
      $output .= '</label>';
    }
    $output .= '</div>';
  }
  wp_reset_postdata();

  return $output;
  }