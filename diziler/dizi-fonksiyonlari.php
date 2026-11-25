<?php

    $sayilar = array(1, 5, 36, 28, 83);

    echo count($sayilar)."<br>";

    sort($sayilar);

    print_r($sayilar);
    echo "<br>";
    echo $sayilar[0]." ".$sayilar[1]." ".$sayilar[2]." ".$sayilar[3]." ".$sayilar[4];
    echo "<br>";

    rsort($sayilar);
    print_r($sayilar);
    echo "<br>";

    echo $sayilar[0]." ".$sayilar[1]." ".$sayilar[2]." ".$sayilar[3]." ".$sayilar[4];
    echo "<br>";

    array_shift($sayilar);
    echo $sayilar[0]." ".$sayilar[1]." ".$sayilar[2]." ".$sayilar[3];
    echo "<br>";


    array_unshift($sayilar,"3");
    echo $sayilar[0]." ".$sayilar[1]." ".$sayilar[2]." ".$sayilar[3]." ".$sayilar[4]."<br>";

    echo in_array("28",$sayilar)."<br>";

    echo array_search("28",$sayilar)."<br>";

    print_r(array_keys($sayilar));
?>