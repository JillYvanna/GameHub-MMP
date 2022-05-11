<?php 


function addConsole($conn,$consoleName,$brand,$type,$year,$generation,$country,$gameCondition,$gameLendPrice,$Picture)
{
    $query = "INSERT INTO ConsoleData(Console_Name, Brand, Type_, Year_, Generation, Country, Cond, Price_Rent, Picture) VALUES(?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);


    if(!mysqli_stmt_prepare($stmt,$query)){ //check if it going to fail
		header("location:../console_page/console_page.php?error=stmtsignfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt,"sssssssss",$consoleName,$brand,$type,$year,$generation,$country,$gameCondition,$gameLendPrice,$Picture);
	mysqli_stmt_execute($stmt); //checking if the user in in the databse
	mysqli_stmt_close($stmt);
	
	header("location:../console_page/console_page.php?error=none");
	exit();
}
?>