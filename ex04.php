<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Types et conversions</title>
</head>
<body>
<h1>Exercice 4 - Types et conversions</h1>
<?php
$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;

echo "<h2>Types et valeurs</h2><pre>";
var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);
echo "</pre>";

echo "<h2>Conversions</h2><pre>";
echo '"42" en entier : ';
var_dump((int) $chaine);
echo "15.8 en entier : ";
var_dump((int) $decimal);
echo "42 en chaîne : ";
var_dump((string) $entier);
echo "</pre>";

echo "<h2>Affichage des booléens</h2>";
echo "<p>true avec echo : [" . $vrai . "]</p>";
echo "<p>false avec echo : [" . $faux . "]</p>";
echo "<pre>";
var_dump($vrai);
var_dump($faux);
echo "</pre>";

echo "<h2>Conversions en booléen</h2><pre>";
echo "0 : ";
var_dump((bool) 0);
echo '"0" : ';
var_dump((bool) "0");
echo '"PHP" : ';
var_dump((bool) "PHP");
echo "Tableau vide : ";
var_dump((bool) []);
echo "</pre>";
?>
<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>