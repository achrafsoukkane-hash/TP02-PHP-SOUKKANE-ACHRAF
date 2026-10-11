<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
<h1>Traitement GET</h1>
<?php
if (!isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {
    echo "<p>Veuillez remplir le formulaire.</p>";
} elseif (!is_string($_GET["nom"])
    || !is_string($_GET["prenom"])
    || !is_string($_GET["groupe"])) {
    echo "<p>Données invalides.</p>";
} else {
    $nom = trim($_GET["nom"]);
    $prenom = trim($_GET["prenom"]);
    $groupe = trim($_GET["groupe"]);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p>Veuillez remplir les trois champs.</p>";
    } elseif (!in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
        echo "<p>Groupe invalide.</p>";
    } else {
        $nom = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars($prenom, ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars($groupe, ENT_QUOTES, "UTF-8");

        echo "<p>Bienvenue $prenom $nom, votre groupe est $groupe.</p>";
    }
}
?>
<p><a href="ex10_get.html">Retour au formulaire GET</a></p>
<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>