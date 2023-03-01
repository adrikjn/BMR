<?php

session_start();
// http://localhost/bmr/index.php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>B.M.R. ACCESSOIRES</title>
</head>

<body>
    <!-- partie nav redirection php -->
    <header class="sticky-top">
        <nav class="navbar navbar-expand container ">
            <div class="navbar-brand p-2">
                <span>B.M.R. ACCESSOIRES</span>
            </div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=contact" class="nav-link">Nous contacter</a>
                </li>
            </ul>
        </nav>
    </header>

        <!-- routing des deux pages front -->
        <?php if(empty($_GET)) : ?>
            <?php require "views/accueil.php" ?>
        
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "contact") : ?>
            <?php require "views/contact.php" ?>

        <?php else : ?>
            <?php require "views/404.php" ?>
        <?php endif ?>
    

        <footer class="container">
        <p class="text-end navbar-brand mt-3">B.M.R. ACCESSOIRES</p>
        <p class="text-center p-3 fst-italic ouverture m-auto bg-light"><svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg> <u>Adresse :</u> 10 rue de Tracy 75002 Paris France. <br> <svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                <path
                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
            </svg>
            <u>Horraires :</u> 9 heures à 19 heures du lundi au samedi. <br> <svg xmlns="http://www.w3.org/2000/svg"
                width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg>
            <u>Téléphone :</u> +33 1 40 26 08 12
        </p>
        <p class="copy fst-italic text-center"> &copy; 2023. Tous droits réservés B.M.R. ACCESSOIRES </p>
    </footer>

    
</body>

</html>