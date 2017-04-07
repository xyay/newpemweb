<?php
session_start();
$host = "localhost";
$user = "";
$pass = "";
$dbnm = "db_userdata";
 
$conn = mysql_connect($host, $user, $pass);
$open = mysql_select_db($dbnm, $conn);

if (!$conn){
	die("Failed Connected to database");
}

else{
	echo("Success Connected to database");
}

?>
