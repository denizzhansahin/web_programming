<?php

    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){

        /*
        echo "<pre>";
        print_r($_FILES["fileToUpload"]);
        print_r($_POST);
        echo "/<pre>";
        */


        //Dosya Seçilmiş mi
        //dosya boyutu
        //dosya ismi kontrolü
        //dosya uzantısı



        if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0){

            
        


        $uploadOk = true;
        $dest_path = "./uploadedFiles/"; //yuklenecek yer
        $filename = $_FILES["fileToUpload"]["name"]; //dosya yolu
        $fileSize = $_FILES["fileToUpload"]["size"]; //dosya yolu
        $dosya_uzantilari = array('jpg','png');


        if(empty($filename)){
            $uploadOk = false;
            echo "dosya seçiniz"."<br>";
        }

        if($fileSize > 5000000){
            $uploadOk = false;
            echo "Dosya boyutu fazla"."<br>";
        }


        //1.jpg -> 1, jpg
        $dosayaAdi = explode(".",$filename);
        $dosayaAdi_uzantisiz = $dosayaAdi[0];
        $dosayaAdi_uzantili = $dosayaAdi[1];

        if(!in_array($dosayaAdi_uzantili,$dosya_uzantilari)){
            $uploadOk = false;
            echo "dosya uzantısı kabul edilmiyor";
            echo "kabul edilen dosyalar : ".implode(",",$dosya_uzantilari);
        }

        $yeni_dosyaAdi = md5(time().$dosayaAdi_uzantisiz).'.'.$dosayaAdi_uzantili;

        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"]; //gecici dosya yolu
        

        //$fileDestPath = $dest_path.$filename; //kendi dosya adi ile yükleme
        $fileDestPath = $dest_path.$yeni_dosyaAdi;

        if(!$uploadOk){
            echo "dosya yüklenemedi";
        } else {

            if(move_uploaded_file($fileSourcePath, $fileDestPath)){ //dosya yukleme fonksiyonu
                echo "dosya yüklendi";
            } else {
                echo "hata";
            }
    
        }



    } else {
        echo "bir hata oluştu";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload" name="btnFileUpload">

    </form>




</body>
</html>