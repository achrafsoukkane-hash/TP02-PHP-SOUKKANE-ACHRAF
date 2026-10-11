<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1 - Affichage</title>
</head>
<body>
<h1>Exercice 1 - Affichage</h1>
<?php
// Message de bienvenue.
echo "<p>Bienvenue dans mon TP PHP</p>";

/* Informations fictives.
   Chaque information apparaît sur une ligne distincte. */
echo "<p>Nom : El Amrani</p>";
echo "<p>Prénom : Sami</p>";
echo "<p>Groupe : G1</p>";
?>
<p><?= "Ceci est ma première page PHP." ?></p>
<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>