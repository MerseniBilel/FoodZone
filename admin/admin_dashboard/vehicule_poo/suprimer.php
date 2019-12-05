<?php
    include 'classes/vehicule.class.php';

    $vc = new vehicule;
    $vc->deleteVehicule($_GET['vid']);
    header('Location:../cars.php?notif=delete');

?>