<?php

class DBConnection
{
    private $host = 'localhost';
    private $dbname = 'foodzone';
    private $user = 'root';
    private $pwd = '';
    public $conn = null;

        public function connectDB()
        {
            try {
                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->user, $this->pwd, [
                                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                                ]);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            return $this->conn;
        }
}
