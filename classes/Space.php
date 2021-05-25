<?php

class Space {
    public function __construct() {
        $results = Db::getAllEntries("SELECT * FROM spaces");
        date_default_timezone_set('America/Vancouver');
        foreach($results as $result) {
            Space::checkTime($result["id"], $result["date"], $result["startTime"], $result["endTime"]);
        }
    }
    
    public function create($name, $category, $date, $description, $host, $startTime, $endTime, $link) {
        $space = Db::DoQuery("INSERT INTO spaces(name, category, date, description, host, startTime, endTime, link) VALUES ('".mysqli_real_escape_string(Db::connect(), $name)."'")."', '".$category."','".$date."', '".mysqli_real_escape_string(Db::connect(), $description)."', '".$host."', '".$startTime."', '".$endTime."', '".$link."')";
        echo "INSERT INTO spaces(name, category, date, description, host, startTime, endTime, link) VALUES ('".mysqli_real_escape_string(Db::connect(), $name)."', '".$category."','".$date."', '".mysqli_real_escape_string(Db::connect(), $description)."', '".$host."', '".$startTime."', '".$endTime."', '".$link."')";
        return $space;
    }

    public function dropDown($sql) {
        $results = Db::getAllEntries($sql);
        return $results;
    }
    
    public function display($sql) {
        $results = Db::getAllEntries($sql);
        return $results;
    }

    static public function checkTime($id, $date, $startTime, $endTime) {
        date_default_timezone_set('America/Vancouver');
        if(date("Y-m-d") == $date && date("H:i a") >= $startTime && date("H:i a") <= $endTime){
            Db::DoQuery("UPDATE spaces SET isactive = 2 WHERE id=".$id);
        } else if(date("Y-m-d") > $date || date("Y-m-d") == $date && date("H:i a") > $endTime) {
            Db::DoQuery("UPDATE spaces SET isactive = 0 WHERE id=".$id);
        } else {
            Db::DoQuery("UPDATE spaces SET isactive = 1 WHERE id=".$id);
        }
    }
}

?>