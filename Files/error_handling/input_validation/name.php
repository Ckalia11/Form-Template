<?php
    // error checking for name field
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) { 
      $nameErr = " * Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // removes tags from name
      if (!filter_var($name, FILTER_SANITIZE_STRING)) { 
        $nameErr = " * Invalid name format"; 
      }
    }
}
