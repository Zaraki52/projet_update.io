<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['utilisateur'])) {
    header("Location: login.php"); // Rediriger vers la page de connexion
    exit(); // Terminer l'exécution du script après la redirection
}

include("header.php");
include("banniere.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page protégée</title>
    <!-- Inclure les liens vers les fichiers CSS et JavaScript nécessaires -->
</head>
<body>
    <h2>Bienvenue sur la page protégée</h2>
    <p>Cette page est réservée aux utilisateurs connectés.</p>
    <!-- Contenu supplémentaire de la page protégée -->
</body>
</html>
