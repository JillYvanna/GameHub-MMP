<?php

$server = "localhost";
$username = "2007780";
$password = "Aishaarif.123";
$dbname = "db2007780";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("connection failed Not working at all".mysqli_connect_error());
}
   
 ?>