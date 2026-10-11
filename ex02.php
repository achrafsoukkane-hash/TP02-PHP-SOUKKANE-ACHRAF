<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Variables</title>
</head>
<body>
<h1>Exercice 2 - Variables</h1>
<?php
// Données fictives.
$nom = "El Amrani";
$prenom = "Sami";
$age = 20;
$formation = "Informatique";

$presentation = "Je m'appelle " . $prenom . " " . $nom
    . ", j'ai " . $age . " ans et je suis en formation "
    . $formation . ".";

$presentation .= " J'apprends PHP.";
echo "<p>" . $presentation . "</p>";

// Ces deux variables sont différentes.
$note = 12;
$Note = 16;

echo "<p>\$note = " . $note . "</p>";
echo "<p>\$Note = " . $Note . "</p>";
?>
<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>