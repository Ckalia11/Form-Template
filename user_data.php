<?php 
require_once('Files/form/load.php'); 
require_once('Files/form/header.php');
global $results;

if ( ! function_exists( '_e' ) ) {
    function _e($string) {
        echo htmlentities($string, ENT_QUOTES | ENT_HTML5, 'UTF-8'); // prevents against XSS attacks
    }
}

$mysql = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME); // database connection

// Select all data from database table "user"
$resource = $mysql->query("SELECT * FROM user");  

while($row = $resource->fetch_object()) {
    $results[] = $row;
}

?>

<div>
  <h4 class = "upload-table-header">All User Data</h4>
</div>

<div class = "container-fluid upload-table">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Radio Button</th>
      <th scope="col">Checkbox</th>
      <th scope="col">Dropdown</th>
      <th scope="col">Text Box</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $row_id = 1;
   if (!empty($results)) {
   foreach ( $results as $result ) :
      $name = strlen($result->name) > 20 ? substr($result->name, 0, 20) . '...' : $result->name;
      $email = strlen($result->email) > 20 ? substr($result->email, 0, 20) . '...' : $result->email;
      $phone_number = strlen($result->phone_number) > 15 ? substr($result->phone_number, 0, 15) . '...' : $result->phone_number;
      $radio_button = strlen($result->radio_button) > 15 ? substr($result->radio_button, 0, 15) . '...' : $result->radio_button;
      $checkbox = implode(', ', unserialize($result->checkbox));
      $checkbox = strlen($checkbox) > 20 ? substr($checkbox, 0, 20) . '...' : $checkbox;
      $country = strlen($result->country) > 15 ? substr($result->country, 0, 15) . '...' : $result->country;
      $text_box = strlen($result->text_box) > 20 ? substr($result->text_box, 0, 20) . '...' : $result->text_box;
   ?>
    <tr>
        <th scope="row"><?php echo $row_id ?></th>
        <td><?php _e($name); ?></td>
        <td><?php _e($email); ?></td>
        <td><?php _e($phone_number); ?></td>
        <td><?php _e($radio_button); ?></td>
        <td><?php _e($checkbox); ?></td>
        <td><?php _e($country); ?></td>
        <td><?php _e($text_box); ?></td>
    </tr>
    <?php $row_id++; ?>
    <?php endforeach;
   }
   ?>
  </tbody>
</table>
</div>