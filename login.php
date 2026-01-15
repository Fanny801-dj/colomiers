<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion US Colomiers</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
</head>
<body>
<?php include 'php/components/header.php'; ?>

<main class="formulaire">
    <form method="POST" class="form">
        <h1>CONNEXION PAGE ADMIN</h1>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <button type="submit">OK</button>
    </form>
</main>
