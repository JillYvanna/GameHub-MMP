<?php

//contains n inputing data into the database and also retrieving data from the database
$servername = "localhost";
$dbuser 	= "2007780";
$dbpass 	= "Aishaarif.123";
$dbname	 	= "db2007780";

$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);

if(!$conn){
	die("Failed to connect to SQL: ".mysqli_connect_error());
} 
//mysqli_close($conn);

?>