<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="assets/css/html.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/skills.css">
    <link rel="stylesheet" href="assets/css/resume.css">
    <link rel="stylesheet" href="assets/css/secret.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/admin-script.js" defer></script>
    <?php include("inc/data.inc.php"); ?>

</head>
<body>
    <header>
        <nav class="sidenav">
            <div class="haut-menu">
                <img src="<?php echo $user["photo"]?>" alt="photo de profile" class="roundedImage">
                <h2><?php echo $user["nom"]." ".$user["prenom"]?></h2>
            </div>
            <ul>
                <li><a href="index.php#hero" class="active">Accueil</a></li>
                <li><a href="index.php#about">A propos</a></li>
                <li><a href="index.php#skills">Compétence</a></li>
                <li><a href="index.php#resume">Expérience</a></li>
                <li><a href="#" id="admin">Administration</a></li>
            </ul>
            <div class="footer-menu">
                <p>© Copyright <strong>Aït-Ouarab Tom</strong></p>
            </div>
        </nav>
    </header>
    <?php include("inc/section/secret.inc.php"); ?>
    <main class="container">