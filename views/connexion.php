<?php
session_start();


?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/_dependencies/bootstrap.min.css">
    <title>Connexion</title>
</head>

<body>
    <header class="h-20">
        <nav class="navbar bg-warning">
            <div class="container-fluid justify-content-beetween offset-5">
                <form class="d-flex" role="search" method="GET">
                    <input class="form-control me-2 col-2" type="search" placeholder="Cherchez un livre ou un auteur" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Rechercher</button>
                </form>
                <a class="navbar-brand text-light" href="./index.php">Accueil</a>

            </div>
        </nav>
    </header>
    <main class="mt-5 d-flex flex-column align-items-center">
        <h1 class="mb-5 text-warning">Connexion à l'espace utilisateur</h1>



        <form class="col-3 p-4 rounded-4 border border-warning bg-warning" method="POST">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label text-light">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label text-light">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>

            <button type="submit" class="btn btn-light text-warning offset-5">Sign in</button>
        </form>

    </main>
</body>

</html>