<?php

include("classes/Db.php");
include("classes/User.php");

$username = $_POST["userName"];
$password = $_POST["password"];

$oUser = new User();
$oUser->login($username, $password);

?>