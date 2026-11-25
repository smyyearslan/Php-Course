<?php

    function carp(&$deger){
        $deger *= $deger;
    }

    $puan = 20;
    carp($puan);

    echo $puan."<br>";

    function topla($deger2){
        $deger2 += $deger2;
    }

    topla($puan);
    echo $puan;
?>
