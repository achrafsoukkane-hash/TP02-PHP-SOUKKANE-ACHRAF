<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - Moyenne et mention</title>
</head>
<body>
<h1>Exercice 5 - Moyenne et mention</h1>
<?php
$moyenne = 14;

if ($moyenne < 0 || $moyenne > 20) {
    $message = "Note invalide";
} elseif ($moyenne < 10) {
    $message = "Non validé";
} elseif ($moyenne < 12) {
    $message = "Passable";
} elseif ($moyenne < 14) {
    $message = "Assez bien";
} elseif ($moyenne < 16) {
    $message = "Bien";
} else {
    $message = "Très bien";
}

echo "<p>Moyenne : $moyenne</p>";
echo "<p>$message</p>";
?>
<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>