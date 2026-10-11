<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Boucles for</title>
</head>
<body>
<h1>Exercice 7 - Boucles for</h1>

<section>
<h2>Table de multiplication</h2>
<?php
$nombre = 7;

for ($i = 1; $i <= 10; $i++) {
    $produit = $nombre * $i;
    echo "$nombre × $i = $produit<br>";
}
?>
</section>

<section>
<h2>Pyramide de six lignes</h2>
<pre><?php
// Une boucle pour les lignes et une pour les étoiles.
for ($ligne = 1; $ligne <= 6; $ligne++) {
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "*";
    }
    echo "\n";
}
?></pre>
</section>

<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>