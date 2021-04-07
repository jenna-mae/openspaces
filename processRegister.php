<?php

include("classes/Db.php");
include("classes/User.php");

$email = $_POST["email"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["userName"];
$password = $_POST["password"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];

$oUser = new User();
$checkEmail = $oUser->checkExists("email", $email);
$checkUsername = $oUser->checkExists("username", $username);

if(!$checkEmail&&!$checkUsername) {
    $oUser->register($email, $firstName, $lastName, $username, $password, $birthday, $gender);
} else {
    header("location: register.php")
}

?>