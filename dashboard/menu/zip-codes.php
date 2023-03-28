<div class="wrap">
    <h1>Zip Codes</h1>
    <p>Changes the Zip Code Array</p>
</div>
<?php
//include_once( 'zip-validation-array.php' ); // Include the validation function
//include_once( 'zip-validation-submit.php' ); // Include the validation submit code

function handle_csv_upload() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'Unauthorized user' );
    }
    
    if ( ! isset( $_FILES['csv_file'] ) || $_FILES['csv_file']['error'] !== UPLOAD_ERR_OK ) {
        wp_die( 'File upload failed' );
    }
    
    // Move uploaded file to your desired folder
    $file_name = 'valid_numbers.csv'; // Set the file name to a fixed value
    $upload_dir = plugin_dir_path( __FILE__ ) . 'assets/csv/';
    $file_path = $upload_dir . $file_name;
    move_uploaded_file( $_FILES['csv_file']['tmp_name'], $file_path );
    
    // Redirect back to the options page
    wp_redirect( admin_url( 'admin.php?page=hestia-zip-code-options' ) );
    exit;
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['submit_csv'] ) ) {
    // Handle CSV file upload
    handle_csv_upload();
}

function zip_form() {
    ob_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] == UPLOAD_ERR_OK) {
            // Get the uploaded file's temporary name and move it to your plugin directory
            $tmp_file_path = $_FILES['csv_file']['tmp_name'];
            $csv_file_path = plugin_dir_path(__FILE__) . 'assets/csv/valid_numbers.csv';
            move_uploaded_file($tmp_file_path, $csv_file_path);
            echo '<div class="notice notice-success is-dismissible"><p>CSV file uploaded successfully!</p></div>';
        }
    }
    ?>
    <div id="csv-form-wrapper">
    <form action="<?php echo admin_url( 'admin-post.php' ); ?>" method="post" enctype="multipart/form-data">
    <label>Upload CSV file:</label>
    <input type="file" name="csv_file">
    <input type="hidden" name="action" value="upload_csv">
    <input type="submit" name="submit_csv" value="Upload CSV">
    </form>

    </div>
    <?php
    return ob_get_clean();
}
echo zip_form(); // Call the function to output the HTML code for both forms
?>

