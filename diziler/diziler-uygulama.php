<?php
    $urun1 = array("Iphone 11", 7000);
    $urun2 = array("Iphone 12", 9000);
    $urun3 = array("Iphone 13", 8000);

    $urunler = array(
        array("Iphone 11", 7000),
        array("Iphone 12", 9000),
        array("Iphone 13", 8000)
    );

    $ortalama = ($urunler[0][1] + $urunler[1][1]+ $urunler[2][1])/3;
    echo $ortalama;
?>
