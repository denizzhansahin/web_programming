<?php

    require "libs/variables.php";
    require "libs/functions.php";

    $kontrol_deger = 0;

?>


<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>

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





<?php foreach($_POST as $key => $value): ?>

    
    <div class="card mb-3">
        <div class="row">
            <div class="col-4">
                
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">
                        
                            <?php echo $liste_sonuc[$kontrol_deger]; txt_yazma($liste_sonuc[$kontrol_deger]);?>
                        
                    </h5>
                    <p class="card-text">
                        <?php 
                        if($key=="hobbies"){
                            foreach($value as $i){
                                echo $i."<br>";
                                txt_yazma($i);
                            }
                        }else{
                            echo $value;
                            txt_yazma($value);
                        }
                         
                        ?>
                        
                    </p>
                    <p>


                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php $kontrol_deger++;;?>



<?php endforeach ?>



<?php include "partials/_footer.php"; 



function txt_yazma($veri){
    $dosayaAditxt = "dosya/dosya.txt";
    $dosya = fopen($dosayaAditxt, "a");
    fwrite($dosya, "$veri\n");
    fclose($dosya);

}




?>


