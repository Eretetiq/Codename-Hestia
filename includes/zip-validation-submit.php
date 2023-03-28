<?php
require_once(dirname(__FILE__) . '/zip-validation-array.php'); // Include the validation function

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['myfield'];
    $csv_file_path = "assets/csv/";

    if (!file_exists($csv_file_path . 'valid_numbers.csv')) {
        $result = array('success' => false, 'message' => 'There is no data.');
    } else if (validate_input($input, $csv_file_path)) {
        $result = array('success' => true, 'message' => 'Input is valid!');
    } else {
        $result = array('success' => false, 'message' => 'Input is not valid.');
    }
    echo json_encode($result);
}
