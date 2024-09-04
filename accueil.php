<html>
<head>
    <meta charset="UTF-8">
    <title>Bonjour avec case à cocher</title>
</head>
<body>
<?php
if((isset($_POST["nom"]) && !empty($_POST["nom"])) or (isset($_POST["prenom"]) && !empty($_POST["prenom"]))) {
// on récupère la variable saisie
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
// traitement


//affichage
    echo 'Bienvenue ' . $_POST["nom"] . ' ' . $_POST["prenom"];
}
?>
</body>