<?php

$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$civilite = $_GET["civilite"];
$email = $_GET["email"];
$commentaires = $_GET["commentaires"];
$naissance = $_GET["naissance"];
$interets = $_GET["interets"];



$db = new PDO('mysql:dbname=formationwm;host=localhost', 'root', '');
$sql = "INSERT INTO visiteur (nom, prenom, civilite, email, commentaires, naissance, interets)
        VALUES(  '$nom', '$prenom', '$civilite', '$email', 
        '$commentaires', $naissance, '$interets' )";
$stmt = $db->prepare($sql);
$stmt->execute();

?>

<p>Visiteur bien enregistré</p>