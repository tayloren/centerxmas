<?php
$localhost = 'localhost'; //name of server. Usually localhost
$database = 'center_xmas'; //database name.
$username = 'nick'; //database username.
$password = 'putter13'; //database password.

// connect to db
$conn = mysql_connect($localhost, $username, $password) or die('Error connecting to mysql');   
$db = mysql_select_db($database,$conn) or die('Unable to select database!');

?>
