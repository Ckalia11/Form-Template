<?php
require_once('Files/form/load.php');
require_once('Files/form/header.php');

// connection to database 
$connection = new mysqli ($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$result= mysqli_query($connection,"SELECT description, filename FROM upload ORDER BY ID desc");

if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}
?>
<div>
  <h4 class = "upload-table-header">All Uploaded Files</h4>
</div>

<div class = "container-fluid upload-table">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">File Description</th>
      <th scope="col">File Name</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $row_id = 1;
  while ($row = mysqli_fetch_array($result)):
    $files_field= $row['filename'];
    $files_show= "Uploads/$files_field";
    $description_value= $row['description'];

    // Truncate description if it exceeds a certain length
    $max_description_length = 40;
    $truncated_description = strlen($description_value) > $max_description_length ? substr($description_value, 0, $max_description_length) . '...' : $description_value;

    // Truncate file name if it exceeds a certain length
    $max_filename_length = 25;
    $truncated_filename = strlen($files_field) > $max_filename_length ? substr($files_field, 0, $max_filename_length) . '...' : $files_field;

    $files_link = '<a href="' . $files_show. '">'. $truncated_filename .'</a>';

  ?>
    <tr>
        <th scope="row"><?php echo $row_id ?></th>
        <td><?php echo $truncated_description; ?></td>
        <td><?php echo $files_link ?></td>
    </tr>
    <?php $row_id++; ?>
  <?php endwhile; ?>
  </tbody>
</table>
</div>
