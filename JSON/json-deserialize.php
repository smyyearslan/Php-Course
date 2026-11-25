<?php

    $jsonString = '{
        "firstName" : "Selma",
        "lastName"  : "Yıldız",
        "age"       : "24",
        "hobbies"   : ["cooking","reading"],
        "children"  : [
            {
                "firstName" : "Burak",
                "age"       : "5"
            },
            {
                "firstName" : "Nur",
                "age"       : "2"
            }
        ]
    }';

    echo $jsonString;
    echo "<br> <br>";
    echo gettype($jsonString);
    //echo $jsonString["firstName"];

    $jsonArr = json_decode($jsonString, true);
    echo "<pre>";
    print_r($jsonArr);
    echo "<pre>";

    echo $jsonArr["firstName"];
    echo "<br>";
    echo $jsonArr["children"][0]["firstName"];
?>