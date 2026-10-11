<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Constantes et calculs</title>
</head>
<body>
<h1>Exercice 3 - Constantes et calculs</h1>
<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;

echo "<p>Prix unitaire HT : $prixUnitaireHT " . DEVISE . "</p>";
echo "<p>Quantité : $quantite</p>";
echo "<p>Total HT : $totalHT " . DEVISE . "</p>";
echo "<p>TVA (" . TAUX_TVA . " %) : $montantTVA " . DEVISE . "</p>";
echo "<p>Total TTC avant livraison : $totalTTC " . DEVISE . "</p>";

// Ajout des frais de livraison.
$totalTTC += 15;

echo "<p>Livraison : 15 " . DEVISE . "</p>";
echo "<p>Montant final : $totalTTC " . DEVISE . "</p>";

if (defined("TAUX_TVA")) {
    echo "<p>La constante TAUX_TVA existe.</p>";
}
?>
<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>