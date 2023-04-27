<?php
function setup_query_args($atts) {
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
      'value' => 'Yes',
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
  if (!empty($atts['PackagedSource']) || !empty($PackagedSource)) {
    $meta_query[] = [
        'key' => 'hvac_product_packaged_unit_type',
        'value' => !empty($atts['PackagedSource']) ? $atts['PackagedSource'] : $PackagedSource,
    ];
  }
  if (!empty($atts['SplitSource']) || !empty($SplitSource)) {
    $meta_query[] = [
        'key' => 'hvac_product_split_unit_type',
        'value' => !empty($atts['SplitSource']) ? $atts['SplitSource'] : $SplitSource,
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

  return $query_args;
}