<?php 

#function addGame($conn,$gameName,$devName,$gameAge,$gameYear,$gameGenre,$gameDescription,$gamePlatform,$gameCondition,$gameLendPrice,$Owner,$image)
function addGame($conn,$gameName,$devName,$gameAge,$gameYear,$gameGenre,$gameDescription,$gamePlatform,$gameCondition,$gameLendPrice,$Owner,$Picture)
{
    #$query = "INSERT INTO GameDataNew(Game_Name, Developer, Age_Rating, YearReleased, Genre, Platform, Price_Rent) VALUES(?,?,?,?,?,?,?);";
	$query = "INSERT INTO GameDataNew(Game_Name, Developer, Age_Rating, YearReleased, Genre, Descript, Platform, Cond, Price_Rent, Own, Picture) VALUES(?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);


    if(!mysqli_stmt_prepare($stmt,$query)){ //check if it going to fail
		header("location:../games_page/games_page.php?error=stmtsignfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt,"sssssssssss",$gameName,$devName,$gameAge,$gameYear,$gameGenre,$gameDescription,$gamePlatform,$gameCondition,$gameLendPrice,$Owner,$Picture);
	#mysqli_stmt_bind_param($stmt,"ssssssssss",$gameName,$devName,$gameAge,$gameYear,$gameGenre,$gameDescription,$gamePlatform,$gameCondition,$gameLendPrice,$owner,$picture);
	mysqli_stmt_execute($stmt); //checking if the user in in the databse
	mysqli_stmt_close($stmt);
	
	header("location:../games_page/games_page.php?error=none");
	exit();
}
?>