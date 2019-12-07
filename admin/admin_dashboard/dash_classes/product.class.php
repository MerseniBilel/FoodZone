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

            public function updateProduct($nom ,$price ,$desc, $file)
            {
                $sql = 'UPDATE clients
                        SET name = :nom,
                            pwd = :mdp,
                            phonenumber = :tel,
                            adresse = :adr,
                            img = :img
                        WHERE email = :email';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":nom", $nom);
                $result->bindparam(":mdp", $mdp);
                $result->bindparam(":tel", $tel);
                $result->bindparam(":adr", $adr);
                $result->bindparam(":img", $img);
                $result->bindparam(":email", $email);
                
                if($result->execute())
                return $result;
                else
                return null;
            }

            /*public function deleteClient($email)
            {
                $sql = 'DELETE FROM clients WHERE email = :email';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":email", $email);
                if($result->execute()){
                return $result;
                }else{
                    return null;
                }
            }*/

        }