<?php

    include 'db_connect.class.php';

    class Produit
    {
        private $cnx;

        public function __construct()
        {
            $db = new DBConnection;
            $this->cnx = $db->connectDB();
        }
        
        public function addNewProduct($nom ,$price ,$desc, $file,$type)
        {
            
            $sql = "INSERT INTO produits(name,description,price,file,type) 
            VALUES (:nom,:descr,:price,:file,:type)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":nom", $nom);
            $result->bindparam(":descr", $desc);
            $result->bindparam(":price", $price);
            $result->bindparam(":file", $file);
            $result->bindparam(":type", $type);
            if($result->execute()){
                return $result;
            }else{
                return null;
            }
        }

        public function number_of_orders(){
            $req = 'SELECT count(*)  as orders FROM ordre ';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;
        }


        public function getallprod(){
            $req = 'SELECT * FROM produits';
            $result = $this->cnx->prepare($req);
            $result->execute();
            return $result;
        }

        public function getone_product($pid){
            $req = 'SELECT * FROM produits WHERE pid = :pid';
            $result = $this->cnx->prepare($req);
            $result->bindParam(':pid',$pid);
            $result->execute();
            return $result;
        }

            public function updateProduct($nom ,$price ,$desc,$pid)
            {
                $sql = 'UPDATE produits 
                        SET 
                        name = :nom, 
                        description = :desc, 
                        price = :price 
                        WHERE pid = :pid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":nom", $nom);
                $result->bindparam(":desc", $desc);
                $result->bindparam(":price", $price);
                $result->bindparam(":pid", $pid);
                if($result->execute()){
                    return $result;
                }else{
                    return null;
                }
            }

            public function deleteprod($pid)
            {
                $sql = 'DELETE FROM produits WHERE pid = :pid';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":pid", $pid);
                if($result->execute()){
                return $result;
                }else{
                    return null;
                }
            }

        }