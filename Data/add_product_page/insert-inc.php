<?php
    if(isset($_POST["submit"]))
    {
        $gameName = $_POST["Game_Name"];
        $devName = $_POST["Developer"];
        $gameAge = $_POST["Age_Rating"];
        $gameYear = $_POST["YearReleased"];
        $gameGenre = $_POST["Genre"];
        $gameDescription = $_POST["Descript"];
        $gamePlatform = $_POST["Platform"];
        $gameCondition = $_POST["Cond"];
        $gameLendPrice = $_POST["Price_Rent"];
        $Owner = $_POST["Own"];
        $Picture = $_POST["Picture"];

        require_once ('function-inc.php');
        require_once ('dbh-inc.php');
        #addGame($conn,$gameName,$devName,$gameAge,$gameYear,$gameGenre,$gameDescription,$gamePlatform,$gameCondition,$gameLendPrice,$Owner,$image);
        addGame($conn,$gameName,$devName,$gameAge,$gameYear,$gameGenre,$gameDescription,$gamePlatform,$gameCondition,$gameLendPrice,$Owner,$Picture);
    }
?>