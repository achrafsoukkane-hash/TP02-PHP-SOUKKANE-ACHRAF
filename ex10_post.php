<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>
<h1>Traitement POST</h1>
<?php
if (!isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {
    echo "<p>Veuillez remplir le formulaire.</p>";
} elseif (!is_string($_POST["nom"])
    || !is_string($_POST["prenom"])
    || !is_string($_POST["groupe"])) {
    echo "<p>Données invalides.</p>";
} else {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);

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
<p><a href="ex10_post.html">Retour au formulaire POST</a></p>
<p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>