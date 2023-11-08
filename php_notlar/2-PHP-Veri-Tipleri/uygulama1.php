<?php

$kurs1_baslik = "PHP Kursu";
$kurs1_altbaslik = "Sıfırdan ileri seviye PHP ile web geliştirme";
$kurs1_resim = "1.png";
$kurs1_yayintarihi = "01.01.2023";
$kurs1_yorumSayisi = "200";
$kurs1_begeni_sayisi = "300";


$kurs2_baslik = "PHP Kursu";
$kurs2_altbaslik = "Sıfırdan ileri seviye PHP ile web geliştirme";
$kurs2_resim = "1.png";
$kurs2_yayintarihi = "01.01.2023";
$kurs2_yorumSayisi = "200";
$kurs2_begeni_sayisi = "300";



$kurs3_baslik = "PHP Kursu";
$kurs3_altbaslik = "Sıfırdan ileri seviye PHP ile web geliştirme";
$kurs3_resim = "1.png";
$kurs3_yayintarihi = "01.01.2023";
$kurs3_yorumSayisi = "200";
$kurs3_begeni_sayisi = "300";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    

<div class="container my-3">
    <div class="card mb3">
        <div class="row">
            <div class="col-3">
                <img src="1.png" alt="" class="img-fluid rounded-star">
            </div>
            <div class="col-9">
                <div class="card-body">
                    <h5 class="card-title">PHP Kursu</h5>
                    <p class="card-text">nasjkdf afd kajsdfnkjasdf kjasfd kjas fdkasd fkjas fdajs dfaskdf as
                        najsldfnas asljkfdnlasd faslkfdnasldf asldfasfd lasfdklnafdn
                        nasldf alsd flaskfdnlas fdlasknfd asfldnasdfl alsdö
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb3">
        <div class="row">
            <div class="col-3">
                <img src="<?php echo $kurs2_resim;?>" alt="" class="img-fluid rounded-star">
            </div>
            <div class="col-9">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $kurs2_baslik;?></h5>
                    <p class="card-text"><?php echo $kurs2_altbaslik;?>
                    <span class="badge rounded-pill text-bg-primary">
                    Beğeni : <?php echo $kurs2_begeni_sayisi;?>
                    </span>

                    <span class="badge rounded-pill text-bg-primary">
                    Yorum : <?php echo $kurs2_yorum_sayisi;?>
                    </span>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb3">

    </div>

    <div class="card mb3">
        
    </div>


</div>

</body>
</html>