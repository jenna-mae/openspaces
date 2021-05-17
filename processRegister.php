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

$checkEmail = User::checkExists("email", $email);
$checkUsername = User::checkExists("username", $username);

if($checkEmail||$checkUsername) {
    header("location: register.php?error");
} else {
    User::register($email, $firstName, $lastName, $username, $encPass, $birthday, $gender);
}

?>