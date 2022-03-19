<?php 

require_once("connect.php");

 /*   $rows = $db->query("SELECT * FROM person LIMIT 10", PDO::FETCH_ASSOC);
    if($rows->rowCount() >0){
        foreach($rows as $row){
            echo "Name: ".$row["name"]."<br>";
            echo "Surname: ".$row["surname"];
            echo "<hr>";
        }
    }
*/


    $id = 34;
    $rows = $db->prepare("SELECT * FROM person WHERE ID BETWEEN :basla AND :bitis");
    $rows->execute(
        array(
            "basla" => 10,
            "bitis" => 20
        )
    );
    $result = $rows->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);







?>