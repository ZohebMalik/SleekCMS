<?php
// Database config
$host = "127.0.0.1"; // Your database host, normally localhost
$user = "root"; // Database username
$password = "4uW8LEVNp4E"; // Your database password
$database = "hotel"; // The name of the database on your server




mysql_connect($host, $user, $password) or die(mysql_error()); 
mysql_select_db($database) or die(mysql_error()); 

?>