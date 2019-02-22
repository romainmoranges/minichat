<?php

// On importe le fichier config
require('config.php');

// On détermine les variables post
$message    = $_POST['message'];
$pseudo     = $_POST['pseudo'];

var_dump($pseudo, $message);

// On écrit un tableau avec valeurs a ajouter 
$values = array(
    $pseudo,
    $message
);

// On prépare et exécute la requête
$requete = $bdd->prepare('INSERT INTO minichat(pseudo, messages) VALUES(?, ?)');
$requete->execute($values);

// On redirige vers la page du chat 
header('Location: minichat.php');
?>