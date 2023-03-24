<?php
require_once(dirname(__FILE__) . '/zip-validation-array.php'); // Include the validation function

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $input = $_POST['myfield'];
  if (validate_input($input)) {
    $result = array('success' => true, 'message' => 'Input is valid!');
  } else {
    $result = array('success' => false, 'message' => 'Input is not valid.');
  }
  echo json_encode($result);
}
?>