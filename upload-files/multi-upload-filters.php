<?php

    if(isset($_POST["btnUpload"]) && $_POST["btnUpload"] == "Upload"){
        // echo "<pre>";
        // print_r($_FILES);

        $dosya_adeti = count($_FILES["fileToUpload"]["name"]);

        if($dosya_adeti>3){
            die("en fazla 3 dosya yükleyebilirsiniz");
        }

        for($x=0; $x<$dosya_adeti; $x++){
            $fileTmpPath = $_FILES["fileToUpload"]["tmp_name"][$x];
            $fileName = $_FILES["fileToUpload"]["name"][$x];

            $dest_path = "files/".$fileName;

            if(move_uploaded_file($fileTmpPath, $dest_path)){
                echo $fileName."dosyası yüklendi. <br>";
            }else{
                echo $fileName."dosyası yüklenemedi. <br>";
            }

            echo $fileTmpPath;
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

        <input type="file" multiple="multiple" name="fileToUpload[]">
        <input type="submit" value="Upload" name="btnUpload">

    </form>

</body>
</html>