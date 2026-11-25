<?php

    if(isset($_POST["btnUpload"]) && $_POST["btnUpload"]=="Upload"){
       
        echo "<pre>";
        #print_r($_FILES["fileToUpload"]);
    
        $uploadOk = 1;
        $fileTmpPath = $_FILES["fileToUpload"] ["tmp_name"];
        $fileName = $_FILES["fileToUpload"] ["name"];
        $dosya_uzantilari = array('jpg','jpeg','png');

        #dosya seçilmiş mi?
        if(empty($fileName)){
            echo "dosya seçiniz.<br>";
            $uploadOk = 0;
        }

        #dosya boyutu kontrolü
        $fileSize = $_FILES["fileToUpload"]["size"];

        // if($fileName > 500000) {
        //     echo "Dosya boyutu fazla.<br>"; 
        //     $uploadOk = 0;
        // }

        #dosya uzantısı kontrolü
        $dosyaAdi_Arr = explode(".", $fileName);
        $dosyaAdi_uzantisiz = $dosyaAdi_Arr[0];
        $dosya_uzantisi = $dosyaAdi_Arr[1];

        if(!in_array($dosya_uzantisi, $dosya_uzantilari)){
            echo "dosya uzantisi kabul edilmiyor.<br>";
            echo "kabul edilen dosya uzantilari:".implode(',', $dosya_uzantilari)."<br>";
            $uploadOk = 0;
        }

        $uploadFolder = './files/';
        $dest_path = $uploadFolder.$fileName;

        if($uploadOk==0){
            echo "Dosya yüklenmedi";
        }else{
            if(move_uploaded_file($fileTmpPath, $dest_path)) {
                echo "dosya yüklendi";
            }else{
                echo "hata";
            }
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
    
    <form method="POST" enctype="multipart/form-data">

        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload" name="btnUpload">

    </form>

</body>
</html>