<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_dependencies/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <header class="h-20">
        <nav class="navbar bg-warning">
            <div class="container-fluid justify-content-beetween offset-5">
                <form class="d-flex" role="search" method="GET">
                    <input class="form-control me-2 col-2" type="search" placeholder="Cherchez un livre ou un auteur" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Rechercher</button>
                </form>
                <a class="navbar-brand" href="./connexion.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                    </svg></a>

            </div>
        </nav>
    </header>
    <main class="mt-5 d-flex flex-column align-items-center">
        <h1 class="mb-5">Bienvenue dans notre librairie en ligne</h1>
        <h2>Nos livres les plus récents</h2>
    </main>
    <section class="mt-5 d-flex offset-1">

            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Titre du livre</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Année de publication</h6>
                    <a href="#" class="card-link">Auteur</a>
                    <a href="#" class="card-link">Catégorie</a>
                </div>
            </div>
        </section>
        <footer class="mt-5 text-center">
            <a href="">Voir tous les livres</a>
        </footer>
</body>

</html>