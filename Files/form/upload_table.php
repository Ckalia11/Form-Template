<?php
require_once('load.php');
require_once('header.php');

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
    $files_show= "../../Uploads/$files_field";
    $files_link = '<a href="' . $files_show. '">'. $files_field .'</a>';
    $descriptionvalue= $row['description'];
  ?>
    <tr>
        <th scope="row"><?php echo $row_id ?></th>
        <td><?php echo $descriptionvalue; ?></td>
        <td><?php echo $files_link ?></td>
    </tr>
    <?php $row_id++; ?>
  <?php endwhile; ?>
  </tbody>
</table>
</div>
