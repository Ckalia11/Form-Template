# Form Template

## About
This repository contains a secure PHP form template that can be used for various purposes. The form includes several distinct features and provides robust validation mechanisms for both form and input data. Users are presented with intuitive messages for better usability.

To ensure security, the form has implemented measures against SQL Injection and Cross-Site Scripting attacks. These include data sanitization/escaping, prepared statements, and a secure hashing algorithm.

Form data is securely stored in a MySQL database. Additonally, the form is delivered through a responsive and cross-platform user interface, leveraging HTML5, CSS3, and Bootstrap. Each component of the form and its respective validation logic is stored in separate file, which are then required in the index.php file. This modular structure allows for easy modification of any form component.

**View a Live Demo: [here](https://template-form-1ad8efaf3080.herokuapp.com/)**

Feel free to explore the live demo and utilize this template form for your specific needs

# How to Use

## Prerequisites
- XAMPP: Download and install XAMPP from the official website (https://www.apachefriends.org/index.html) based on your operating system

## Instructions
- Start Apache and MySQL: In the XAMPP control panel, click the `Start` button next to both Apache and MySQL modules
- Clone this repository and place it inside the `htdocs` directory of your XAMPP installation
- To create a new database for the application, open your web browser and go to http://localhost/phpmyadmin/. Click on `Databases` in the top menu and enter the name `form` for the database in the `Create database` field. Click the `Create` button to create the database
- Click the database you created, and click on the `SQL` tab in the top navigation menu. In the `SQL` tab, click on the `Choose File` button and upload the `database_setup.sql` file in this repository. Click the `Go` button. This will execute the SQL script and create the necessary tables in the database
- Open your web browser and enter `http://localhost/` and you should see the form in your browser


