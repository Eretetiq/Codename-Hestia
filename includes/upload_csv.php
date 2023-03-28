<?php
if(isset($_POST["submit"])) {
    $file_name = $_FILES["csv_file"]["name"];
    $file_tmp = $_FILES["csv_file"]["tmp_name"];

    // Move uploaded file to desired location
    move_uploaded_file($file_tmp, "assets/csv/" . $file_name);

    // Redirect to zip-codes.php after upload is complete
    header("Location: zip-codes.php");
    exit;
}
?>
