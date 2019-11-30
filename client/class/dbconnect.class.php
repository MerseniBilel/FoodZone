<?php

    class BasesDonnees
    {
        private $dbhost = 'localhost';
        private $dbname = 'food_zone';
        private $dbuser = 'root';
        private $dbpwd = '';
        
        public $conn = null;

        public function connectDB()
        {
            try {
                $this->conn = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpwd);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            return $this->conn;
        }
    }