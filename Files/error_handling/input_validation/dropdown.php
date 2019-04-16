<?php
     // error checking for dropdown list
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["country"])) {
        $countryErr = " * Dropdown selection is required"; 
      } else {
        $country = test_input($_POST["country"]);
        if (!filter_var($country, FILTER_SANITIZE_STRING)) {
          $countryErr = " * Invalid Selection"; 
        }
      }
    }
