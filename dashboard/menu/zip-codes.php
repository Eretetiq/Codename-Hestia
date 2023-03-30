<div class="wrap">
  <h1>Zip Codes</h1>
  <p>Changes the Zip Code Array</p>
</div>

<?php
// Retrieve the $sac_array variable from the database
$sac_array = get_option('sac_array');

if (empty($sac_array)) {
    echo 'Service area is not configured.';
} else {
    // Output the array
    echo '<div style="display: flex;"><div style="flex-grow: 1; margin-right: 20px;"><div class="sac-columns">';
    $count = 0;
    foreach ($sac_array as $value) {
        if ($count % 4 == 0) {
            echo '<div class="sac-column">';
        }
        echo '<div class="sac-value">' . $value . '</div>';
        if ($count % 4 == 3 || $count == count($sac_array) - 1) {
            echo '</div>';
        }
        $count++;
    }
    echo '</div></div>';

    // Output the total number of entries
    echo 'Total entries: ' . count($sac_array);
}
?>

<div class="upload-form">
    <form method="post" enctype="multipart/form-data">
        <label for="csv-file">Select a CSV file:</label>
        <input type="file" name="csv-file" id="csv-file" accept=".csv" required>
        <button type="submit" name="upload-csv">Upload</button>
    </form>
</div>

<?php
if (isset($_POST['upload-csv'])) {
   $upload_dir = wp_upload_dir();
    $target_file = $upload_dir['path'] . '/sac.csv';
    $file_type = strtolower(pathinfo($_FILES['csv-file']['name'], PATHINFO_EXTENSION));

    // Check if file is a CSV file
    if ($file_type !== 'csv') {
        echo 'Please upload a CSV file.';
        return;
    }

    // Move uploaded file to the uploads directory with the name "sac.csv"
    if (move_uploaded_file($_FILES['csv-file']['tmp_name'], $target_file)) {
        // Create the $sac_array variable from the uploaded CSV file
        $file = fopen($target_file, 'r');
        $sac_array = array();
        while (($line = fgetcsv($file)) !== false) {
            $sac_array[] = $line[0];
        }
        fclose($file);

     // Save the $sac_array variable to the database
     update_option('sac_array', $sac_array);

     echo 'File uploaded successfully.';
 } else {
     echo 'Error uploading file.';
 }
}
?>

<style>
    .sac-columns {
        display: flex;
        flex-wrap: wrap;
        overflow-y: scroll;
        max-height: 200px;
    }
    .sac-column {
        width: 25%;
    }
    .sac-value {
        padding: 5px;
        border: 1px solid #ccc;
        margin-bottom: 5px;
        font-family: monospace;
    }
    .upload-form {
        margin-top: 20px;
    }
</style>
