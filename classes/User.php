<?php

// NOTE TO ALL -- current variables and names are temporary until designs & front end are confirmed.

// JENNA - TODO - Set up checkExists() to make sure that the username or email is not in db. Include checkExists() in register() as an if statement. Only insert into db if !exist.

// JENNA - TODO - complete register()...

class User {
    public function register($email, $username, $password) {
        $oDb = new Db;
        $oDb->doQuery("INSERT INTO users (email, username, password) VALUES ('".$email."', '".$username."', '".$password."')");
        $user = $oDb->getSingleEntry("SELECT * FROM users WHERE username='".$username."'");
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

    private function checkExists() {

    }
}

?>