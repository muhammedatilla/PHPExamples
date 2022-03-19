<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonksiyonlar Tablo Örneği</title>
</head>
<body>

<?php 

    function baglantiKontrol($durum){

        if($durum == 1){
            echo "<span style='color:green'>Aktif</span>";
        }else{
            echo "<span style='color:red'>Pasif</span>";
        }

    }

    $satir_1_baglanti = 1;
    $satir_2_baglanti = 1;
    $satir_3_baglanti = 1;
    $satir_4_baglanti = 0;


    $uyeler = array(
        array(
            "isim"      => "Muhammed Atilla",
            "email"     => "ma@index.com",
            "baglanti"  => true
        ),
        array(
            "isim"      => "Emre Durmuş",
            "email"     => "ed@index.com",
            "baglanti"  => false
        ),
        array(
            "isim"      => "Elif Can",
            "email"     => "ec@index.com",
            "baglanti"  => true
        ),
        array(
            "isim"      => "Ali Yuvalı",
            "email"     => "ay@index.com",
            "baglanti"  => false
        ),
    );

?>


    <table border="1">
        <thead>
            <th>Ad Soyad</th>
            <th>Email</th>
            <th>Bağlantı</th>
        </thead>
        <tbody>

            <?php foreach($uyeler as $uye){ ?>
                <tr>
                    <td><?php echo $uye["isim"]; ?></td>
                    <td><?php echo $uye["email"]; ?></td>
                    <td><?php baglantiKontrol($uye["baglanti"]) ?></td>
                </tr>
           <?php } ?> 
        </tbody>
    </table>
</body>
</html>