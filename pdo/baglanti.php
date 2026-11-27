<?php

    print_r(PDO::getAvailableDrivers());

    $host = "localhost";
    $user = "root";
    $password = "1234";
    $dbName = "";
    try {
        $dsn = "mysql:host=".$host.";dbname=".$dbName;
        $baglanti = new PDO($dsn, $user, $password);
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "bağlantı yapıldı";
    }
    catch(PDOException $e){ 
        echo "bağlantı hatası:".$e->getMessage();
    }
   

?>