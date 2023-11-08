<?php

$tc_no = $isim = $soyad = $dogum_yil = $dogum_ay = $dogum_gun = $dogum_sehir = $yasadigi_sehr = "";
$egitim_seviye = $egitim_okul_adi = $askerlik = $evlilik = "";
$tel_no = $eposta = $hobi = $departman_sec = "";
$cinsiyet = "";
$yazi_alani = "";



$tc_noErr = $isimErr = $soyadErr = $dogum_yilErr = $dogum_ayErr = $dogum_gunErr = $dogum_sehirErr = $yasadigi_sehrErr = "";
$egitim_seviyeErr = $egitim_okul_adiErr = $askerlikErr = $evlilikErr = "";
$tel_noErr = $epostaErr = $hobiErr = $departman_secErr = "";
$cinsiyet2 = "";
$dosyaErr = "";
$yazi_alaniErr = "";


$city ="";
$city2 ="";
$yil2 = "";
$ay2 = "";
$gun2 = "";
$departman2 = "";
$egitim2 = "";
$askerlik2 = "";
$cinsiyet2 = "";
$yazi_alani2 = "";


$txt_dosya_adi = "";

$dogum_yillar = array();
for($s1=1950;$s1<=2010;$s1+=1){
    array_push($dogum_yillar,$s1);
}


$dogum_aylar = array();
for($s1=1;$s1<=12;$s1+=1){
    array_push($dogum_aylar,$s1);
}


$dogum_gunler = array();
for($s1=1;$s1<=31;$s1+=1){
    array_push($dogum_gunler,$s1);
}



$dogum_sehirler = array(
    "06" => "Ankara",
    "41" => "Kocaeli",
    "34" => "İstanbul",
    "53" => "Rize",
    "54" => "Sakarya",
    "66" => "Yozgat",
    
);


$yasadigi_sehirler = array(
    "06" => "Ankara",
    "41" => "Kocaeli",
    "34" => "İstanbul",
    "53" => "Rize",
    "54" => "Sakarya",
    "66" => "Yozgat",
    
);


$egitim_seviyeler = array(
    "İlkokul","Ortaokul","Lise","Üniversite",
);


$askerlik_bilgiler = array(
    "Askerlik Yapmadı", "Askelerlik Yaptı", "Askerlik Ertelendi", "Muaf",
);

$evlilik_bilgiler = array(
    "Evli", "Bekar",
);


$hobiler_bilgiler = array(
    "Kitap","Müzik","Spor","Resim","Dans","Akıl ve Zeka Oyunları","Yabancı Bilgiler","Seyahat","Yazarlık",
);

$departman_bilgiler = array(
    "Gömülü Yazılım","Elektronik","Elektrik","Sistem Yazılımı",
    "Uygulama Yazılımı","WEB Tasarım","WEB Programlama","Bulut Sistemler","Satış","Siber Güvenlik",
    "Yapay Zeka","Mobil Uygulama",
);

$cinsiyet_bilgiler = array("Erkek","Kadın");


$liste_sonuc = array("TC Kimlik Numarası","İsim","Soyisim","Telefon Numarası","E-Posta","Doğduğu Şehir","Yaşadığı Şehir","Doğum Yılı","Doğum Ay",
"Doğum Gün","Eğitim Seviye","Eğitim Okul Adı","Departman","Hobiler","Askerlik","Evlilik","Cinsiyet","Yazı Alanı","Dosya Bilgileri");

?>