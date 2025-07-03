<?php

session_start();

include "../src/services/admin_service.php";


$prenom = $_SESSION['prenom'];

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./partials/bootstrap.min.css">
    <title>Gestion auteur</title>
</head>

<body>
    <header class="h-20">
        <nav class="navbar bg-warning">
            <div class="container-fluid justify-content-between">
                <span class="text-light">Connecté en tant que : <?= $prenom ?><br>
                    <a class="text-light" href="./connexion.php">Déconnexion</a></span>
                <h1 class="text-light">Bienvenue <?= $prenom ?></h1>
                <a class="navbar-brand text-light" href="./index.php">Accueil</a>
            </div>
        </nav>
    </header>


    <form action="../src/controller/admin_controller.php" method="POST" class="d-flex mt-5 justify-content-center col-12">
        <div class="row g-5 align-items-center d-flex">
            <div class="col-auto">
                <label for="auteur_name" class="form-label">Nom de l'auteur</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" aria-labelledby="passwordHelpInline" name="auteur_name">
            </div>
            <div class="col-auto">
                <label for="nationalite" class="form-label">Nationalité</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" aria-labelledby="passwordHelpInline" name="nationalite">
            </div>

        </div>
        <button class="border border-warning rounded-4 text-light bg-warning p-2 col-1 ms-5">
            Ajouter l'auteur
        </button>
    </form>
    <div class="d-flex flex-column align-items-center text-warning mt-5 p-2">
    <?= list_writters() ?>
    </div>
</body>

</html>