<?php 
function validate_input($input, $csv_file_path) {
    $valid_numbers = array();
    if (($handle = fopen($csv_file_path, "r")) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $valid_numbers[] = $data[0];
        }
        fclose($handle);
    }

    if (in_array($input, $valid_numbers)) {
        return true; // Input is valid
    } else {
        return false; // Input is not valid
    }
}