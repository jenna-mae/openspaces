<?php

session_start();
include("classes/Db.php");
include("classes/User.php");
include("classes/Space.php");
$oUser = new User();
$loggedUser = $oUser->checkLogin();

$host = $loggedUser["id"];

$name = $_POST["name"];
$category = $_POST["category"];
$date = $_POST["date"];

$startTime = $_POST["startTime"];
$endTime = $_POST["endTime"];
$description = $_POST["description"];
$link = $_POST["link"];

$oSpace = new Space;
$createSpace = $oSpace->create($name, $category, $date, $description, $host, $startTime, $endTime, $link);

echo($createSpace);

// header("location: dashboard.php/success")

?>