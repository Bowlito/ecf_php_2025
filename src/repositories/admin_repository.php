<?php

function check_user($mail, $pwd)
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "librairie";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "SELECT * FROM admins WHERE mail = :mail AND mdp = :pwd";
        $query = $pdo->prepare($select);
        $query->bindValue(":mail", $mail);
        $query->bindValue(":pwd", $pwd);
        $query->execute();
        $resultat = $query->fetch();
        return $resultat;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

function show_prenom($mail)
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "librairie";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "SELECT prenom FROM admins WHERE mail = :mail";
        $query = $pdo->prepare($select);
        $query->bindValue(":mail", $mail);
        $query->execute();
        $resultat = $query->fetch();
        $prenom = $resultat[0];
        return $prenom;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

function save($auteur_id, $admin_id,$titre, $genre, $publication, $resume)
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "librairie";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "INSERT INTO livres VALUES (NULL, :auteur_id, :admin_id, NOW(), :titre, :genre, :publication, :resumes)";
        $query = $pdo->prepare($select);
        $query->bindValue(":auteur_id", $auteur_id);
        $query->bindValue(":admin_id", $admin_id);
        $query->bindValue(":titre", $titre);
        $query->bindValue(":genre", $genre);
        $query->bindValue(":publication", $publication);
        $query->bindValue(":resumes", $resume);
        $query->execute();
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

function show_books()
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "librairie";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "SELECT * FROM livres ORDER BY annee_publication DESC LIMIT 10";
        $query = $pdo->prepare($select);
        $query->execute();
        $resultat = $query->fetchAll();
        return $resultat;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

function add_writter($nom, $nationalite)
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "librairie";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "INSERT INTO auteurs VALUES (NULL, :nom, :nationalite)";
        $query = $pdo->prepare($select);
        $query->bindValue(":nom", $nom);
        $query->bindValue(":nationalite", $nationalite);
        $query->execute();
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

function show_writters()
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "librairie";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "SELECT * FROM auteurs";
        $query = $pdo->prepare($select);
        $query->execute();
        $resultat = $query->fetchAll();
        return $resultat;
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

function modify_book($titre, $genre, $publication)
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "librairie";

    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "UPDATE livres SET titre = :titre, categories = :genre, annee_publication = :publication WHERE titre = :titre";
        $query = $pdo->prepare($select);
        $query->bindValue(":titre", $titre);
        $query->bindValue(":genre", $genre);
        $query->bindValue(":publication", $publication);
        $query->execute();
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}