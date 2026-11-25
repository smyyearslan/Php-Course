<?php

    function dosya_kayit($dosya, $urunAdi, $fiyat){
        $myfile = fopen($dosya, "a");

        $icerik = $urunAdi.' '.$fiyat;
        fwrite($myfile, $icerik."\n" );
        fclose($myfile);
    }

    function dosya_oku($dosya){

    }    

    dosya_kayit("products.txt","iphone 12","8000");

?>