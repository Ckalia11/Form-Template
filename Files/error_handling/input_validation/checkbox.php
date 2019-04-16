<?php
    // error checking for checkbox
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST["checkbox"])) {   
          $checkboxErr = " * Checkbox must be selected"; 
        }
        else{
          $checkbox = $_POST['checkbox'];
          foreach(array_keys($checkbox) as $check){
            $filter_checkbox[] = filter_var($check, FILTER_SANITIZE_STRING);
        }
        $serialized_filter_checkbox = serialize($filter_checkbox); // stores array in a variable
        // $function_checkbox = test_input($serialized_filter_checkbox);
        }
}

