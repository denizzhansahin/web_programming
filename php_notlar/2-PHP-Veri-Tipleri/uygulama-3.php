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


$kurs1_altbaslik = ucfirst(strtolower($kurs1_altbaslik));
$kurs2_altbaslik = ucfirst(strtolower($kurs2_altbaslik));
$kurs3_altbaslik = ucfirst(strtolower($kurs3_altbaslik));

$kurs1_altbaslik = substr(strtolower($kurs1_altbaslik,0,30)."...");
$kurs2_altbaslik = substr(strtolower($kurs2_altbaslik,0,30)."...");
$kurs3_altbaslik = substr(strtolower($kurs3_altbaslik,0,30)."...");

$kurs1_url = str_replace([" ","ç","@"],["-","c",""],strtolower($kurs1_baslik));
$kurs2_url = str_replace([" ","ç","@"],["-","c",""],strtolower($kurs2_baslik));
$kurs3_url = str_replace([" ","ç","@"],["-","c",""],strtolower($kurs3_baslik));


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

    <div class="row">
        <div class="col-3">
            Kategoriler
        </div>
        <div class="col-9">
        <div class="card mb3">
        <div class="row">
            <div class="col-3">
                <img src="<?php echo $kurs1_resim;?>" alt="" class="img-fluid rounded-star">
            </div>
            <div class="col-9">
                <div class="card-body">
                    <h5 class="card-title"><?php echo strlower($kurs1_baslik);?>
                        <a href="<?php echo $kurs1_url; ?>"> <?php echo $kurs1_baslik;?></a>
                    </h5>
                    <p class="card-text"><?php echo strlower($kurs1_altbaslik);?>
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
        </div>
    </div>





</div>

</body>
</html>