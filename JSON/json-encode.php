<?php

    $urunler = array("samsung a27","iphone 15","iphone 18");

    echo gettype($urunler);
    //echo $urunler;
    echo "<br> <br>";
    echo $urunler[0];
    echo "<br> <br>";


    $jsonString = json_encode($urunler);

    echo gettype($jsonString);
    echo "<br> <br>";
    echo $jsonString;

    $myfile = fopen("urunler.json","w");
    fwrite($myfile, $jsonString);
    fclose($myfile);

    $user = array(
        "username" => "smyye",
        "password" => "123",
        "name" => "sumeyye"
    );
    
    echo "<pre>";

    $jsonUser = json_encode($user);

    echo $jsonUser;

?>