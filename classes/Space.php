<?php

class Space {
    public function create($name, $category, $date, $description, $host, $startTime, $endTime, $link) {
        $space = Db::DoQuery("INSERT INTO spaces(name, category, date, description, host, startTime, endTime, link) VALUES ('".$name."', '".$category."','".$date."', '".$description."', '".$host."', '".$startTime."', '".$endTime."', '".$link."')");
        echo"INSERT INTO spaces(name, category, date, description, host, startTime, endTime, link) VALUES ('".$name."', '".$category."','".$date."', '".$description."', '".$host."', '".$startTime."', '".$endTime."', '".$link."')";
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

    static public function checkTime($date, $startTime, $endTime) {
        $bIsActive = false;
        date_default_timezone_set('America/Vancouver');
        if(date("Y-m-d")==$date && date("H:i a")>=$startTime && date("H:i a")<=$endTime){
            return $bIsActive = true;
        } else {
            return $bIsActive = false;
        }
    }
}

?>