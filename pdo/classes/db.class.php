<?php

    class Db{
        private $host = "localhost";
        private $user = "root";
        private $password = "1234";
        private $dbName = "";

        protected function connect() {
            try {
                $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
                $pdo = new PDO($dsn, $this->user, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                
                return $pdo;
            }
            catch(PDOException $e){ 
                echo "bağlantı hatası:".$e->getMessage();            

            }
        }
