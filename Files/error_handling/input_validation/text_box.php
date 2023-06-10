<?php
        // error checking for text box
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["text_box"])) {
        $text_boxErr = " * Textbox entry is required";
      } else {
        $text_box = test_input($_POST["text_box"]);
        if (!filter_var($text_box, FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
          $text_boxErr = " * Invalid Selection"; 
        }
      }
    } 
