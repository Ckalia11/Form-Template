
<?php
 function test_input($data) {
    $data = trim($data); // strips whitespace from beggining/end of string
    $data = stripslashes($data); // un-quotes a quoted string
    $data = htmlspecialchars($data); //  converts predefined characters to HTML entities to prevent form XSS attacks
    return $data;
}

if (!empty($_POST)){
    $form_action = $_POST['form_action'];
    $timestamp = $_POST['timestamp'];
    $form_hash = $_POST['form_hash'];
    }
    
    $time = time();
    $action = 'submit_form';
    $str = sprintf('%s_%s_%s', $action, $time, NONCE_SALT);
    $hash = hash('sha512', $str);
    $calc_str = sprintf('%s_%s_%s', $form_action, $timestamp, NONCE_SALT);
    $calc_hash = hash('sha512', $calc_str);

    