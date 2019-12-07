<?php

    include 'dbconnect.class.php';

    class Panier
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function getInfo($pid){
            $req = 'SELECT * FROM produits WHERE pid=:pid';
            $result  = $this->cnx->prepare($req);
            $result->bindParam(':pid',$pid);
            if($result->execute()){
                return $result;
            }
        }

        public function getBadge(){
            $req='SELECT count(*) as total FROM chariot';
            $result  = $this->cnx->prepare($req);
            if($result->execute()){
                return $result;
            }
        }

        public function intoPanier($qty,$pid,$cid){
            $req = 'INSERT INTO chariot (qty, cid, pid) VALUES(:qty, :cid, :pid)';
            $result = $this->cnx->prepare($req);
            $result->bindParam(':qty',$qty);
            $result->bindParam(':cid',$cid);
            $result->bindParam(':pid',$pid);
            if($result->execute()){
                return $result;
            }


        }


    }