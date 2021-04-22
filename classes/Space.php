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

    private function recentlyAdded() {
        
    }
}

?>