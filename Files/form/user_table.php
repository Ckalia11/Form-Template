<?php require_once('../Files/form/load.php'); 
global $results;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <title>HTML Form Tutorial - Display</title>
    </head>
    <body style="max-width: 900px;">
        <?php    
if ( ! function_exists( '_e' ) ) {
    function _e($string) {
        echo htmlentities($string, ENT_QUOTES | ENT_HTML5, 'UTF-8'); // prevents against XSS attacks
    }
}

$mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); // database connection

// OPTION 1: DISPLAY ALL DATA FROM THE TABLE

        // Select all data from database table "user"
        $resource = $mysql->query("SELECT * FROM user");

        while($row = $resource->fetch_object()) {
            $results[] = $row;
        }

     

// OPTION 2: DISPLAY ONE ROW FROM THE TABLE

        // $name = 'Lovejoy';
        // $stmt = $mysql->prepare("SELECT * FROM user WHERE name = ?");
        // $stmt->bind_param('s', $name);
        // $stmt->execute();
        // $joy = $stmt->get_result();
        
        // while($row = $joy->fetch_object()) {
        //     $results[] = $row;
           
        // }

        ?>
        <!--  display column titles from database -->
        <table class="table users">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Radio Button</th>
                    <th>Checkbox</th>
                    <th>Dropdown</th>
                    <th>Text Box</th>
                </tr>
            </thead>
            <!-- display column information from database -->
            <tbody>
                <?php foreach ( $results as $result ) : ?>
                    <tr>
                        <!-- "_e" calls function from above -->
                        <td><?php _e($result->name); ?></td>
                        <td><?php _e($result->email); ?></td>
                        <td><?php _e($result->phone_number); ?></td>
                        <td><?php _e($result->radio_button); ?></td>
                        <td><?php _e(implode(', ', unserialize($result->checkbox))); ?></td>
                        <td><?php _e($result->country); ?></td>
                        <td><?php _e($result->text_box); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
            <!-- displays column titles again -->
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Radio Button</th>
                    <th>Checkbox</th>
                    <th>Dropdown</th>
                    <th>Textbox</th>
                </tr>
            </tfoot>
        </table>
    </body>
</html>