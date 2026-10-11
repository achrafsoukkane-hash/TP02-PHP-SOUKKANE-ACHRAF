<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Tableau de notes</title>
</head>
<body>
<h1>Exercice 9 - Tableau de notes</h1>
<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nombreValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";
?>

<table border="1">
<tr>
    <th>Étudiant</th>
    <th>Note</th>
    <th>Résultat</th>
</tr>
<?php
foreach ($notes as $etudiant => $note) {
    if ($note >= 10) {
        $resultat = "Validé";
        $nombreValides++;
    } else {
        $resultat = "Non validé";
    }

    echo "<tr><td>$etudiant</td><td>$note</td><td>$resultat</td></tr>";
    $somme += $note;

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }
}

$moyenneClasse = $somme / count($notes);
?>
</table>

<p>Somme des notes : <?= $somme ?></p>
<p>Moyenne de la classe : <?= $moyenneClasse ?></p>
<p>Nombre d'étudiants ayant validé : <?= $nombreValides ?></p>
<p>Meilleure note : <?= $meilleureNote ?>, obtenue par <?= $meilleurEtudiant ?></p>
<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>