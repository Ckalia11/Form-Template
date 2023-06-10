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
   foreach ( $results as $result ) : ?>
    <tr>
        <th scope="row"><?php echo $row_id ?></th>
        <td><?php _e($result->name); ?></td>
        <td><?php _e($result->email); ?></td>
        <td><?php _e($result->phone_number); ?></td>
        <td><?php _e($result->radio_button); ?></td>
        <td><?php _e(implode(', ', unserialize($result->checkbox))); ?></td>
        <td><?php _e($result->country); ?></td>
        <td><?php _e($result->text_box); ?></td>
    </tr>
    <?php $row_id++; ?>
    <?php endforeach;
   }
   ?>
  </tbody>
</table>
</div>