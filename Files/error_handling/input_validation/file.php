<?php
     $myname= $_FILES['file']['name']; // file name
        
     $tmp_name= $_FILES['file']['tmp_name'];  // temporary storage of file
 
     $target_dir= 'c://xampp_2/htdocs/form/Uploads/'; //permanent storage of file
 
     $target_file = $target_dir . basename($myname);
 
     $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
  //    if (file_exists($target_file)) {
  //      $fileErr =  "The file already exists";
  //  }
 
   if ($_FILES["file"]["size"] > 5000000) { // cannot be larger than 5mb
     $fileErr =  "The file is too large.";
 }
 
 if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg"
 && $FileType != "gif" && $FileType != 'pdf' ) {
     $fileErr = " Only JPG, JPEG, PNG, GIF, and pdf files are allowed.";
 }
