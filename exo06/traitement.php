<?php

$nom = $_GET["nom"];
$prenom = $_GET["prenom"];



$db = new PDO('mysql:dbname=formationwm;host=localhost', 'root', '');
$sql = "INSERT INTO visiteur (nom, prenom, civilite, email, commentaires, naissance, interets)
        VALUES(  '$nom', '$prenom', '$civilite', '$email', 
        '$commentaires', $naissance, '$interets' )";
$stmt = $db->prepare($sql);
$stmt->execute();

?>

<p>Visiteur bien enregistré</p>