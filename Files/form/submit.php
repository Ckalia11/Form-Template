   <?php
   if ($calc_hash == $form_hash){

    //input validation
      $input_validation_path = __DIR__.'/../error_handling/input_validation/';
      require_once($input_validation_path.'test_input_function.php');
      require_once($input_validation_path.'name.php');
      require_once($input_validation_path.'email.php');
      require_once($input_validation_path.'phone_number.php');
      require_once($input_validation_path.'radio_button.php');
      require_once($input_validation_path.'checkbox.php');
      require_once($input_validation_path.'text_box.php');
      require_once($input_validation_path.'dropdown.php');
      require_once($input_validation_path.'description.php');
      require_once($input_validation_path.'file.php');

      
        // if errors are returned, connection won't be made to MYSQL database
      if( $nameErr || $emailErr || $phone_numberErr || $radio_buttonErr || $checkboxErr || $countryErr|| $text_boxErr || $descriptionErr || $fileErr ){
        }
        
        else{
            // move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
            // chmod( $target_file, 0644 ); // security precaution
      
          // database connection
          $mysqli = new mysqli ($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
            
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

          //insert into database table "upload"
        if(!empty($description)){
          $query = "INSERT INTO upload (description, filename) VALUES ('$description', '$myname')";
          $execute= $mysqli->query( $query );
          }
        
         // close connection
        $stmt->close();
        
        mysqli_close($mysqli);

        // Clear form fields
        $name = '';
        $email = '';
        $phone_number = '';
        $radio_button = '';
        $checkbox = [];
        $country = '';
        $text_box = '';
        $description = '';

        // Redirect to a different page after processing
        header("Location: ./thank-you.php");
        exit(); 

        }
      }
      else {
        $insert= false;
      }
      ?>
