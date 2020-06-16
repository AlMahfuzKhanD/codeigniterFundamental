<link rel="stylesheet" href="<?= base_url("resources/css/intl-tel-input/intlTelInput.css");?>">
<!-- Somewhere in your code -->
<input name="phone" id="phone" class="form-control" type="phone" required>

<!-- Your scripts place -->
<script src="<?= base_url("ressources/js/intl-tel-input/intlTelInput.js"); ?>"></script>
<script>
    // Initialization
    var input = document.querySelector("#phone");
    var intl = window.intlTelInput(input);
    // Assuming that the submit button of your form is IDed by '#quote_form'
    $('#quote_form').submit(function(event) {
        var input = $('#phone');
        // My custom check
        if ( (input.val().length == 10 && input.val().startsWith('0')) ||
            (input.val().length == 9 && !input.val().startsWith('0'))) {
           // Here, before submitting the form, I changed the input value 
           // by what the plugin provides 
           // (which include the country code and the without-zero phone number)
           // The value may be +24381234567
           input.val(intl.getNumber());
        }
        else {
            // In the case when the user types an invalid phone number
            // But you can do more by displaying a error message
            event.preventDefault();
        }
    });
</script>
