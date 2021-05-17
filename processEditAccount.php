<?php
session_start();
include("classes/Db.php");
include("classes/User.php");
$loggedUser = User::checkLogin();

$id = $loggedUser["id"];

$email = $_POST["email"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];
$password = $_POST["password"];
$encPass = password_hash($password, PASSWORD_DEFAULT);
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];

if($username != $loggedUser["username"] && $email != $loggedUser["email"]) {
    $checkUsername = User::checkExists("username", $username);
    $checkEmail = User::checkExists("email", $email);
} else if($username != $loggedUser["username"]) {
    $checkEmail = "";
    $checkUsername = User::checkExists("username", $username);
} else if($email != $loggedUser["email"]) {
    $checkUsername = "";
    $checkEmail = User::checkExists("email", $email);
} else {
    $checkEmail = "";
    $checkUsername = "";
}

if($checkEmail||$checkUsername) {
    header("location: editAccountInfo.php?error");
    // Make error message - username or email already in use
} else {
    User::edit($id, $email, $firstName, $lastName, $username, $encPass, $birthday, $gender);
}

?>