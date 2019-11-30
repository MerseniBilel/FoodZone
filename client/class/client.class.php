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
            $req = 'SELECT * FROM customer WHERE email= :email';
            $result = $this->cnx->prepare($req);
            $result->bindParam(':email', $email);
            $result->execute();
            return $result;
        }

        public function verifCnx($email,$mdp)
        {
        
                $req = 'SELECT * FROM customer WHERE email= :email and pwd= :mdp';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':email', $email);
                $result->bindParam(':mdp', $mdp);
                $result->execute();
                return $result;
        }


        public function addNewClient($nom, $tel, $adresse, $email, $mdp)
        {
            
            $sql = "INSERT INTO customer(name,email,pwd,phnno,adresse) 
            VALUES (:nom,:email,:mdp,:tel,:adr)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":nom", $nom);
            $result->bindparam(":email", $email);
            $result->bindparam(":mdp", $mdp);
            $result->bindparam(":tel", $tel);
            $result->bindparam(":adr", $adresse);
            $result->execute();
            return $result;
                
            }
        }
        