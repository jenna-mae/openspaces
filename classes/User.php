<?php

class User {
    static public function edit($id, $email, $firstName, $lastName, $username, $encPass, $birthday, $gender) {
        Db::doQuery("UPDATE users SET email='".$email."', firstName='".$firstName."', lastName='".$lastName."', username='".$username."', password='".$encPass."', birthday='".$birthday."', gendersId='".$gender."' WHERE id='".$id."'");
        header("location: accountInfo.php");
    }

    static public function register($email, $firstName, $lastName, $username, $encPass, $birthday, $gender) {
        Db::doQuery("INSERT INTO users (email, firstName, lastName, username, password, birthday, gendersId) VALUES ('".$email."', '".$firstName."', '".$lastName."', '".$username."', '".$encPass."', '".$birthday."', '".$gender."')");
        $user = Db::getSingleEntry("SELECT * FROM users WHERE username='".$username."'");
        echo"INSERT INTO users (email, firstName, lastName, username, password, birthday, gendersId) VALUES ('".$email."', '".$firstName."', '".$lastName."', '".$username."', '".$encPass."', '".$birthday."', '".$gender."')";
        if($user) {
            $_SESSION["id"] = $user["id"];
            header("location: dashboard.php");
        } else {
            header("location: register.php?error");
        }
    }

    static public function login($username, $password) {
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

    static public function checkExists($dbField, $value) {
        $check = Db::getSingleEntry("SELECT * FROM users WHERE $dbField='".$value."'");
        if($check) {
            return $check;
        } else {
            return null;
        }
    }

    static public function checkLogin() {
        $user = Db::getSingleEntry("SELECT users.*, genders.name AS gender FROM users LEFT JOIN genders ON users.gendersId=genders.id WHERE users.id='".$_SESSION["id"]."'");
        if($user) {
            return $user;
        } else {
            header("location: index.php");
        }
    }

    static public function getGenders() {
        $genders = Db::getAllEntries("SELECT * FROM genders");
        return $genders;
    }
}

?>