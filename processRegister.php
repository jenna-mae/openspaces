<?php
session_start();
include("classes/Db.php");
include("classes/User.php");

$email = $_POST["email"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];
$password = $_POST["password"];
$encPass = password_hash($password, PASSWORD_DEFAULT);
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];

$oUser = new User();
$checkEmail = $oUser->checkExists("email", $email);
$checkUsername = $oUser->checkExists("username", $username);

// echo ($checkUsername);

if($checkEmail||$checkUsername) {
    header("location: register.php?error");
    // echo "username or email already exists";
} else {
    $oUser->register($email, $firstName, $lastName, $username, $encPass, $birthday, $gender);
}

?>