<?php

function emptyInputSignup($name, $sname, $email, $mobile, $pwd, $pwdRepeat){
	$result;
	if(empty($name)|| empty($sname)||empty($email) || empty($mobile)||empty($pwd)||empty($pwdRepeat)){
		$result= true;
	}
	else{
		$result = false;
	}
	return $result;
}
function invalidUid($username){
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){//search algorithm
		$result= true;
	}
	else{
		$result = false;
	}
	return $result;
}
function invalidMobile($mobile){ #checks if numbers
	$result;
	if(is_numeric($mobile)){
		$result= false;
	}
	else{
		$result = true;
	}
	return $result;

}

function pwdMatch($pwd,$pwdRepeat){
	$result;
	if($pwd !== $pwdRepeat){
		$result= true;
	}
	else{
		$result = false;
	}
	return $result;
}
function uidExists($conn,$mobile,$email){
	$sql = "SELECT * FROM gamehubsignup WHERE mobileNumber = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn); //initializing a statement
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Register.php?error=stmtfailed");
		exit();
	} 
	
	mysqli_stmt_bind_param($stmt,"ss",$mobile,$email);
	mysqli_stmt_execute($stmt); //checking if the user in in the databse
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}
	else{
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $email, $password, $mobile){//For signup\
	$role = 'User';
	echo("<h1> Reached function</h1>");
	$sql = "INSERT INTO gamehubsignup(forename, surname, email, usersPwd, mobileNumber, position) VALUES(?,?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Register.php?error=createstmtfailed");
		exit;
	}else{
	
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "ssssss", $firstName, $lastName, $email, $hashedPassword, $mobile, $role);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Register.php?error=none");
	exit();
	}
}

function emptyInputLogin($email, $pwd){
	$result;
	if(empty($email)||empty($pwd)){
		$result= true;
	}
	else{
		$result = false;
	}
	return $result;
}


//getAllData to allow session when logged in for other functions that call on row of data
function getAllData($email, $usersPwd){
	require "dbh.inc.php";
	$query = "SELECT * from gamehubsignup where email = '$email';";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_all($result, MYSQLI_ASSOC);	
	if(is_array($row)){
		$row = $row[0];
		 if($usersPwd === $row->usersPwd){
			 return [$row, true];
		 }else{
			 return(
			 $errors[] = "Invalid Email");
		 }


}

}
function loginUser($conn, $email, $pwd){
	$uidExists = uidExists($conn, $email, $email);
	
	if($uidExists === false){
		header("location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Register.php?error=wronglogin");
		exit();
	}
	$pwdHashed = $uidExists["usersPwd"];
	$checkPwd = password_verify($pwd,$pwdHashed);
	
	if($checkPwd === false){
		header("location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Register.php?error=wronglogin");
		exit();
	}
	else if($checkPwd === true){ //Calling for sessions
		session_start();
		[$_SESSION['USER'], $_SESSION['LOGGED_IN']] = getAllData($email, $pwd);
		$_SESSION["userID"] = $uidExists["userID"];
		$_SESSION["email"] = $uidExists["email"];
		
		
		header("location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Profile.php");
		exit();
		
	}
} 

#From Sanu Verification ##
function check_login($redirect = true){
    if(isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN']))
    {
        return true;
    }
    if($redirect){
        header("Location: https://mi-linux.wlv.ac.uk/~1800168/GameHub/SignIn/Verify.php");
        die;
    }else{
        return false;
    }
    
}
function database_run($query, $vars = array()){
/*
	#MYSQLI Connection
	require "dbh.inc.php";

    //make the connection
   	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $query)){ //replaces $stm = $conn->prepare($query);
		return false;
	}else{
	mysqli_stmt_execute($vars); //replaces  $check = $stm->execute($vars);
	$check = mysqli_stmt_close($stmt);
	if($check){
        $data = $stm->fetchAll();
        if(count($data)>0){
            return $data;
        }
    }
	return false;
	
	}
	*/
	
	// PDO VERSION

    //check to see the connection work
    $conn = new PDO("mysql:host=localhost;dbname=db2007780", "2007780", "Aishaarif.123");

    //check to see the connection work
    if (!$conn){
        return false;
    }
     //run
    $stmt = $conn->prepare($query);
    $check = $stmt->execute($vars);

    

    if($check){
        $data = $stmt->fetchAll(PDO:: FETCH_OBJ);
        if(count($data)>0){
            return $data;
        }
    }

    return false;

	



}



function checked_verified(){
    $id = $_SESSION['userID']->id;
    $query = "SELECT * from gamehubsignup where id = '$id' limit 1"; //change users
    $row = database_run($query);

    if(is_array($row)){
        $row = $row[0];

        if($row->email == $row->email_verified){ //change email
            return true;
        }
        return false;
    }
    
}

?>
