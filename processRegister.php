<?php

include("classes/Db.php");
include("classes/User.php");

$email = $_POST["email"];
$username = $_POST["userName"];
$password = $_POST["password"];

$oUser = new User();
$oUser->register($email, $username, $password);

?>