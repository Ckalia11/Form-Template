<?php
function test_input($data) {
    $data = trim($data); // strips whitespace from beggining/end of string
    $data = stripslashes($data); // un-quotes a quoted string
    $data = htmlspecialchars($data); //  converts predefined characters to HTML entities to prevent form XSS attacks
    return $data;
}