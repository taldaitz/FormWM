<?php

$nom = $_GET["nom"];
$prenom = $_GET["prenom"];

$db = new PDO('mysql:dbname=formationwm;host=localhost', 'root', '');

$sql = "INSERT INTO test (nom, prenom)
        VALUES(  '$nom', '$prenom' )";
$stmt = $db->prepare($sql);
$stmt->execute();

?>

<p>Test bien réalisé</p>