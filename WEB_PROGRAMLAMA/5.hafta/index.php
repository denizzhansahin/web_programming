<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>

    <title>Document</title>
</head>
<body>

<?php

$username = $email = $password = $repassword  = $city= "";
$usernameErr = $emailErr = $passwordErr = $repasswordErr = $cityErr = $password_no ="";
$hobbies = [];

$sehirler = array(
    "06" => "Ankara",
    "41" => "Kocaeli",
    "34" => "İstanbul",
    "53" => "Rize",
    "54" => "Sakarya",
);

$hobiler = array(
    "1" => "Sinema",
    "2" => "Spor",
    "3" => "Müzik",
    "4" => "Kitap",
);

/*

if($_SERVER["REQUEST_METHOD"]=="POST"){

    
    if(empty($_POST["username"])){
        $usernameErr  = "username gerekli alan";
    } else{
        $username = $_POST["username"];
    }

    if(empty($_POST["email"])){
        $emailErr = "email gerekli alan";
    } else{
        $email = $_POST["email"];
    }


    if(empty($_POST["password"])){
        $passwordErr = "password gerekli alan";
    } else{
        $password = $_POST["password"];
    }

    if(empty($_POST["repassword"])){
        $repasswordErr =  "repassword gerekli alan";
    } else{
        $repassword = $_POST["repassword"];

        if($_POST["repassword"] == $_POST["password"]){
            
        } else{
            $password_no = "Şifreler aynı değil";
        }

    }



    if($_POST["city"]==-1){
        $cityErr = "city gerekli alan";
    } else{
        $city =$_POST["city"];
    }

}

*/

?>


<div class="container my-3">

<div class="row">
    <div class="col-12">

    <form action="welcome.php" method="post">
        <div class="mb-3">
            <label for="username">Kullanıcı Adı</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username?>">
            <div class="text-danger"><?php echo $usernameErr ?></div>
        </div>
        
        <div class="mb-3">
            <label for="email">Eposta</label>
            <input type="email" name="email" class="form-control" value="<?php echo $email?>">
            <div class="text-danger"><?php echo $emailErr ?></div>
        </div>


        <div class="mb-3">
            <label for="medeni">Medeni Hali</label><br>
            <input type="radio" id="medeni" name="medeni" value="Evli"> <label for="html">Evli</label><br>
            <input type="radio" id="medeni" name="medeni" value="Bekar"> <label for="html">Bekar</label><br>
                
        </div>

        <div class="mb-3">
            <label for="askerlik">Askerlik</label><br>
            <input type="radio" id="askerlik" name="askerlik" value="Yaptı"> <label for="html">Evli</label><br>
            <input type="radio" id="askerlik" name="askerlik" value="Tecilli"> <label for="html">Tecilli</label><br>
            <input type="radio" id="askerlik" name="askerlik" value="Tecilli"> <label for="html">Tecilli</label><br>
             
        </div>


        <div class="mb-3">
            <label for="egitim">Eğitim</label>
            <input type="egitim" name="egitim" class="form-control" value="">
                <input type="radio" value="egitim">İlkokul</input>
                <input type="radio" value="egitim">Lise</input>
                <input type="radio" value="egiti">Üniversite</input>
        </div>


        <div class="mb-3">
                <label for="hobiler">Hobiler</label>


                <?php foreach($hobiler as $id => $hobi) : ?>
                    <div class="form-check">
                        <input type="checkbox" name="hobbies[]" 
                        value="<?php echo $hobi;?>" 
                        id="hobbies_<?php echo $id;?>"
                        <?php if(in_array($id, $hobbies)) echo 'checked' ?>
                        >
                        <label for="hobbies_<?php echo $id;?>" class="form-check-label"><?php echo $hobi;?></label>
                    </div>
                <?php endforeach; ?>




        </div>


        <!--
        <div class="mb-3">
            <label for="password">Parola</label>
            <input type="password" name="password" class="form-control" value="<?php echo $password?>">
            <div class="text-danger"><?php echo $passwordErr ?></div>
        </div>
        <div class="mb-3">
            <label for="repassword">Parola Tekrar</label>
            <input type="password" name="repassword" class="form-control" value="<?php echo $repassword?>">
            <div class="text-danger"><?php echo $repasswordErr ?></div>
            <div class="text-danger"><?php echo $password_no ?></div>
        </div>
        <div class="mb-3">
                    <label for="city">Şehir</label>
                    <select name="city" class="form-select">
                        
                    <option value="-1" selected>Şehir Seçiniz</option>
                    <?php foreach($sehirler as $plaka => $sehir) : ?>
                        <option 
                            value="<?php echo $plaka;?>" 
                            <?php echo $city == $plaka ? ' selected' : ''?>
                        >
                            <?php echo $sehir ?>
                        </option>
                    <?php endforeach; ?>

                    </select>
                    <div class="text-danger"><?php echo $cityErr ?></div>
                </div>

                    -->


        <textarea name="" id="" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-primary">Kayıt Ol</button>


    </form>



    </div>
</div>

</div>



</body>
</html>


<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$repassword = $_POST['repassword'];
$city = $_POST['city'];

//echo  "KUllanıcı adı : ".$username."<br> Şifre :".$password." <br> E-posta :". $email." <br> Şifre Tekrar :".$repassword." <br> Şehir :".$city;

?>