<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// dev config
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'resume');
 
// web config
// define('DB_SERVER', 'remotemysql.com');
// define('DB_USERNAME', 'P1YSKxdpA5');
// define('DB_PASSWORD', 'tSqHO3CByM');
// define('DB_NAME', 'P1YSKxdpA5');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>