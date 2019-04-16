<?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST['description_entered'])){
              $descriptionErr = " * Description is required";
            }
            else{
              $description= $_POST['description_entered'];
            }
          }
