<?php 

require_once("connect.php");

$insert = $db->prepare("INSERT INTO person SET
                        namee=:namee,
                        surname=:surname,
                        mail=:mail
                        ");

$data = array(
    "namee" => "muhammed",
    "surname" => "atilla",
    "mail" => "ma@ma.com"
);


$result = $insert->execute($data);

if($result){
    echo "<span style='color:green;'>ekleme işlemi başarılıdır...</span>";
}else{
    echo "<span style='color:red;'>ekleme işlemi başarılı değildir...</span>";
}

?>