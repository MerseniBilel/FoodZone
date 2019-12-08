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

        public function whatinpanier(){
            $sql = 'SELECT p.pid ,p.name , p.price , p.file , c.qty , c.cid from produits p JOIN chariot c on c.pid = p.pid';
            $result  = $this->cnx->prepare($sql);
            if($result->execute()){
                return $result;
            }
        }

        public function insertinto_order($qty,$status,$pid,$cid){
            $sql = 'INSERT INTO ordre (qty,status,pid,cid) VALUES (:qty, :status, :pid, :cid)';
            $result = $this->cnx->prepare($sql);
            $result->bindParam(':qty',$qty);
            $result->bindParam(':status',$status);
            $result->bindParam(':pid',$pid);
            $result->bindParam(':cid',$cid);
            $result->execute();
            return $result;
        }

        public function resetpanier(){
            $sql = 'DELETE FROM chariot';
            $result = $this->cnx->prepare($sql);
            $result->execute();
            return $result;
        }

        public function delete_panier($pid){
            $sql = 'DELETE FROM chariot WHERE pid = :pid';
            $result = $this->cnx->prepare($sql);
            $result->bindParam(':pid',$pid);
            $result->execute();
            return $result;
        }

    }