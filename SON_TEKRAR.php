<?php
    //stirng fonksiyonları
    $mesaj =  "Denizhan denizhan";
    echo strlen($mesaj)."<br>"; //uzunluk
    echo str_word_count($mesaj)."<br>"; //kelime sayısı
    echo strtolower($mesaj)."<br>"; //hepsini küçük yaz
    echo strtoupper($mesaj)."<br>"; //hepsini büyük yaz
    echo ucfirst($mesaj)."<br>"; //ilk harf büyük yaz
    echo str_replace("Denizhan","deniz",$mesaj)."<br>"; //değiştir
    echo str_replace(["Denizhan","old"],["deniz","yil"],$mesaj)."<br>"; //değiştir

    //sabitler
    const bagltanti1 = "baglanti cünlesi";

    //diziler
    $sayilar = array(18,23,32,45,59);
    $telefon_rehberi = array(
        "ali" => "543333",
        "ahmet" => "444444",
        "ayşe" => "33333",
    );

    //sayılar
    echo var_dump(is_numeric(5.2))."<br>";
    echo abs(-10)."<br>";//mutlak değer
    echo ceil(4.3)."<br>";//en yakın üst tam sayı
    echo floor(4.8)."<br>";//en yakın alt tam sayı
    echo round(4.8)."<br>";//en yakın tam sayı
    echo sqrt(25)."<br>";//karekök
    echo pow(5,2)."<br>";//üs alma
    echo max(3,5,6,90)."<br>";
    echo min(3,5,6,90)."<br>";

    //diziler - fonksiyonlar
    //elemanı sona ekleme
    array_push($notlar,100);
    //elemanı başa eklemek
    array_unshift($notlar,20);
    //elemanı silme - sondan
    array_pop($plakalar);
    //elemanı silme - baştan
    array_shift($plakalar);
    //saymak
    echo count($notlar);

    //koşullar
    //if
    $username = "admin";
    if($username != "admin"){
        echo "kullanici adi yanliş";
    }elseif($password != "1234"){
        echo "parola yanlış";
    }else {
        echo "Merhaba BTK";
    } 
    //switch
    switch($sayi){
        case 5:
            echo "beş";
            break;
        case 6:
            echo "altı";
            break;
        default:
            echo "yanlış veri";
    }
    //ternary
    $sonuc = (yas >= 18) ? "ehliyet alabilir" : "ehliyet alamaz";

    //döngüler
    $ogrenciler = array("ali","ayşe","ahmet","deniz","mehmet");
    //for
    for($i = 0; $i < count($ogrenciler); $i+=1){
        echo $ogrenciler[$i]."<br>";
    }
    //while
    $i = 0;
    while($i < count($ogrenciler)){
        echo $ogrenciler[$i]."<br>";
        $i += 1;
    }
    //foreach
    foreach($ogrenciler as $ogrenci){
        echo $ogrenci."<br>";
    }


    //fonksiyonlar
    function selamlama($isim, $mesaj){
        return "$mesaj $isim";
    }
    $sonuc = selamlama("ahmet","merhaba");
    //değişken sayıda değer alma
    function toplam3(...$sayilar2){
        $toplam3 = 0;
        foreach($sayilar2 as $sayi){
            $toplam3 += $sayi;
        }
        return $toplam3;
    }
    echo toplam3(10,20,30,40);


    //form işlemi
    //get
    if($_GET){
        $query = $_GET['q'];
        $category = $_GET['category'];
        echo $query;
        echo "<br>";
        echo $category;
        
    }
    //post
    if(!empty($_POST)){
        $username = $_GET['username'];
        $password = $_POST['password'];
    
        echo $username." ".$password;
    }
?>


<?php

// Veritabanı bağlantısı için gerekli değişkenleri tanımlayalım.
$host = "localhost";
$dbname = "okul";
$username = "kullaniciadi";
$password = "sifre";

// Veritabanı bağlantısını oluşturalım.
$baglanti = mysqli_connect($host, $username, $password);

// Bağlantı başarılı mı kontrol edelim.
if (!$baglanti) {
    echo "Bağlantı sağlanamadı.";
    exit;
}

// Okul veritabanını oluşturalım.
$sorgu = "CREATE DATABASE okul;";
mysqli_query($baglanti, $sorgu);

// Sınıf tablosunu oluşturalım.
$sorgu = "CREATE TABLE sinif (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isim VARCHAR(50),
    okul_numarası INT
);";
mysqli_query($baglanti, $sorgu);

// Sınıf tablosuna veri ekleyelim.
$sorgu = "INSERT INTO sinif (isim, okul_numarası) VALUES ('Ahmet', 12345);";
mysqli_query($baglanti, $sorgu);

// Sınıf tablosundaki bir kaydı güncelleyelim.
$sorgu = "UPDATE sinif SET isim = 'Mehmet' WHERE id = 1;";
mysqli_query($baglanti, $sorgu);

// Sınıf tablosundan bir kaydı silelim.
$sorgu = "DELETE FROM sinif WHERE id = 1;";
mysqli_query($baglanti, $sorgu);

// Bağlantıyı kapatalım.
mysqli_close($baglanti);

?>


<?php
echo date("Y.m.d");
echo date("l");
echo date("H:i:s");
?>




<?php
// Session oluşturma
session_start();

// Session'a değer atama
$_SESSION["isim"] = "Ahmet";

// Session'dan değer alma
echo $_SESSION["isim"]; // Ahmet

// Session'da bulunan değeri güncelleme
$_SESSION["isim"] = "Mehmet";

// Session'da bulunan değeri silme
unset($_SESSION["isim"]);

// Session'ı tamamen kapatma
session_destroy();

// Cookies oluşturma
setcookie("isim", "Ahmet", time() + (60 * 60 * 24 * 30), "/");

// Cookies'den değer alma
echo $_COOKIE["isim"]; // Ahmet

// Cookies'de bulunan değeri güncelleme
setcookie("isim", "Mehmet", time() + (60 * 60 * 24 * 30), "/");

// Cookies'de bulunan değeri silme
setcookie("isim", "", time() - 3600, "/");

?>