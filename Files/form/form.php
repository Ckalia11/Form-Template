
    <form action="" method="post" enctype="multipart/form-data">
    <?php require_once(__DIR__.'/messages.php'); ?>
     
    <!-- hidden input fields used for form validation -->
     <input type="hidden" name="timestamp" value="<?php echo $time; ?>">
      <input type="hidden" name="form_action" value="<?php echo $action; ?>">
      <input type="hidden" name="form_hash" value="<?php echo $hash; ?>">

      <!-- name input field -->
          <h3 id ="name_title" class="title">Name</h3>
          <input type="text" class="text" name="name" placeholder="Enter your name" value ="<?php echo $name;?>">
          <p class = "error"><?php echo $nameErr;?></p>
      
      <!-- email input field -->
      
          <h3 id ="email_title" class="title">Email</h3>
          <input type="email" class="text" name="email" placeholder="Enter your email" value = "<?php echo $email;?>">
          <br>
          <p class = "error"><?php echo $emailErr;?></p>
      
      <!-- phone number input field -->
      
          <h3 id ="phone_number" class="title">Phone Number</h3>
          <input type="phone" class ="text" name="phone_number" placeholder = "Enter your phone number in the format (xxx)-(xxx)-(xxxx)" value = "<?php echo $phone_number;?>">
          <p class = "error"><?php echo $phone_numberErr;?></p>
      

      <!-- radio buttons -->

          <h3 id ="radio_title" class="title">Radio Button</h3>
          <div class="r_button">
          <label for="radio_one">Option One</label>
          <input type="radio" class="radio" id="radio_one" name="radio_button"  <?php if (isset($radio_button) && $radio_button=="Option One") echo "checked";?> value="Option One" checked >
          <label for="radio_two">Option Two</label>
          <input type="radio" class="radio" id="radio_two" name="radio_button" <?php if (isset($radio_button) && $radio_button=="Option Two") echo "checked";?> value="Option Two">
          <label for="radio_three">Option Three</label>
          <input type="radio" class="radio" id="radio_three" name="radio_button" <?php if (isset($radio_button) && $radio_button=="Option Three") echo "checked";?> value="Option Three">
          </div>
          <p class = "error"><?php echo $radio_buttonErr;?></p>
          
    

      <!-- checkboxes -->

          <h3 id = "checkbox_title" class="title">Checkbox</h3>
          <div class="c_button">
          <label for="checkbox_one">One</label>
          <input type="checkbox" class="checkbox" id="checkbox_one" name="checkbox[one]" value="1" checked  >
          <label for="checkbox_two">Two</label>
          <input type="checkbox" class="checkbox" id="checkbox_two" name="checkbox[two]"   value="2" >
          <label for="checkbox_three">Three</label>
          <input type="checkbox" class="checkbox" id="checkbox_three" name="checkbox[three]" value="3" >
          </div>
          <p class = "error"><?php echo $checkboxErr;?></p>
     
      
      <!-- dropdown menu-->
      
      <h3 id = "dropdown_title" class="title">Dropdown Menu</h3>
      <label>Select a country</label> <br>
        <select name="country" class="select"> 
            <option value="" class = "opt"><?php echo $country;?></option>
            <?php foreach ( $countries as $country ) : ?>
                <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
            <?php endforeach; ?>
        </select> <br/>
        <p class = "error"><?php echo $countryErr;?></p>
           
       <!-- textbox -->
          <h3 id = "box_title" class="title">Text Area</h3>
          <textarea placeholder="Enter some text" class="textarea" name = "text_box" maxlength = "200"><?php echo $text_box;?></textarea>
          <p class = "error"><?php echo $text_boxErr;?></p>
      
      <!-- file upload -->
      <h3 id = "file_title" class="title">File</h3>
      <label>Description</label> <br>
      <input type="text" class ="text" name="description_entered" placeholder = "Enter a file description" value = "<?php echo $description;?>"><br> 
      <p class = "error"><?php echo $descriptionErr;?></p>
      <input type="file" name="file"/> <br>
      <p class = "error"><?php echo $fileErr;?></p>
      <br>
      
      <!-- submit button -->
<input type="submit" value = "Submit" class = "button" name = "submit">            
   </form>