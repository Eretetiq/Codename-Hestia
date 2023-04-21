<?php
function override_attributes($atts) {
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
if (isset($_GET['Split']) && !empty($_GET['Split'])) {
  $atts['Split'] = $_GET['Split'];
}
if (isset($_GET['SplitSource']) && !empty($_GET['SplitSource'])) {
  $atts['SplitSource'] = $_GET['SplitSource'];
}
if (isset($_GET['FurnaceSource']) && !empty($_GET['FurnaceSource'])) {
  $atts['FurnaceSource'] = $_GET['FurnaceSource'];
}
if (isset($_GET['PackagedSource']) && !empty($_GET['PackagedSource'])) {
  $atts['PackagedSource'] = $_GET['PackagedSource'];
}
return $atts;
}