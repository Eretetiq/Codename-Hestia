<?php
$file_path = plugin_dir_path(__FILE__) . 'csv/sac.csv';

// Check if the CSV file exists
if (!file_exists($file_path)) {
    $sac_array = array();
} else {
    // Read the CSV file and create the $sac_array variable
    $file = fopen($file_path, 'r');
    $sac_array = array();
    while (($line = fgetcsv($file)) !== false) {
        $sac_array[] = $line[0];
    }
    fclose($file);
}
