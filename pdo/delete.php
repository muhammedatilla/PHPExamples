<?php 

require_once("connect.php");

$ID = 590;
$delete = $db->prepare("DELETE FROM person WHERE ID=:ID");
//delete->execute(array("ID" => $ID));

$delete->bindParam(":ID",$ID,PDO::PARAM_INT);
$result = $delete->execute();

if($result){
    echo "<span style='color:green;'>Silme işlemi başarılıdır...</span>";
}else{
    echo "<span style='color:red;'>Silme işlemi başarılı değildir...</span>";
}


?>