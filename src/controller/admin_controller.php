<?php
session_start();
include "../repositories/admin_repository.php";

if (
    str_contains($_SERVER['HTTP_REFERER'], 'connexion') && $_SERVER['REQUEST_METHOD'] == 'POST'
) {
    $mail = $_POST['mail'];
    $pwd = $_POST['mdp'];
    $connected = check_user($mail, $pwd);
    if ($connected == true) {
        $_SESSION['mail'] = $mail;

        $_SESSION['prenom'] = show_prenom($mail);

       

        header("location: ../../views/homepage.php");
        die();
    } else {
        header("location: ../../views/connexion.php");
        die();
    }
}

if (
    str_contains($_SERVER['HTTP_REFERER'], 'ajouter_livre') && $_SERVER['REQUEST_METHOD'] == 'POST'
) {
    $auteur_id = $_POST['auteur'];
    $admin_id = $_SESSION['id'];
    $titre = $_POST['titre'];
    $categorie = $_POST['categorie'];
    $publication = $_POST['publication'];
    $resume = $_POST['resume'];
    save($auteur_id, $admin_id,$titre, $genre, $publication, $resume);

    show_books();

    //var_dump(show_books());  


    header("location:../../views/homepage.php");
    die();
}


if (
    str_contains($_SERVER['HTTP_REFERER'], 'gestion') && $_SERVER['REQUEST_METHOD'] == 'POST'
) {
    $nom = $_POST['auteur_name'];
    $nationalite = $_POST['nationalite'];

    add_writter($nom, $nationalite);

    show_writters();


    header("location:../../views/gestion_auteur.php");
    die();
}
