<?php

   if ($calc_hash == $form_hash){
     
    //input validation
      require_once($error.'test_input_function.php');
      require_once($error.'name.php');
      require_once($error.'email.php');
      require_once($error.'phone_number.php');
      require_once($error.'radio_button.php');
      require_once($error.'checkbox.php');
      require_once($error.'text_box.php');
      require_once($error.'dropdown.php');
      require_once($error.'description.php');
      require_once($error.'file.php');
      
        // if errors are returned, connection won't be made to MYSQL database
      if( $nameErr || $emailErr || $phone_numberErr || $radio_buttonErr || $checkboxErr || $countryErr|| $text_boxErr || $descriptionErr || $fileErr ){
          $message_checkbox = "There are one or more errors with your submission.";
           echo "<script type='text/javascript'>alert('$message_checkbox');</script>";
        }
        
        else{
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            chmod( $target_file, 0644 ); // security precaution
            $upload_message = "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
            echo "<script type='text/javascript'>alert('$upload_message');</script>";
      
          // database connection
          $mysqli = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
          if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error); // database connection check
                exit();
            }
            //insert data into database table "user" 
            // prevents against SQL injection attacks
            $stmt = $mysqli->prepare("
                INSERT INTO user (name,email,phone_number,radio_button,checkbox,country,text_box) 
                 VALUES(?,?,?,?,?,?,?)
                ");
      
        
         $stmt->bind_param("sssssss", 
            $name, $email, $phone_number, $radio_button,
            $serialized_filter_checkbox, $country, $text_box
        );
        
        $insert = $stmt->execute();
      
          //insert into database table "display"
        if(!empty($description)){
          $query = "INSERT INTO upload (description, filename) VALUES ('$description', '$myname')";
          $execute= $mysqli->query( $query );
          }
        
         // close connection
        $stmt->close();
        
        mysqli_close($mysqli);
        }
      
      }
      else {
        $insert= false;
      }
      ?>
      
