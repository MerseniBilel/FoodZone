<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>liste d'etudiants </title>
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-4">
        <h1 class="text-center">Liste de véhicules : </h1>
        </div>
    <table  class="table table-bordered">
    <tr>
    <th>ID</th>
    <th>status </th>
    <th>matricule </th>
    <th>operation</th>
    </tr>

    <?php 
    include 'vehicule_poo/classes/vehicule.class.php';
    $vehicule = new vehicule;
    $listvehicule = $vehicule->Lirevehicules();
    
    while ($data= $listvehicule->fetch()){
        echo'<tr>';
        echo '<td>'.$data['idcar'].'</td>';
        echo '<td>'.$data['status'].'</td>';
        echo '<td>'.$data['vehiculenumber'].'</td>';
        echo'<td> 
        
        <a href="vehicule_poo/suprimer.php?vid='.$data['idcar'].'" class="btn btn-danger ">Suprimer vehicule </a>
      
        ';
        echo '</td>';
        echo'</tr>';

                                        }

    ?>
    </table>
    <a href="vehicule_poo/ajout.php" class="btn btn-primary ">ajouter vehicule </a>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>