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
</body>

</html>