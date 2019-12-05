<?php
 include 'classes\vehicule.class.php';

       if(isset($_POST['submit'])){

           if(!empty($_POST['status']) && !empty($_POST['vehiculenumber'])){

            $status = $_POST['status'];
            $vehiculenumber = $_POST['vehiculenumber'];
           }else{
               header('location:ajout.php');
           }


            $vc = new Vehicule;
            $result = $vc->addNewVehicule($status,$vehiculenumber);
     
            if($result){   
             header( 'Location: ../cars.php');
            }



           }else{
            header('location:ajout.php');
           }
        

         




?>