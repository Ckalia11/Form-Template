<?php
      
  // error checking for phone number field
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["phone_number"])) {
        $phone_numberErr = " * Phone Number is required"; 
      } else {
        // $phone_number = test_input($_POST["phone_number"]);
        $phone_number = $_POST["phone_number"];
        // removes all characters except digits, plus and minus sign.
        if (!filter_var($phone_number, FILTER_SANITIZE_STRING )) { 
          $phone_numberErr = " * Invalid Phone Number"; 
        }
        if(!(strlen($phone_number) == 12)){
          $phone_numberErr = " * Invalid phone number length";
      }
      if ((preg_match('/\s/',$phone_number) )){
        $phone_numberErr = " * Please remove white spaces";
      }
    }
  }
