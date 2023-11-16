<?php

// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numero = $_POST['numero'];
$email = $_POST['email'];


// Enregistrement des données dans la base de données
$req = $bdd->prepare('INSERT INTO inscription (nom, prenom, email, numero) VALUES (:nom, :prenom, :email, :numero)');
$req->execute(array(
  'nom' => $nom,
  'prenom' => $prenom,
  'email' => $email,
  'numero' => $numero,
 
));

// Affichage d'un message de confirmation
echo "Les données sont tchorr.";

?>