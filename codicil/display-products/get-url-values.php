<?php
function get_url_values() {
  $values = [
    'Type' => isset($_GET['Type']) ? $_GET['Type'] : '',
    'Rating' => isset($_GET['Rating']) ? $_GET['Rating'] : '',
    'Tier' => isset($_GET['Tier']) ? $_GET['Tier'] : '',
    'Split' => isset($_GET['Split']) ? $_GET['Split'] : '',
    'SplitSource' => isset($_GET['SplitSource']) ? $_GET['SplitSource'] : '',
    'FurnaceSource' => isset($_GET['FurnaceSource']) ? $_GET['FurnaceSource'] : '',
    'PackagedSource' => isset($_GET['PackagedSource']) ? $_GET['PackagedSource'] : '',
  ];
  return $values;
}


