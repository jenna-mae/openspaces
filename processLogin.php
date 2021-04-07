<?php
session_start();

include("classes/Db.php");
include("classes/User.php");

$username = $_POST["username"];
$password = $_POST["password"];

$oUser = new User();
$oUser->login($username, $password);

?>