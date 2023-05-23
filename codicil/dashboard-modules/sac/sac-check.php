<?php
function sac_check() {
    // Retrieve the $sac_array variable from the database
    $sac_array = get_option('sac_array');

    // Check if the array is empty or null
    if (empty($sac_array)) {
        return 'Service area is not configured.';
    }

    // Output the HTML form
    ob_start();
    ?>
    <form id="sac-form">
        <div><input type="text" name="sac-entry" id="sac-entry" inputmode="numeric" pattern="[0-9]*" maxlength="5" required></div>
        <button type="submit" id="sac-entry-sumbit" class="btn btn-wide btn-primary" style="margin-top:100px">Submit</button>
        <div id="result"></div>
    </form>

    <script>
        // Get references to the form, text field, submit button, and result div
        var form = document.getElementById('sac-form');
        var textField = document.getElementById('sac-entry');
        var submitButton = document.getElementById('sac-entry-sumbit');
        var resultDiv = document.getElementById('result');
        var sacArray = <?php echo json_encode($sac_array); ?>;

        // Listen for form submissions
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            checkValue();
        });p

        // Listen for return key press on text field
        textField.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                checkValue();
            }
        });

        // Listen for input event on text field
        textField.addEventListener('input', function(event) {
            // Remove non-numeric characters
            var value = textField.value.replace(/[^0-9]/g, '');

            // Limit input to 5 digits
            if (value.length > 5) {
                value = value.substr(0, 5);
            }

            // Update the value of the text field
            textField.value = value;
        });

        function checkValue() {
    // Get the value of the text field
    var value = textField.value.trim();

    // Check if the value is in the array
    if (sacArray.includes(value)) {
        // Trigger a click event on the 'lfb_btn-next' button
        var nextButton = document.querySelector('.lfb_btn-next');
        nextButton.click();
    } else {
        // Redirect the user to 'not-in-service-area' URL
        window.location.href = 'https://www.example.com/not-in-service-area';
    }
}


    </script>
    <?php
    return ob_get_clean();
}
