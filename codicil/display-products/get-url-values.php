<?php
// This function retrieves the values of the URL query parameters
function get_url_values() {
  // This associative array holds the names of the query parameters and their default values
  $values = [
    'Type' => isset($_GET['Type']) ? $_GET['Type'] : '', // If the 'Type' query parameter is set, use its value; otherwise, use an empty string
    'Rating' => isset($_GET['Rating']) ? $_GET['Rating'] : '', // If the 'Rating' query parameter is set, use its value; otherwise, use an empty string
    'Tier' => isset($_GET['Tier']) ? $_GET['Tier'] : '', // If the 'Tier' query parameter is set, use its value; otherwise, use an empty string
    'Split' => isset($_GET['Split']) ? $_GET['Split'] : '', // If the 'Split' query parameter is set, use its value; otherwise, use an empty string
    'SplitSource' => isset($_GET['SplitSource']) ? $_GET['SplitSource'] : '', // If the 'SplitSource' query parameter is set, use its value; otherwise, use an empty string
    'FurnaceSource' => isset($_GET['FurnaceSource']) ? $_GET['FurnaceSource'] : '', // If the 'FurnaceSource' query parameter is set, use its value; otherwise, use an empty string
    'PackagedSource' => isset($_GET['PackagedSource']) ? $_GET['PackagedSource'] : '', // If the 'PackagedSource' query parameter is set, use its value; otherwise, use an empty string
  ];
  return $values; // Return the array of query parameter values
}