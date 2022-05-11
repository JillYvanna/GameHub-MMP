<?php
    if(isset($_POST["submit"]))
    {
        $consoleName = $_POST["Console_Name"];
        $brand = $_POST["Brand"];
        $type = $_POST["Type_"];
        $year = $_POST["Year_"];
        $generation = $_POST["Generation"];
        $country = $_POST["Country"];
        $gameCondition = $_POST["Cond"];
        $gameLendPrice = $_POST["Price_Rent"];
        $Picture = $_POST["Picture"];

        require_once ('console-function-inc.php');
        require_once ('console-dbh-inc.php');
        addConsole($conn,$consoleName,$brand,$type,$year,$generation,$country,$gameCondition,$gameLendPrice,$Picture);
    }
?>