<?php

// TO DO : complete checkLogin()

class User {
    public function register($email, $firstName, $lastName, $username, $encPass, $birthday, $gender) {
        $oDb = new Db;
        $oDb->doQuery("INSERT INTO users (email, firstName, lastName, username, password, birthday, gender) VALUES ('".$email."', '".$firstName."', '".$lastName."', '".$username."', '".$encPass."', '".$birthday."', '".$gender."')");
        $user = $oDb->getSingleEntry("SELECT * FROM users WHERE username='".$username."'");
        if($user) {
            $_SESSION["id"] = $user["id"];
            header("location: dashboard.php");
        } else {
            header("location: register.php?error");
        }
    }

    public function login($username, $password) {
        $oDb = new Db;
        $user = $oDb->getSingleEntry("SELECT * FROM users WHERE username='".$username."'");
        if($user) {
            $encPass = $user["password"];
            $providedPass = $password;
            if(password_verify($providedPass, $encPass)) {
                // echo "password verified";
                $_SESSION["id"] = $user["id"];
                header("location: dashboard.php");
            } else {
                // echo "password error";
                header("location: index.php?error");
            }
        } else {
            // echo "login did not work..";
            header("location: index.php?error");
        }
    }

    public function checkExists($dbField, $value) {
        $oDb = new Db;
        $check = $oDb->getSingleEntry("SELECT * FROM users WHERE $dbField='".$value."'");
        if($check) {
            // echo "already exists";
            return $check;
        } else {
            // echo "good to go";
            return null;
        }
    }

    public function checkLogin() {
        $oDb = new Db;
        $user = $oDb->getSingleEntry("SELECT * FROM users WHERE id='".$_SESSION["id"]."'");
        if($user) {
            return $user;
            echo ($_SESSION["id"]);
        } else {
            echo ($_SESSION["id"]);
            //header("location: index.php");
        }
    }
}

?>