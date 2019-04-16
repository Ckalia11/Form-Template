
<?php

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

    