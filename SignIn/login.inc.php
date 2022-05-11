<?php
if(isset($_POST["loginsubmit"])){
	$email 	= $_POST["loguid"];
	$pwd 	= $_POST["logpwd"];
	
	require_once('dbh.inc.php');//php tags closed in file
	require_once('functions.inc.php');//phptags closed in file
	
	if(emptyInputLogin($email, $pwd) !== false){
		header("location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Register.php?error=emptyinput");
		exit();
	}
	loginUser($conn, $email, $pwd); 
}
else{
	header("Location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Profile.php");
	exit();
}