<?php

    include 'dbconnect.class.php';

    class Client
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }
        
        public function verifExist($email)
        {
            $req = 'SELECT * FROM clients WHERE email= :email';
            $result = $this->cnx->prepare($req);
            $result->bindParam(':email', $email);
            if($result->execute()){
            return $result;
            }else{
                return null;
            }
        }

        public function addNewClient($nom, $tel, $adresse, $email, $mdp, $img)
        {
            
            $sql = "INSERT INTO clients(name,email,pwd,phonenumber,adresse,img) 
            VALUES (:nom,:email,:mdp,:tel,:adr,:img)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":nom", $nom);
            $result->bindparam(":email", $email);
            $result->bindparam(":mdp", $mdp);
            $result->bindparam(":tel", $tel);
            $result->bindparam(":adr", $adresse);
            $result->bindparam(":img", $img);
            if($result->execute()){
                return $result;
            }else{
                return null;
            }
            }

            public function updateClient($email,$nom, $adr, $tel, $mdp, $img)
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

            public function deleteClient($email)
            {
                $sql = 'DELETE FROM clients WHERE email = :email';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":email", $email);
                if($result->execute()){
                return $result;
                }else{
                    return null;
                }
            }

        }