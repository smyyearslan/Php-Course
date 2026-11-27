<?php
    include_once('baglanti.php');

    // $sql = "SELECT * from products";
    // $results = $pdo->query($sql);

    // $urunler = $results->fetchAll();

    // foreach ($urunler as $urun){
    //     echo $urun->title."<br>";
    // }

    // $price = 1000;

    // $sql = "SELECT * from products WHERE id=?";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$productId]);
    // $urunler = $stmt->fetchAll();

    // foreach($urunler as $urun){
    //     echo $urun->title."<br>";
    // }

    // $title = "Samsung A27";
    // $price = 30000;
    // $description = "nice phone";

    // $sql = "INSERT INTO products(title,price,description) VALUES(:title,:price,:description)";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(["title"=>$title, "title"=>$price, "description"=>$description]);

    // echo "kayıt eklendi";

    // $sql = "UPDATE products SET title=:title WHERE id=:id";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id'=>$id, 'title'=>$title]);

    // echo "updated:".$stmt->rowCount();

    $sql = "DELETE FROM products  WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);

    echo "deleted:".$stmt->rowCount();



?>