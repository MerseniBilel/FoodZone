<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=foodzone;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table vehicule
$reponse = $bdd->query('SELECT * FROM véhicule ');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>ID</strong> : <?php echo $donnees['vid']; ?><br />
    La statut  est : <?php echo $donnees['status']; ?>, et elle a la matricule: <?php echo $donnees['vehiculenumber']; ?> 

   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>