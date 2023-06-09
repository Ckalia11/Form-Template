<?php
// define("DB_NAME", "Form");
// define("DB_USER", "root");
// define("DB_PASS", "");
// define("DB_HOST", "localhost");
define("NONCE_SALT", "INSERT RANDOM STRING");

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));


$DB_HOST = $cleardb_url["host"];
$DB_USER = $cleardb_url["user"];
$DB_PASS = $cleardb_url["pass"];
$DB_NAME = substr($cleardb_url["path"],1);
echo '<h1>'.$DB_NAME.'</h1>';
echo '<h1>'.$DB_USER.'</h1>';

$active_group = 'default';
$query_builder = TRUE;
