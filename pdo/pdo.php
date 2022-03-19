<?php 

require_once("connect.php");

    $rows = $db->query("SELECT * FROM person LIMIT 10", PDO::FETCH_ASSOC);
    if($rows->rowCount() >0){
        foreach($rows as $row){
            echo "Name: ".$row["name"]."<br>";
            echo "Surname: ".$row["surname"];
            echo "<hr>";
        }
    }


?>