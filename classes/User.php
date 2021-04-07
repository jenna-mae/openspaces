<?php

// NOTE TO ALL -- current variables and names are temporary until designs & front end are confirmed.

// JENNA - TODO - Set up checkExists() to make sure that the username or email is not in db. Include checkExists() in register() as an if statement. Only insert into db if !exist.

// JENNA - TODO - complete register()...

class User {
    public function register($email, $firstName, $lastName, $username, $password, $birthday, $gender) {
        $oDb = new Db;
        $oDb->doQuery("INSERT INTO users (email, firstName, lastName, username, password) VALUES ('".$email."', '".$firstName."', '".$lastName."', '".$username."', '".$password."', '".$birthday."', '".$gender."')");
        $user = $oDb->getSingleEntry("SELECT * FROM users WHERE username='".$username."'");
        $_SESSION["id"] = $user["id"];
        //header("location: dashboard.php");
    }

    public function login($username, $password) {
        $oDb = new Db;
        $user = $oDb->getSingleEntry("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");
        if($user) {
            $_SESSION["id"] = $user["id"];
            echo "yay it worked";
            // header("location: dashboard.php");
        } else {
            echo "did not work..";
            // header("location: index.php?error=1");
        }
    }

    public function checkExists($dbField, $value) {
        $oDb = new Db;
        $check = $oDb->getSingleEntry("SELECT * FROM users WHERE $dbField='".$value."'");

        if($check) {
            echo "already exists";
        } else {
            echo "good to go";
        }
    }
}

?>