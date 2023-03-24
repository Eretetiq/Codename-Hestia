<?php 
function validate_input($input) {
    $valid_numbers = array(12345, 67890, 54321);
    if (in_array($input, $valid_numbers)) {
      return true; // Input is valid
    } else {
      return false; // Input is not valid
    }
  }