<?php




    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){

        if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0){

        $uploadOk = true;
        $dest_path = "./dosya/"; //yuklenecek yer
        $filename = $_FILES["fileToUpload"]["name"]; //dosya yolu
        $fileSize = $_FILES["fileToUpload"]["size"]; //dosya boyutu
        $dosya_uzantilari = array('docx','pdf'); //dosya türü


        if(empty($filename)){ //dosya seçme veya seçmeme kontrolü
            $uploadOk = false;
            echo "dosya seçiniz"."<br>";
            $dosyaErr = "Dosya seçiniz";
        }

        if($fileSize > 5000000){ //dosya boyutu
            $uploadOk = false;
            //echo "Dosya boyutu fazla"."<br>";
            $dosyaErr ="Dosya boyutu fazla";
        }


        $dosayaAdi = explode(".",$filename); // dosya adını parçala
        $dosayaAdi_uzantisiz = $dosayaAdi[0]; //ilk kısım - isim
        $dosayaAdi_uzantili = $dosayaAdi[1]; //son kısım - uzanti

        if(!in_array($dosayaAdi_uzantili,$dosya_uzantilari)){
            $uploadOk = false;
            //echo "dosya uzantısı kabul edilmiyor";
            //echo "kabul edilen dosyalar : ".implode(",",$dosya_uzantilari);
            $dosyaErr = "dosya uzantısı kabul edilmiyor"."kabul edilen dosyalar : ".implode(",",$dosya_uzantilari);
        }

        $yeni_dosyaAdi = md5(time().$dosayaAdi_uzantisiz).'.'.$dosayaAdi_uzantili; //yeni dosya ismi
        

        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"]; //gecici dosya yolu
        

        $fileDestPath = $dest_path.$yeni_dosyaAdi; //yeni dosya ismi ile yüklenecek kısım

        if(!$uploadOk){
            //echo "dosya yüklenemedi";
            $dosyaErr = "Dosya yüklenemedi";
        } else {

            if(move_uploaded_file($fileSourcePath, $fileDestPath)){ //dosya yukleme fonksiyonu
                ////echo "dosya yüklendi";
                $dosyaErr = "Dosya yüklendi";
            } else {
                echo "hata";
                $dosyaErr = "Hata";
            }
    
        }

        


        
    } else {
        //echo "bir hata oluştu";
        $dosyaErr = "Bir hata oluştu";
    }
}

?>


<?php

    require "libs/variables.php";
    require "libs/functions.php";



if($_SERVER["REQUEST_METHOD"]=="POST"){

    
    
    if(empty($_POST["tc_no"])){
        $tc_noErr  = "TC Numarası gerekli alan";
    } else{
        //echo strlen($_POST["tc_no"])."<br>";
        $tc_no = safe_html($_POST["tc_no"]);
        //echo strlen($tc_no)."<br>";
        
    }

    if(empty($_POST["isim"])){
        $isimErr = "İsim gerekli alan";
    } else{
        $isim = safe_html($_POST["isim"]);
    }


    if(empty($_POST["soyad"])){
        $soyadErr = "Soyad gerekli alan";
    } else{
        $soyad = safe_html($_POST["soyad"]);
    }


    if(empty($_POST["tel_no"])){
        $tel_no = "*******";
    } else{
        $tel_no = safe_html($_POST["tel_no"]);
    }
    

    if(empty($_POST["eposta"])){
        $epostaErr = "E-Posta Adresi gerekli alan";
    } else{

        $deger = eposta_kontrol($_POST["eposta"]);
        //echo $deger;
        if($deger == 1){
            $eposta = safe_html($_POST["eposta"]);
        }
        
    }
    


    if($_POST["city"]=="-1"){
        $dogum_sehirErr = "Doğduğu şehir gerekli alan";
    } else{
        $dogum_sehir = safe_html($_POST["city"]);
    }

    if($_POST["city2"]=="-1"){
        $yasadigi_sehrErr = "Yaşadığı şehir gerekli alan";
    } else{
        $yasadigi_sehr = safe_html($_POST["yasadigi_sehr"]);
    }


    if($_POST["dogum_yil"]=="-1"){
        $dogum_yilErr = "Doğduğu yıl gerekli alan";
    } else{
        $dogum_yil = safe_html($_POST["dogum_yil"]);
    }


    if($_POST["dogum_ay"]=="-1"){
        $dogum_ayErr = "Doğduğu ay gerekli alan";
    } else{
        $dogum_ay = safe_html($_POST["dogum_ay"]);
    }


    if($_POST["dogum_gun"]=="-1"){
        $dogum_gunErr = "Doğduğu gün gerekli alan";
    } else{
        $dogum_gun = safe_html($_POST["dogum_gun"]);
    }



    if($_POST["egitim_seviye"]=="-1"){
        $egitim_seviyeErr = "Eğitim seviye gerekli alan";
    } else{
        $egitim_seviye = safe_html($_POST["egitim_seviye"]);
    }


    if(empty($_POST["egitim_okul_adi"])){
        $egitim_okul_adiErr = "Eğitim okul adı gerekli alan";
    } else{
        $egitim_okul_adi = safe_html($_POST["egitim_okul_adi"]);
    }


    if($_POST["departmans"]=="-1"){
        $departman_secErr = "Departman  gerekli alan";
    } else{
        $departman_sec = safe_html($_POST["departmans"]);
    }

/*
    if($_POST["hobbies"]=="-1"){
        $hobiErr = "Hobiler  gerekli alan";
    } else{
        $hobi = safe_html($_POST["hobbies"]);
    }

*/


    if(isset($_POST["hobbies"])){
        $hobbiesErr  = "hobiler gerekli alan";
    } else{
        $hobbies = safe_html($_POST["hobiler"]);
    }



    
    if(empty($_POST["askerlik"])){
        $askerlikErr = "Asklerlik  gerekli alan";
    } else{
        $askerlik = safe_html($_POST["askerlik"]);
    }

    
    if(empty($_POST["evlilik"])){
        $evlilikErr = "Evlilik  gerekli alan";
    } else{
        $evlilik = safe_html($_POST["evlilik"]);
    }

    if(empty($_POST["cinsiyet"])){
        $cinsiyetErr = "Cinsiyet  gerekli alan";
    } else{
        $cinsiyet = safe_html($_POST["cinsiyet"]);
    }


    if(empty($_POST["yazi-alani-1"])){
        $yazi_alaniErr = "Yazı alanı gerekli alan";
    } else{
        $yazi_alani = safe_html($_POST["yazi-alani-1"]);
    }
    

}

?>


<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>



<div class="container my-3">

<div class="row">
    <div class="col-12">

    <form action="sonuc.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="tc_no">TC Numarası</label>
            <input type="text" name="tc_no" class="form-control" value="<?php echo $tc_no?>">
            <div class="text-danger"><?php echo $tc_noErr ?></div>
        </div>
        <div class="mb-3">
            <label for="isim">İsim</label>
            <input type="text" name="isim" class="form-control" value="<?php echo $isim?>">
            <div class="text-danger"><?php echo $isimErr ?></div>
        </div>
        <div class="mb-3">
            <label for="soyad">Soyisim</label>
            <input type="text" name="soyad" class="form-control" value="<?php echo $soyad?>">
            <div class="text-danger"><?php echo $soyadErr ?></div>
        </div>

        <div class="mb-3">
            <label for="tel_no">Telefon Numarası</label>
            <input type="text" name="tel_no" class="form-control" value="<?php echo $tel_no?>">
            <div class="text-danger"><?php echo $tel_noErr ?></div>
        </div>
  
        <div class="mb-3">
            <label for="eposta">E-Posta Adresi</label>
            <input type="text" name="eposta" class="form-control" value="<?php echo $eposta?>">
            <div class="text-danger"><?php echo $epostaErr ?></div>
        </div>

        <div class="mb-3">
            <label for="city">Doğduğu Şehir</label>
            <select name="city" class="form-select">
                
            <option value="-1" selected>Şehir Seçiniz</option>
            <?php foreach($dogum_sehirler as $plaka => $sehir) : ?>
                <option 
                    value="<?php echo $sehir;?>" 
                    <?php echo $city == $sehir ? ' selected' : ''?>
                >
                    <?php echo $sehir ?>
                </option>
            <?php endforeach; ?>

            </select>
            <div class="text-danger"><?php echo $dogum_sehirErr ?></div>
        </div>


        <div class="mb-3">
            <label for="city2">Yaşadığı Şehir</label>
            <select name="city2" class="form-select">
                
            <option value="-1" selected>Şehir Seçiniz</option>
            <?php foreach($yasadigi_sehirler as $plaka => $sehir) : ?>
                <option 
                    value="<?php echo $sehir;?>" 
                    <?php echo $city2 == $sehir ? ' selected' : ''?>
                >
                    <?php echo $sehir ?>
                </option>
            <?php endforeach; ?>

            </select>
            <div class="text-danger"><?php echo $yasadigi_sehrErr ?></div>
        </div>

        <div class="mb-3">
            <label for="dogum_yil">Doğum Yıl</label>
            <select name="dogum_yil" class="form-select">
                
            <option value="-1" selected>Yıl Seçiniz</option>
            <?php foreach($dogum_yillar as $yil) : ?>
                <option 
                    value="<?php echo $yil;?>" 
                    <?php echo $yil2 == $yil ? ' selected' : ''?>
                >
                    <?php echo $yil ?>
                </option>
            <?php endforeach; ?>

            </select>
            <div class="text-danger"><?php echo $dogum_yilErr ?></div>
        </div>



        <div class="mb-3">
            <label for="dogum_ay">Doğum Ay</label>
            <select name="dogum_ay" class="form-select">
                
            <option value="-1" selected>Ay Seçiniz</option>
            <?php foreach($dogum_aylar as $ay) : ?>
                <option 
                    value="<?php echo $ay;?>" 
                    <?php echo $ay2 == $ay ? ' selected' : ''?>
                >
                    <?php echo $ay ?>
                </option>
            <?php endforeach; ?>

            </select>
            <div class="text-danger"><?php echo $dogum_ayErr ?></div>
        </div>


        <div class="mb-3">
            <label for="dogum_gun">Doğum Gün</label>
            <select name="dogum_gun" class="form-select">
                
            <option value="-1" selected>Gün Seçiniz</option>
            <?php foreach($dogum_gunler as $gun) : ?>
                <option 
                    value="<?php echo $gun;?>" 
                    <?php echo $gun2 == $gun ? ' selected' : ''?>
                >
                    <?php echo $gun ?>
                </option>
            <?php endforeach; ?>

            </select>
            <div class="text-danger"><?php echo $dogum_gunErr ?></div>
        </div>




        <div class="mb-3">
            <label for="egitim_seviye">Eğitim Seviyesi</label>
            <select name="egitim_seviye" class="form-select">
                
            <option value="-1" selected>Eğitim Seviyesi Seçiniz</option>
            <?php foreach($egitim_seviyeler as $egitim) : ?>
                <option 
                    value="<?php echo $egitim;?>" 
                    <?php echo $egitim2 == $egitim ? ' selected' : ''?>
                >
                    <?php echo $egitim ?>
                </option>
            <?php endforeach; ?>

            </select>
            <div class="text-danger"><?php echo $egitim_seviyeErr ?></div>
        </div>



        <div class="mb-3">
            <label for="egitim_okul_adi">En Yüksek Seviye Eğitim Gördüğünüz Okul İsmi</label>
            <input type="text" name="egitim_okul_adi" class="form-control" value="<?php echo $egitim_okul_adi?>">
            <div class="text-danger"><?php echo $egitim_okul_adiErr ?></div>
        </div>




        <div class="mb-3">
            <label for="departmans">Departmanlar</label>
            <select name="departmans" class="form-select">
                
            <option value="-1" selected>Departman Seçiniz</option>
            <?php foreach($departman_bilgiler as $departman) : ?>
                <option 
                    value="<?php echo $departman;?>" 
                    <?php echo $departman2 == $departman ? ' selected' : ''?>
                >
                    <?php echo $departman ?>
                </option>
            <?php endforeach; ?>

            </select>
            <div class="text-danger"><?php echo $departman_secErr ?></div>
        </div>

        <div class="mb-3">
            <label for="hobbies">Hobiler</label>



            <?php foreach($hobiler_bilgiler as $hobi) : ?>
                        <div class="form-check">
                            <input type="checkbox" name="hobbies[]" 
                            value="<?php echo $hobi;?>" 
                            id="hobbies_<?php echo $hobi;?>"
                            <?php if(in_array($id, $hobiler_bilgiler)) echo 'checked' ?>
                            >
                            <label for="hobbies_<?php echo $id;?>" class="form-check-label"><?php echo $hobi;?></label>
                        </div>
            <?php endforeach; ?>
            <div class="text-danger"><?php echo $hobiErr ?></div>


        </div>


        <div class="mb-3">
            <label for="askerlik">Askerlik Durumu</label><br>
            
            <?php foreach($askerlik_bilgiler as $askerlik) : ?>
                
                <input type="radio" name="askerlik" value="<?php echo $askerlik ?>"> <?php echo $askerlik ?>


            <?php endforeach; ?>

            
            <div class="text-danger"><?php echo $askerlikErr ?></div>
        </div>


        <div class="mb-3">
            <label for="evlilik">Evlilik Durumu</label><br>
            
            <?php foreach($evlilik_bilgiler as $evililik) : ?>
                
                <input type="radio" name="evililik" value="<?php echo $evililik ?>"> <?php echo $evililik ?>


            <?php endforeach; ?>

            
            <div class="text-danger"><?php echo $evlilikErr ?></div>
        </div>



        <div class="mb-3">
            <label for="cinsiyet">Cinsiyet Bilgisi</label><br>
            
            <?php foreach($cinsiyet_bilgiler as $cinsiyet) : ?>
                
                <input type="radio" name="cinsiyet" value="<?php echo $cinsiyet ?>"> <?php echo $cinsiyet ?>


            <?php endforeach; ?>

            
            <div class="text-danger"><?php echo $cinsiyetErr ?></div>
        </div>

        <div class="mb-3">
            <label for="kendini yanıt">Kendinizi Tanıtın</label><br>

            
            <textarea id="yazi-alani" class="form-control" name="yazi-alani-1" rows="2" cols="5">
            </textarea>

            <div class="text-danger"><?php echo $yazi_alaniErr ?></div>
        </div>



        <div class="mb-3">
            <label for="cv">CV Yükleme</label><br>

            
            <div class="text-danger"><?php echo $dosyaErr ?></div>
            <input type="file" name="fileToUpload" class="form-control">
        </div>


        
      

        <br>
        <button type="submit"  value="Upload" class="btn btn-primary" name="btnFileUpload">Gönder</button>


    </form>



    </div>
</div>

</div>


<?php include "partials/_footer.php"; ?>


<?php

echo "<pre>";
print_r($_POST);
echo "<pre>";


/*
            <select name="hobbies" class="form-select">
                
            <option value="-1" selected>Hobi Seçiniz</option>
            <?php foreach($hobiler_bilgiler as $hobi) : ?>
                <option 
                    value="<?php echo $hobi;?>" 
                    <?php echo $hobi2 == $hobi ? ' selected' : ''?>
                >
                    <?php echo $hobi ?>
                </option>
            <?php endforeach; ?>

            </select>
            <div class="text-danger"><?php echo $hobiErr ?></div>
*/
?>
