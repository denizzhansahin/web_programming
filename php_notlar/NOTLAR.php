
<?php 
//YAZIM
echo "deniz";
?>

<?php
//YORUM
#YORUM
/*
YORUM
qwert
*/

$x = 5; /* + 15 */ + 5;
echo $x;
?>


<?php
//DEĞİŞKEN TANIMLAMA
$x = 5;
$y = "John";
echo "Hello ".$y."!";
//değişken tipi öğrenme
var_dump($x);
//çoklu atama
$x = $y = $z = "denizhan";
?>

<?php
//GLOBAL ve LOCAL DEĞİŞKENLER
$x = 5;
function myTest(){
    echo $x; //çalışmaz
}
echo $x;//çalışır
myTest();

function myTest2(){
    $y = 1;
    echo $y; //çalışır
}
echo $y; //çalışmaz
myTest2();

//çalıştırma
$x = 5;
$y = 10;

function myTest3(){
    global $x, $y;
    $y = $x + $y;//çalışır
}
myTest3();
echo $y;

//çalıştırma
$y = 10;
function myTest4(){
    $GLOBALS['y']=12;//çalışır
}
myTest4();
echo $y;


//yerel değişken silinme önleme
function myTest5(){
    static $x1 = 5;
    echo $x1;
    $x++;
}
myTest5();
?>

<?php
//EKRANA YAZDIRMA
//echo - dönüş değeri yoktur
echo "deniz";
//print - dönüş değeri 1'dir
print "deniz";
$x = 12;
echo "deniz".$x."deniz";
print "deniz".$x."deniz";
?>


<?php 
//VERİ TİPLERİ
//string
$x = "merhaba";
var_dump($x);
//integer
$y = 12;
var_dump($y);
//float
$e = 12.3;
var_dump($e);
//boolean
$r = true; //false
var_dump($r);
//arrays
$cars = array("Volvo","BMW");
var_dump($cars);
//object
class Car {
    public $model;
    public function __construct($color){
        $this -> color = $color;
    }

    public function message(){
        return "My car is a".this->color;
    }
}

$myCar = new Car("red");
var_dump($myCar);

//null
$x = null;
var_dump($x);
//tip dönüştür
$x = 5;
$x = (string) $x;
var_dump($x);
?>


<?php
//STR İŞLEMLER
//str uzunluk
echo strlen("Hello");
//str kelime sayısı
echo str_word_count("Hello deniz");
//str kelime ara, ilk bulunan yerdeki ilk karakter return olur
echo strpos("Hello world!","world"); //6
//hepsini büyük yap
$x = "hello";
echo strtoupper($x); //HELLO
//hepsini küçük yap
$x = "HELLO";
echo strlowe($x);//hello
//yer değiştir
$x = "denizhan nerede";
echo str_replace("denizhan","deniz",$x); //deniz nerede
//ters çevir
$x = "deniz";
echo strrev($x); //zined
//ilk ve son boşlukları sil
echo $x = " hepsi boşluk ";
echo trim($x);
//bir stringi array yap
$x = "hello world!";
$y = explode(" ", $x);
//dizi range yap
echo substr($x,6,5);//6dan başla ve 5 karakter al : world
echo substr($x,6);//6dan itibaren yazdır : world!
//karekter kaçırma
$x = "We are \"hello\" ";
?>

<?php
//NUMARALAR
$x = 5;
$y = 5.5;
is_numeric($x);//sayi olup olmadığını anlama
//dönüştürme
$e = (int) $y;
?>

<?php
//Matematik
echo (min(0,150,150));//max ile de var
echo (abs(-5)); //mutlak değer bulma
//sqrt , karesini bul
//round en yakın tam sayıya yuvarla
//rand ile rastgele sayı üret rand(10,100)
?>

<?php 
//tanımlama yap
define("DENIZ","hello",true);
echo deniz;
//değişiklik önleme
const MYCAR = "deniz";
?>

<?php
//if else
if(5>3){echo "deniz";} else {"deniz1";}
if(5>3){echo "deniz";} elseif(5<3) {"deniz1";} else {echo "deniz2";}
//switch
switch($x){
    case "red":
        echo "red";
        break;
    case "blue":
        echo "blue";
        break;
    default:
    echo "hello";
}
?>

<?php 
//while
$i = 1;
while ($i<6){
    echo $i;
}
//do-while
$i = 1;
do {
    echo $i;
    $i++;
}while($i<6);
//for 
for($x = 0; $x <= 10; $x++){
    echo "The number is : $x <br>";
}
//foreach
$colors = array("red","green");
foreach($colors as $x){
    echo "$x <br>";
}
?>

<?php
//fonksiyonlar
function deniz($isim){
    echo "hello $isim";
    return 1;
}
$x = deniz("deniz");
echo $x;
?>

<?php
//array
$cars = array("volvo","bmw",12,["b",12]);
echo count($cars);//sayısı
foreach($cars as $x){
    echo $x;
}
//sözlük
$cars = array("brand"=>"ford","model"=>"deniz");
$cars["brand"]="bmw";

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

//ayrıca diğer oluşturma şekli
$cars = ["volvo","bmw"];
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";
?>


<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
date_default_timezone_set("America/New_York");
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
/*
Today is 2020/11/03
Today is 2020.11.03
Today is 2020-11-03
Today is Tuesday
*/
?>


<?php 
//php ekleme
include 'footer.php';
?>
<?php require 'noFileExists.php';
echo "I have a $color $car.";?>


<?php
//dosya okuma
echo readfile("webdictionary.txt");
?>
<?php
//dosya okuma
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);//dosya sonu kontrol et
fclose($myfile);//dosya kapat
?>

<?php
//dosya okuma ve yazma
//w eskiyi sil, a üzerine yaz
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<!-- 
    Form dosya yükleme işlemleri
 -->
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<!-- 
    Çerezler
 -->
 <?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
//çerez silme
setcookie("user", "", time() - 3600);
?>
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<!-- 
    Oturumlar
 -->
 <?php
// Start the session
session_start();
$_SESSION["favcolor"] = "green";
print_r($_SESSION);
session_unset();//oturum silme
?>


<?php
//doğrulama
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>

<?php
//try-catch
try {
    echo divide(5, 0);
  } catch(Exception $e) {
    echo "Unable to divide.";
  }
?>


<?php 
//CLASS
class Fruit{
    public $name;
    function set_name($name){
        $this->name=$name;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
echo $apple->get_name();


//bir sınıfa ait olup olmadığı
$apple = new Fruit();
var_dump($apple instanceof Fruit);

//nesne kullanıldığında otomatik özellik çalıştır
function __construct($name) {
    $this->name = $name;
  }

//nesne yok edildiğinde çalışır
function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }

//özellik erişimi
class Fruit {
    public $name;
    protected $color;
    private $weight;
  }
  
  $mango = new Fruit();
  $mango->name = 'Mango'; // OK
  $mango->color = 'Yellow'; // ERROR
  $mango->weight = '300'; // ERROR

//kalıtım - inheritance
class Fruit {
    public $name;
    public function __construct($name){
        $this->name=name;
    }
    public function intro () {
        echo "Hello";
    }
}
class deniz extends Fruit{
    public function mesaj(){
        echo "deniz";
    }
}

$d = new deniz("denizhan");
$d->message();
$d->intro();

//sabitler
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();

//soyut sınıf
// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
?>

<!-- 
    Veri tabanı
 -->
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
?>


<?php

// Veritabanı bağlantısı için gerekli değişkenleri tanımlayalım.
$host = "localhost";
$dbname = "okul";
$username = "kullaniciadi";
$password = "sifre";

// Veritabanı bağlantısını oluşturalım.
$baglanti = mysqli_connect($host, $username, $password, $dbname);

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

// GET ile gelen verileri alalım.
$isim = $_GET["isim"];
$okul_numarası = $_GET["okul_numarası"];

// Verileri ekrana yazdıralım.
echo "İsim: $isim";
echo "<br>";
echo "Okul Numarası: $okul_numarası";

?>

<?php

// POST ile gelen verileri alalım.
$isim = $_POST["isim"];
$okul_numarası = $_POST["okul_numarası"];

// Verileri ekrana yazdıralım.
echo "İsim: $isim";
echo "<br>";
echo "Okul Numarası: $okul_numarası";

// GET ile gelen "isim" değişkeninin boş olup olmadığını kontrol edelim.
if (empty($_GET["isim"])) {
    // Boş ise
    echo "İsim değişkeni boş.";
} else {
    // Boş değilse
    echo "İsim değişkeni boş değil.";
}
// GET ile gelen "isim" değişkeninin tanımlanmış olup olmadığını kontrol edelim.
if (isset($_GET["isim"])) {
    // Tanımlanmış ise
    echo "İsim değişkeni tanımlanmış.";
} else {
    // Tanımlanmamış ise
    echo "İsim değişkeni tanımlanmamış.";
}

?>

