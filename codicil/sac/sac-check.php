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
        <input type="text" name="sac-entry" id="sac-entry" inputmode="numeric" pattern="[0-9]*" maxlength="5" required>
        <button type="submit" id="sac-entry-sumbit">Submit</button>
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
        });

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
                resultDiv.innerHTML = 'Value is in the array!';
            } else {
                resultDiv.innerHTML = 'Value is not in the array.';
            }
        }
    </script>
    <?php
    return ob_get_clean();
}
