<?php
define('DB_SERVER','3.143.195.202');
define('DB_USER','root');
define('DB_PASS' ,'kushagra');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
