<?php

class User {
    public function register($email, $firstName, $lastName, $username, $encPass, $birthday, $gender) {
        Db::doQuery("INSERT INTO users (email, firstName, lastName, username, password, birthday, gender) VALUES ('".$email."', '".$firstName."', '".$lastName."', '".$username."', '".$encPass."', '".$birthday."', '".$gender."')");
        $user = Db::getSingleEntry("SELECT * FROM users WHERE username='".$username."'");
        if($user) {
            $_SESSION["id"] = $user["id"];
            header("location: dashboard.php");
        } else {
            header("location: register.php?error");
        }
    }

    public function login($username, $password) {
        $user = Db::getSingleEntry("SELECT * FROM users WHERE username='".$username."'");
        if($user) {
            echo "good to go";
            $encPass = $user["password"];
            $providedPass = $password;
            if(password_verify($providedPass, $encPass)) {
                $_SESSION["id"] = $user["id"];
                header("location: dashboard.php");
            } else {
                header("location: index.php?error");
            }
        } else {
            header("location: index.php?error");
        }
    }

    public function checkExists($dbField, $value) {
        $check = Db::getSingleEntry("SELECT * FROM users WHERE $dbField='".$value."'");
        if($check) {
            return $check;
        } else {
            return null;
        }
    }

    public function checkLogin() {
        $user = Db::getSingleEntry("SELECT * FROM users WHERE id='".$_SESSION["id"]."'");
        if($user) {
            return $user;
        } else {
            header("location: index.php");
        }
    }
}

?>