<?php
///modify difine() below to your personal connection 

define('DBS_USER','root');
define('DBS_PASSWORD','');
define('DBS_HOST', 'localhost');
define('DBS_NAME', '');

@$conn = new mysqli(DBS_HOST, DBS_USER, DBS_PASSWORD, DBS_NAME);

if($conn->connect_error){
	die("could not connect to MySQL:".$conn->connect_error);
}

mysqli_set_charset($conn, 'utf-8');


?>
