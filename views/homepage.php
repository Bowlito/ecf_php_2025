<?php


session_start();

include "../src/services/admin_service.php";

$prenom = $_SESSION['prenom'];

var_dump(check_user($_SESSION['prenom'], ""));

//show_books();

$book = list_books();

$writter = show_writters();


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./partials/bootstrap.min.css">
    <title>Espace admin</title>
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
    <main>
        <div class="d-flex justify-content-center gap-5">
            <form action="./ajouter_livre.php" method="POST" class="d-flex mt-5 justify-content-center">
                <button class="border border-warning rounded-4 text-light bg-warning p-2">
                    Ajouter un livre
                </button>
            </form>
            <!-- <form action="./gestion_auteur.php" method="POST" class="d-flex mt-5 justify-content-center">
                <button class="border border-warning rounded-4 text-light bg-warning p-2">
                    Gestion auteur
                </button>
            </form> -->
        </div>
        <h2 class="text-warning text-center mt-5">Liste des livres ajoutés</h2>
        <!-- <div class="d-flex justify-content-center gap-5 mt-5"> -->
        <?= $book ?>
        <!-- </div> -->

    
    </main>
</body>

</html>