<?php 

require_once("connect.php");

$update = $db->prepare("UPDATE person SET
                        namee=:namee,
                        surname=:surname,
                        mail=:mail
                        WHERE ID=:ID
                        ");

$data = array(
    "namee" => "ethan",
    "surname" => "hunt",
    "mail" => "eh@eh.com",
    "ID" => 601
);

$result = $update->execute($data);

if($result){
    echo "<span style='color:green;'>Güncelleme işlemi başarılıdır...</span>";
}else{
    echo "<span style='color:red;'>Güncelleme işlemi başarılı değildir...</span>";
}


?>