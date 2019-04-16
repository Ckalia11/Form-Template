<?php
    // error checking for radio button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["radio_button"])) {
            $radio_buttonErr = " * Radio Button must be selected"; 
          } else {
            $radio_button = test_input($_POST["radio_button"]);
            if (!filter_var($radio_button, FILTER_SANITIZE_STRING )) {
              $radio_buttonErr = " * Invalid Selection"; 
            }
          }
        }
