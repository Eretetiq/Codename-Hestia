jQuery(document).ready(function($) {
  $('#zip-form-wrapper form').on('submit', function(e) {
    e.preventDefault();
    $.post(
      $(this).attr('action'),
      $(this).serialize(),
      function(data) {
        if (data.success) {
          $('#zip-validation-message').html('<p>' + data.message + '</p>');
          $('#zip-form-wrapper form').hide();
        } else {
          $('#zip-validation-message').html('<p>' + data.message + '</p>');
        }
      },
      'json'
    );
  });
});
