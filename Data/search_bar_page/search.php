<?php
//settings
define("DB_HOST", "localhost");
define("DB_NAME", "db2007780");
define("DB_CHARSET", "utf8");
define("DB_USER", "2007780");
define("DB_PASSWORD", "Aishaarif.123");

//connect to database
$pdo = new PDO(
	"mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
	DB_USER, DB_PASSWORD, [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	]
);

//search
$stmt = $pdo->prepare("SELECT * FROM `GameDataNew` WHERE `Game_Name` LIKE ? OR `Developer` LIKE ? OR `Price_Rent` LIKE ? OR `Age_Rating` LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%", "%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();

//LIKE ? OR 'email' LIKE ?"