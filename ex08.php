<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Contrôle des boucles</title>
</head>
<body>
<h1>Exercice 8 - Contrôle des boucles</h1>

<h2>1. Nombres pairs</h2>
<p>
<?php
$nombre = 0;
while ($nombre <= 20) {
    if ($nombre == 10) {
        echo "<strong>$nombre</strong> ";
    } else {
        echo "$nombre ";
    }
    $nombre += 2;
}
?>
</p>

<h2>2. Comparaison while et do-while</h2>
<?php
$compteur = 5;
$executionsWhile = 0;

while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}

// Réinitialisation avant la deuxième boucle.
$compteur = 5;
$executionsDoWhile = 0;

do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);

echo "<p>while : $executionsWhile exécution</p>";
echo "<p>do-while : $executionsDoWhile exécution</p>";
?>

<h2>3. continue et break</h2>
<p>
<?php
for ($nombre = 1; $nombre <= 20; $nombre++) {
    if ($nombre == 16) {
        break;
    }
    if ($nombre % 3 == 0) {
        continue;
    }
    echo "$nombre ";
}
?>
</p>

<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>