<?php

    class Product {
        public $name;
        public $price;

//        function set_name($name){
//            $this->name = $name;
//        }



        function __construct($name, $price){
            $this->name = $name;
            if($price<0){
                $this->price = 0;
            }else {
                $this->price = $price;
            }
        }
        

        function get_name(){
            return $this->name;
        }

        function get_price(){
            return $this->price;
        }
    }  

    $p1 = new Product("Samsung S20", 5000);
    
    echo $p1->get_name();
    echo $p1->get_price();
      
?>