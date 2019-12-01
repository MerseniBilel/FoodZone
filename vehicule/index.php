<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
        <div class="jumbotron mt-4">
                 <h1 class="text-center">Liste de véhicules : </h1>
        </div>
<div class="container">
    <table  class="table table-bordered">
    <tr>
    <th>ID</th>
    <th>status </th>
    <th>matricule </th>
    <th>operation</th>
    </tr>
    

    <?php 
    include 'dbconnection.php';
    $reponse = $bdd->query('SELECT * FROM véhicule ');
    $reponse->execute();
    while ($donnees = $reponse->fetch()){
        echo'<tr>';
        echo '<td>'.$donnees['vid'].'</td>';
        echo '<td>'.$donnees['status'].'</td>';
        echo '<td>'.$donnees['vehiculenumber'].'</td>';
        echo'<td> <a href="" class="btn btn-success">Ajouter chariot</a>
        <a href="" class="btn btn-success">Livrer la commande </a>';
        echo '</td>';
        echo'</tr>';
    }
    ?>

</table>
<a href="" class="btn btn-primary ">ajouter vehicule </a>
</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>