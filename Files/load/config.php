<?php
define("NONCE_SALT", "INSERT RANDOM STRING");

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $DB_HOST   = "localhost";
    $DB_USER   = "root";
    $DB_PASS   = "";
    $DB_NAME   = "Form";
  }

  else {
    //Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $DB_HOST = $cleardb_url["host"];
    $DB_USER = $cleardb_url["user"];
    $DB_PASS = $cleardb_url["pass"];
    $DB_NAME = substr($cleardb_url["path"],1);

    $active_group = 'default';
    $query_builder = TRUE;
  }
