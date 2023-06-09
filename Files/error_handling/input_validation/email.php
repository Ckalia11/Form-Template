<?php
    // error checking for email feild
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = " * Email is required"; 
      } else {
        $email = test_input($_POST["email"]);
        // removes unwanted chars including blank space
        $email = filter_var($email, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // check if e-mail address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = " * Invalid email format"; 
        }
      }
    }
