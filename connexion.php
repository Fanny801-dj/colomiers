<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion US Colomiers</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
</head>
<body>

<?php 
    // option pour la gestion de l'encodage
    $options=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ".$encodage); 
 
    // Gestion des erreurs avec try catch 
    try 
    { 
        $connection = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options); 
        if($debug) 
        { 
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }    
    } catch (PDOException $erreur) 
    {
        echo "Serveur actuellement innaccessible, veuillez nous excuser.";
        exit(); 
    } 
?>


<?php
session_start();
include 'scripts/connection.php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $mdp = $_POST['mdp'];

    if ($connection) {
        $requete = $connection->prepare("SELECT * FROM utilisateurs WHERE username = :username AND mdp = :mdp");
        $requete->execute([
            'username' => $username,
            'mdp' => $mdp,
        ]);

        $utilisateur = $requete->fetch();

        if ($utilisateur) {
            // Si la connexion est rÃ©ussie
            $_SESSION['username'] = $utilisateur['username'];
            $_SESSION['password'] = $utilisateur['password'];

            // Redirection vers la page d'accueil
            header("Location: accueil.php");
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";//si la connexion au compte ne marche pas
        }
    } else {
        header("Location: inscription.php");
        exit();
    }
}
?>