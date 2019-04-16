<?php
require_once('c://xampp_2/htdocs/Form/Files/form/load.php');


// connection to database 
$connection = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
$result= mysqli_query($connection,"SELECT description, filename FROM upload ORDER BY ID desc");

// displays table with uploaded files
print "<table border=1>\n"; 
while ($row = mysqli_fetch_array($result)){ 
$files_field= $row['filename'];
$files_show= "/form/Uploads/$files_field";
$descriptionvalue= $row['description'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 

?> 
