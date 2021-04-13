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
        $query = mysqli_query($con, $sql);
        return $query;
    }
    
    public function getSingleEntry($sql) {
        $result = $this->doQuery($sql);
        $getResult = mysqli_fetch_assoc($result);
        return $getResult;
    }
    
    public function getAllEntries($sql) {
        $result = $this->doQuery($sql);
        $data = array();
        while($getResult = mysqli_fetch_assoc($result)) {
            $data[] = $getResult;
        }
        return $data;
    }
}

?>