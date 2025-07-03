<?php

session_start();

include "../src/services/admin_service.php";

$prenom = $_SESSION['prenom'];
var_dump($_SESSION['admin_id']);
$option = list_writters()

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./partials/bootstrap.min.css">
    <title>Ajouter un livre</title>
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
    <main class="mt-5 d-flex justify-content-center">
        <form action="../src/controller/admin_controller.php" class="col-4 p-4 rounded-4 border border-warning bg-warning " method="POST">
            <div class="row mb-3">
                <label for="titre" class="col-sm-2 col-form-label text-light">Titre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="titre">
                </div>
            </div>
            <div class="row mb-3">
                <label for="categorie" class="col-sm-2 col-form-label text-light">Categorie</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="categorie">
                </div>
            </div>
            <div class="row mb-3">
                <label for="publication" class="col-sm-2 col-form-label text-light">Publication</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="publication">
                </div>
            </div>
            <div class="row mb-3">
                <label for="resume" class="col-sm-2 col-form-label text-light">Resumé</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" rows="3" name="resume"></textarea>

                </div>
            </div>
            <div class="text-center d-flex">
                <label for="auteur" class="text-light mx-3"> Auteur </label>
                <select class="form-select ms-4" aria-label="Auteur" name="auteur">
                    <option selected disabled>Choisir un auteur</option>
                    <?= $option ?>
                </select>
            </div>



            <button type="submit" class="btn btn-light text-warning offset-5 mt-3">Ajouter le livre</button>
        </form>
    </main>
</body>

</html>