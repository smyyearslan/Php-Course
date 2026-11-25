<?php
    $sehirler=array("ankara","karabuk","mersin");
    $plakalar=array(06,78,33);
    
    echo "sehir:"."$sehirler[0]"."<br>";
    echo "plakasi:"."$plakalar[0]"."<br>";


    $sehirler2= array("06"=>"ankara","78"=>"karabuk","33"=>"mersin");
    echo $sehirler2["06"]."<br>";
    echo $sehirler2["78"]."<br>";
    echo $sehirler2["33"]."<br>";
?>
