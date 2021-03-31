<?php

class Db {
    public function connect() {
        $configArray = parse_ini_file("../../openspacesdb.ini");
        $host = $configArray['host'];
        $username = $configArray['username'];
        $password = $configArray['password'];
        $database = $configArray['database'];
        return mysqli_connect($host, $username, $password, $database);
    }
    
    public function doQuery($sql) {
        $con = $this->connect();
        $result = mysqli_query($con, $sql);
        return $result;
    }
    
    public function getSingleEntry($sql) {
        $con = $this->connect();
        $result = mysqli_query($con, $sql);
        $getResult = mysqli_fetch_assoc($result);
        return $getResult;
    }
    
    public function getAllEntries($sql) {
        $con = $this->connect();
        $result = mysqli_query($con, $sql);
        $data = array();
        while($getResult = mysqli_fetch_assoc($result)) {
            $data[] = $getResult;
        }
        return $data;
    }
}

?>