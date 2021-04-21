<?php

class Space {
    public function create($name, $category, $date, $description, $host, $startTime, $endTime, $link) {
        // $active, $link, $recent
        echo "hey";
        $space = Db::DoQuery("INSERT INTO spaces(name, category, date, description, host, startTime, endTime, link) VALUES ('".$name."', '".$category."','".$date."', '".$description."', '".$host."', '".$startTime."', '".$endTime."', '".$link."')");
        
    }
}

?>