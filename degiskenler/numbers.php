<?php

    $number1=10;
    $number2=5;
    $number3="20";
    $number4=-30;
    $number5=7.3;

    echo "sonuc=".($number1 + $number2)."<br>";
    echo "sonuc=".($number1 * $number2)."<br>";

    echo var_dump(is_int($number1))."<br>";
    echo var_dump(is_int($number3))."<br>";
    echo var_dump(is_numeric($number3))."<br>";

    echo abs($number4)."<br>";
    echo ceil($number5)."<br>";
    echo floor($number5)."<br>";
    
    echo sqrt($number1)."<br>";
    echo floor(pow($number2 , $number5));
?>