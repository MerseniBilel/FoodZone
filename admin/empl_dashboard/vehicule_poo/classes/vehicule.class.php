<?php
require 'dbconnect.class.php';

class Vehicule{
    
    private $cnx;

    public function __construct()
    {
        $db = new BasesDonnees;
        $this->cnx = $db->connectDB();
    }

    public function Lirevehicules(){
            $rep='SELECT * FROM car';
            $result=$this->cnx->prepare($rep);
            if($result->execute()){
            return $result;
            }else{
                return null;
            }
        
        }



    //une methode pour ajouter un véhicule :

    public function addNewVehicule($status,$vehiculenumber)
    {
        $sql = 'INSERT INTO car(status,vehiculenumber) 
        VALUES (:status,:vehiculenumber)';
        $result = $this->cnx->prepare($sql);
        $result->bindParam(':status', $status);
        $result->bindParam(':vehiculenumber', $vehiculenumber);
        if($result->execute()){
            return $result;
        }else{
            return null;
        }
    }



        //une methode pour supprimer une véhicule :

        public function deleteVehicule($vid)
        {
            try {
                $sql = 'DELETE FROM car WHERE idcar = :vc_id';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":vc_id", $vid);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

            


} 

?>