<?php

define('URL','http://localhost/DashboardApp');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','dashboard')

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD)or die(mysqli_error()); //con to database
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //database name
?>