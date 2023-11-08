<?php

    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){
        echo "<pre>";
        print_r($_FILES["fileToUpload"]);
        print_r($_POST);
        echo "/<pre>";


        //Dosya Seçilmiş mi
        //dosya boyutu
        //dosya ismi kontrolü
        //dosya uzantısı

        $dest_path = "./uploadedFiles/"; //yuklenecek yer
        $filename = $_FILES["fileToUpload"]["name"]; //dosya yolu


        if(empty($filename)){
            echo "dosya seçiniz";
        }

        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"]; //gecici dosya yolu
        

        $fileDestPath = $dest_path.$filename;

        if(move_uploaded_file($fileSourcePath, $fileDestPath)){ //dosya yukleme fonksiyonu
            echo "dosya yüklendi";
        } else {
            echo "hata";
        }


    }

?>